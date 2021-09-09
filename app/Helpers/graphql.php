<?php

declare(strict_types=1);

// Run local test server
// php -S localhost:8080 graphql.php

// Try query
// curl -d '{"query": "query { echo(message: \"Hello World\") }" }' -H "Content-Type: application/json" http://localhost:8080

// Try mutation
// curl -d '{"query": "mutation { sum(x: 2, y: 2) }" }' -H "Content-Type: application/json" http://localhost:8080

require_once __DIR__ . '/../../vendor/autoload.php';

use GraphQL\GraphQL;
use GraphQL\Utils\BuildSchema;
use GraphQL\Server\StandardServer;

try {
    $schema    = BuildSchema::build(
        /** @lang GraphQL */
        '
            type GeoLocation {
                latitude: Float!
                longitude: Float!
                altitude: Float!
            }
            
            type NodePositionDto {
                trainComponent: TrainComponentEnum!
                fr: FREnum!
                lr: LREnum!
            }
            
            enum TrainComponentEnum {
                AXLEBOX
                BOGIE
                CABIN
            }
            
            enum FREnum {
                FRONT
                REAR
            }
            
            enum LREnum {
                LEFT
                RIGHT
            }
            
            type VibrationData {
                x: [Float!]
                y: [Float!]
                z: [Float!]
                nodePosition: NodePositionDto!
                threshold: Float!
            }
            
            type Vibration {
                recordedAt: Float!
                gatewayId: String!
                nodeId: String!
                location: GeoLocation!
                data: VibrationData!
            }
            
            type Node {
                id: String!
                key: String!
                status: String
                battery: Float
                temperature: Float
            }
            
            type Gateway {
                id: String!
                name: String!
                signal: Float
                battery: Float
                temperature: Float
                speed: Float
                measurement: Boolean
                location: GeoLocation
                nodes: [Node!]
            }
            
            type GatewayLocation {
                gatewayId: String!
                latitude: Float!
                longitude: Float!
                altitude: Float!
                lastUpdate: String
            }
            
            type GatewayTelemetry {
                gatewayId: String!
                type: String!
                payload: String!
            }
            
            type Uptime {
                time: Float!
                inSecond: Float
            }
            
            type AuthToken {
                token: String!
            }
            
            type User {
                id: String!
                username: String!
                role: String!
            }
            
            type Query {
                uptime: Uptime!
                assignedNodes(where: GetGatewayInput!): [Node!]!
                gateway(where: GetGatewayInput!): Gateway!
                gateways: [Gateway!]!
                me: String!
                users: [User!]!
                vibrations(where: GetVibrationsDataInput!): [Vibration!]
            }
            
            input GetGatewayInput {
                gatewayId: String!
            }
            
            input GetVibrationsDataInput {
                gatewayId: String!
                nodeIds: [String!]!
                startDate: DateTime
                endDate: DateTime
            }
            
            # A date-time string at UTC, such as 2019-12-03T09:54:33Z, compliant with the date-time format.
            scalar DateTime
            
            type Mutation {
                assignNodeToGateway(input: AssignNodeInput!): String!
                createGateway(input: CreateGatewayInput!): String!
                createNode(input: CreateNodeInput!): String!
                findNode(where: FindNodeInput!): String!
                changeGatewayMeasurementStatus(
                where: ChangeGatewayMeasurementStatusInput!
                ): String!
                changeNodePosition(where: ChangeNodePositionInput!): String!
                changeNodeThreshold(where: ChangeNodeThresholdInput!): String!
                changePassword(input: ChangePasswordInput!): String!
                createUser(input: CreateUserInput!): String!
                login(input: LoginInput!): AuthToken!
            }
            
            input AssignNodeInput {
                gatewayId: String!
                nodeId: String!
            }
            
            input CreateGatewayInput {
                name: String!
            }
            
            input CreateNodeInput {
                key: String!
            }
            
            input FindNodeInput {
                gatewayId: String!
                nodeId: String!
            }
            
            input ChangeGatewayMeasurementStatusInput {
                gatewayId: String!
                measurement: Boolean!
            }
            
            input ChangeNodePositionInput {
                gatewayId: String!
                nodeId: String!
                position: NodePosition!
            }
            
            input NodePosition {
                trainComponent: TrainComponentEnum!
                fr: FREnum!
                lr: LREnum!
            }
            
            input ChangeNodeThresholdInput {
                gatewayId: String!
                nodeId: String!
                threshold: Float!
            }
            
            input ChangePasswordInput {
                password: String!
            }
            
            input CreateUserInput {
                username: String!
                password: String!
            }
            
            input LoginInput {
                username: String!
                password: String!
            }
            
            type Subscription {
                gatewayBattery(gateway_id: String!): GatewayTelemetry!
                gatewayLocation(gateway_id: String!): GatewayLocation!
                gatewaySignal(gateway_id: String!): GatewayTelemetry!
                gatewaySpeed(gateway_id: String!): GatewayTelemetry!
                gatewayTemperature(gateway_id: String!): GatewayTelemetry!
            }
          
        '
    );


    $server = new StandardServer(['https://backend.staging.irv.co.id/graphql']);
    $server->handleRequest(); // parses PHP globals and emits response

    $rootValue = [
        'echo' => static fn (array $rootValue, array $args): string => $rootValue['prefix'] . $args['message'],
        'sum' => static fn (array $rootValue, array $args): int => $args['x'] + $args['y'],
        'prefix' => 'You said: ',
    ];

    $rawInput       = file_get_contents('php://input');
    $input          = json_decode($rawInput, true);
    $query          = $input['query'];
    $variableValues = $input['variables'] ?? null;

    $result = GraphQL::executeQuery($schema, $query, $rootValue, null, $variableValues);
} catch (Throwable $e) {
    $result = [
        'error' => [
            'message' => $e->getMessage(),
        ],
    ];
}

header('Content-Type: application/json; charset=UTF-8');
echo json_encode($result);
