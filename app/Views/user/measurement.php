<?= $this->extend('user/templates/index'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>


    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="overflow-auto">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="table-responsive">
                            <table class="table" id="example" width="100%" cellspacing="0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Battery</th>
                                        <th>Nodes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>6070238fb5ff2e3465bea763</td>
                                        <td>Device 1</td>
                                        <td><i class="fas fa-circle mr-2 text-success"></i>Online</td>
                                        <td>50%</td>
                                        <td>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4001</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4002</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4003</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4004</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6070238fb5ff2e3465bea763</td>
                                        <td>Device 2</td>
                                        <td><i class="fas fa-circle mr-2 text-success"></i>Online</td>
                                        <td>50%</td>
                                        <td>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4005</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4006</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4007</button>
                                            <button class="btn btn-light btn-sm"><i class="fas fa-microchip text-gray-500"></i> 4008</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4">
            <!-- Threshold  -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="col">
                        <h4 class="text-center">Device 1</h4>

                        <div class="d-flex justify-content-center">
                            <div class="mr-4 p-3 text-center align-self-end">
                                <span class="text-xl">50%</span>
                                <br>
                                <span class="text-sm text-gray-500">Battery</span>
                            </div>

                            <div class="p-3 text-center align-self-end">
                                <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-w-20 fa-3x">
                                    <g class="fa-group">
                                        <path fill="currentColor" opacity="1" d="M104 400v96a16 16 0 0 1-16 16H40a16 16 0 0 1-16-16v-96a16 16 0 0 1 16-16h48a16 16 0 0 1 16 16z"></path>
                                        <path fill="currentColor" opacity="1" d="M 216 288 L 168 288 C 159.1634440027073 288 152 295.1634440027073 152 304 L 152 496 C 152 504.8365559972927 159.1634440027073 512 168 512 L 216 512 C 224.8365559972927 512 232 504.8365559972927 232 496 L 232 304 C 232 295.1634440027073 224.8365559972927 288 216 288 Z"></path>
                                        <path fill="currentColor" opacity="1" d="M 344 192 L 296 192 C 287.1634440027073 192 280 199.1634440027073 280 208 L 280 496 C 280 504.8365559972927 287.1634440027073 512 296 512 L 344 512 C 352.8365559972927 512 360 504.8365559972927 360 496 L 360 208 C 360 199.1634440027073 352.8365559972927 192 344 192 Z"></path>
                                        <path fill="currentColor" opacity="0.5" d="M 472 96 L 424 96 C 415.1634440027073 96 408 103.16344400270731 408 112 L 408 496 C 408 504.8365559972927 415.1634440027073 512 424 512 L 472 512 C 480.8365559972927 512 488 504.8365559972927 488 496 L 488 112 C 488 103.16344400270731 480.8365559972927 96 472 96 Z"></path>
                                        <path fill="currentColor" opacity="0.5" d="M 600 0 L 552 0 C 543.1634440027073 1.6232490026356266e-15 536 7.1634440027073065 536 16 L 536 496 C 536 504.8365559972927 543.1634440027073 512 552 512 L 600 512 C 608.8365559972927 512 616 504.8365559972927 616 496 L 616 16 C 616 7.163444002707308 608.8365559972927 5.410830008785422e-16 600 0 Z"></path>
                                    </g>
                                </svg>
                                <span class="text-sm text-gray-500">Signal</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">

                            <button class="btn btn-light"><i class="fas fa-upload text-gray-500"></i> Backup Data</button>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-light btn-sm mb-4 active"><i class="fas fa-microchip text-gray-500"></i> 4001</button>
                            <button class="btn btn-light btn-sm mb-4"><i class="fas fa-microchip text-gray-500"></i> 4002</button>
                            <button class="btn btn-light btn-sm mb-4"><i class="fas fa-microchip text-gray-500"></i> 4003</button>
                            <button class="btn btn-light btn-sm mb-4"><i class="fas fa-microchip text-gray-500"></i> 4004</button>
                        </div>

                        <div class="d-flex justify-content-center shadow mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 281 366">
                                <g transform="translate(0 69)">
                                    <path fill="#b3b3b3" stroke-width="0.347" d="M31.949 -27.857H48.003V113.965H31.949z" style="cursor: pointer;">
                                        <title>Bogie Front Left</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.347" d="M31.896 113.975H47.95V255.797H31.896z" style="cursor: pointer;">
                                        <title>Bogie Rear Left</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.347" d="M233.053 -27.82H249.107V114.00200000000001H233.053z" style="cursor: pointer;">
                                        <title>Bogie Front Right</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.347" d="M233.001 114.012H249.055V255.834H233.001z" style="cursor: pointer;">
                                        <title>Bogie Rear Right</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.185" d="M59.825 -41.078H68.421V34.771H59.825z" style="cursor: pointer;">
                                        <title>Axlebox Front Left</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.185" d="M59.456 193.051H68.052V268.9H59.456z" style="cursor: pointer;">
                                        <title>Axlebox Rear Left</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.185" d="M212.752 -41.159H221.348V34.690000000000005H212.752z" style="cursor: pointer;">
                                        <title>Axlebox Front Right</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.185" d="M212.383 192.97H220.979V268.819H212.383z" style="cursor: pointer;">
                                        <title>Axlebox Rear Right</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.265" d="M5.533 -63.544H25.535V-33.509H5.533z" style="cursor: pointer;">
                                        <title>Cabin Front Left</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.265" d="M5.533 261.449H25.535V291.48400000000004H5.533z" style="cursor: pointer;">
                                        <title>Cabin Rear Left</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.265" d="M255.532 -63.544H275.534V-33.509H255.532z" style="cursor: pointer;">
                                        <title>Cabin Front Right</title>
                                    </path>
                                    <path fill="#b3b3b3" stroke-width="0.265" d="M255.532 261.449H275.534V291.48400000000004H255.532z" style="cursor: pointer;">
                                        <title>Cabin Rear Right</title>
                                    </path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 3.893h3.492V-3.41"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M53.475-3.41l-.063.127v.127l-.064.127-.063.127-.127.064-.064.063-.254.127-.444.254-.19.064-.255.127-.254.063-.254.064-.254.063-.19.064h-.254l-.254.063h-.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M53.475 221.57v-4.952"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M53.475 221.57h-.063v.064l-.064.064h-.063l-.127.063h-.064l-.254.064-.444.063h-.19l-.255.064h-.508l-.444.063h-1.016"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M53.475 216.618l-.063.127v.127l-.064.127-.063.063-.127.127-.064.064-.254.127-.444.254-.19.063-.255.064-.254.127-.254.063-.254.064h-.19l-.254.063h-.254l-.508.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 3.893h3.111V-3.6"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24-4.49l.127.128.19.127.19.127.191.063.19.064.191.127.381.063.381.127h.445l.38.064h.445"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M77.351 221.507v-5.08"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M77.351 221.507h-.444l-.381-.063H75.7l-.381-.064h-.19l-.191-.063h-.19l-.19-.064h-.191l-.127-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 215.538l.127.127.19.127.19.064.191.127.19.063.191.064.381.127.381.063.445.064.38.063h.445"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M227.592 11.195V3.893h3.493"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M227.592 11.195v-.127l.064-.127.063-.127.064-.063.063-.127.127-.064.19-.127.445-.254.254-.063.254-.064.19-.127.255-.063.254-.064h.254l.254-.063h.254l.508-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M227.592 231.16v-9.59"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M227.592 221.57v0l.064.064.063.064h.064l.063.063h.127l.19.064.445.063h.254l.254.064h.445l.508.063h1.016"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M227.592 231.16v-.064l.064-.127.063-.127.064-.127.063-.064.127-.063.19-.127.445-.254.254-.127.254-.064.19-.063.255-.064.254-.063.254-.064h.254l.254-.063h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716 11.386V3.893h3.112"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828 12.275l-.191-.127-.127-.127-.19-.064-.19-.127-.191-.063-.19-.064-.382-.127-.444-.063-.381-.064-.445-.063h-.38"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716 231.413v-9.906"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716 221.507h.381l.445-.063h.825l.381-.064h.19l.191-.063h.19l.191-.064h.127l.19-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828 232.302l-.191-.127-.127-.127-.19-.127-.19-.063-.191-.127-.19-.064-.382-.063-.444-.127-.381-.064h-.825"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M53.475-3.41l3.747-1.143"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 12.402l-3.747-1.207"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 232.366l-3.747-1.207v-.38l3.747 1.142"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 12.402l3.746-1.207V-3.41l-3.746-1.143"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 231.921l3.746-1.143v-14.16l-3.746-1.207"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M77.351-3.6h126.365v14.986H77.351V-3.6"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716 216.427v14.605H77.351v-14.605h126.365"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716 11.386H77.351"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M77.351-3.6h126.365"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716 231.413v-.38H77.351v.38h126.365"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716-3.6v7.493h3.112"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716-3.6h.381l.445-.064h.38l.445-.127.381-.063.19-.127.191-.064.19-.063.191-.127.127-.127.19-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828 221.19l-.191.063h-.127l-.19.064h-.19l-.191.063h-.19l-.382.064h-.825l-.445.063h-.38"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716 221.507v-5.08"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M203.716 216.427h.381l.445-.063.38-.064.445-.063.381-.127.19-.064.191-.063.19-.127.191-.064.127-.127.19-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M227.592-3.41v7.303h3.493"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M227.592-3.41v.127l.064.127.063.127.064.127.063.064.127.063.19.127.445.254.254.064.254.127.19.063.255.064.254.063.254.064h.254l.254.063h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 222.015h-1.016l-.508-.063h-.444l-.255-.064h-.254l-.444-.063-.19-.064h-.128l-.063-.063h-.064l-.063-.064-.064-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M227.592 221.57v-4.952"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M227.592 216.618v.127l.064.127.063.127.064.063.063.127.127.064.19.127.445.254.254.063.254.064.19.127.255.063.254.064h.254l.254.063h.254l.508.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 3.893h3.111v7.493"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M77.351 11.386h-.444l-.381.063-.445.064-.381.063-.381.127-.19.064-.191.063-.19.127-.19.064-.191.127-.127.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 221.19l.127.063h.19l.19.064h.191l.19.063h.191l.381.064H76.526l.38.063h.445"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M77.351 231.413v-9.906"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M77.351 231.413h-.825l-.445.064-.381.127-.381.063-.19.064-.191.127-.19.063-.19.127-.191.127-.127.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222-4.553L53.475-3.41v14.605l3.747 1.207"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 231.921l-3.747-1.143v-14.16l3.747-1.207"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 3.893h3.492v7.302"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M53.475 11.195l-.063-.127v-.127l-.064-.127-.063-.063-.127-.127-.064-.064-.254-.127-.444-.254-.19-.063-.255-.064-.254-.127-.254-.063-.254-.064h-.19l-.254-.063h-.254l-.508-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 222.015h1.016l.444-.063h.508l.254-.064h.19l.445-.063.254-.064h.064l.127-.063h.063l.064-.064v-.063h.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M53.475 231.16v-9.59"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M53.475 231.16l-.063-.064v-.127l-.064-.127-.063-.127-.127-.064-.064-.063-.254-.127-.444-.254-.19-.127-.255-.064-.254-.063-.254-.064-.254-.063-.19-.064h-.254l-.254-.063h-.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334 34.69v-48.07"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334-13.38h.445l.19-.063h.127l.19-.063h.128l.063-.064.127-.063h.064l.063-.064.064-.063.254-.254.127-.127.063-.064h.064l.063-.063h.889l.127.063h.127l.127.064.064.063.063.064v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 34.69v-48.64"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334 269.069v-46.99"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334 222.079h1.461l.254-.064h1.714v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 270.53v-48.515"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334 269.069h.445l.19.063.127.064.19.063.128.127.063.127.127.127.064.127.127.318.254.571.127.318.063.127.064.127.063.063.064.064h.127l.063.063h.317l.191-.063h.127l.127-.127.127-.064.127-.127.064-.127.063-.19v-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M212.733 34.69v-67.246"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 34.69v-68.516"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24-33.826l.064-.127v-.127l.127-.127.064-.064.127-.127.127-.063h.19l.127-.064h.19l.191.064h.127l.064.063.063.064.127.063.064.127.127.254.19.508.064.127.063.064.127.127.064.127.127.063.127.127.127.064h.19l.127.063h.19l.318.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M212.733 199.219v-5.97"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M212.733 199.219h-.317l-.191-.064h-.127l-.19-.063h-.127l-.127-.064-.127-.063-.064-.064-.127-.063-.063-.127-.064-.064-.19-.317-.127-.19-.064-.064-.127-.064-.063-.063h-.191l-.19-.064h-.191l-.127.064h-.19l-.127.063-.127.064-.064.063-.127.064v.063l-.063.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 198.393v-5.143"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19-13.062v0-.063h.127v-.064h.508l.064-.063h.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.952 34.69v-47.942"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19 34.69v-47.752"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19 222.142v0h.127v0l.127-.063h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.952 268.624V222.08"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19 268.116v-45.974"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.952 268.624l-.254-.063-.254-.064-.127-.063v0l-.063-.064-.064-.063v-.191"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.115 34.69v-66.929"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.115-32.239v0h.191l.127.064h.127l.127.063h.063l.064.064v.063h.063v.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877 34.69v-66.548"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877 199.727v-.127h-.063v0l-.064-.064h-.063l-.127-.063h-.445v-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.115 199.41v-6.16"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877 199.727v-6.477"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222-.425v0l.063-.064v0h.064l.19-.063h.381l.254-.064h.254l.254-.063.508-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 15.196V-.425"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19 15.958l-.508-.127-.508-.19-.508-.128-.127-.063-.127-.064-.127-.063-.063-.064v-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 223.476v0h.063v-.064h1.905"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 235.223v-11.747"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19 235.985l-.508-.19-.508-.127-.508-.19h-.127l-.127-.064-.127-.064-.063-.063v-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877-5.886l.508.19.254.064h.254l.19.063.255.064.19.063.127.064h.064l.063.063v.064h.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 15.196V-5.251"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 15.196l-.064.063v.064l-.127.063-.127.064-.127.063-.508.127-.508.19-.508.128"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 217.697h-.064v-.063h-.127l-.127-.064h-.19l-.254-.063-.191-.064h-.254l-.254-.063-.508-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 217.697v-5.08"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877 211.855l.508.127.508.19.508.128.127.063.127.064.127.063v.064l.064.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763-.997h.318l.38.064.7.063.317.064h.19l.127.063h.064l.127.064h.127v.063l.063.064h.064v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 15.45V-.552"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 16.783l.318-.127.38-.127.7-.19.317-.127.19-.064.127-.063.19-.127.128-.19v-.064l.063-.064.064-.127v-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 223.412H74.113v0h.127v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 235.477v-12.065"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 236.747l.318-.063.38-.127.7-.19.317-.128.19-.063.127-.127.19-.127.128-.127v-.064l.063-.127.064-.063v-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828 15.45V-5.442"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828-5.442v-.127l.063-.063.064-.064.127-.127.063-.063.064-.064.19-.063.127-.064.381-.063.699-.19.317-.064.318-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 16.783l-.317-.127-.317-.127-.699-.19-.38-.127-.128-.064-.19-.063-.127-.127-.127-.19-.064-.064-.063-.064v-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 216.872l-.317.063-.317.064-.699.127-.38.063h-.128l-.19.064h-.064l-.063.063-.127.064-.064.063-.063.064v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828 217.57v-5.207"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 211.03l-.317.127-.317.127-.699.19-.38.127-.128.064-.19.063-.127.127-.127.19-.064.064-.063.064v.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.952 34.69V-40.81"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334 34.69v-75.946l-8.382.445"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334 193.25v75.755l-8.382-.444V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.115 261.322V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.535" d="M221.115 268.624l-8.382.422V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24-.552v-7.112"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24-.552v0h-.064l-.063-.064v-.063h-.127l-.127-.064h-.064l-.127-.063h-.19L73.16-.87l-.698-.063-.381-.064h-.318"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763-8.934l.318.063.38.127.7.19.317.128.19.063.127.127.19.064.128.19v.064l.063.127.064.063v.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 223.412v-11.049"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 223.412v0h-.127v0h-2.35"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 211.03l.318.127.38.127.7.19.317.127.19.064.127.063.19.127.128.19v.064l.063.064.064.063v.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828-5.442v-2.222"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24-6.521l-.317.127-.317.063-.699.19-.38.064-.128.064-.19.063-.064.064-.063.063-.127.127-.064.064-.063.063v.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24-8.934l-.317.063-.317.127-.699.19-.38.128-.128.063-.19.127-.127.064-.127.19-.064.064-.063.127v.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828 235.477V217.57"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828 217.57v-.063 0l.063-.064.064-.063.127-.064.063-.063h.064l.19-.064h.127l.381-.063.699-.127.317-.064.318-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 236.747l-.317-.063-.317-.127-.699-.19-.38-.128-.128-.063-.19-.127-.127-.127-.127-.127-.064-.064-.063-.127v-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 15.45V-7.664"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M74.24 235.477v-23.114"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828 15.45V-7.664"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M206.828 235.477v-23.114"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 15.196V-7.41"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 235.223v-22.606"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 15.196V-7.41"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 235.223v-22.606"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19-.743l-.508.064-.254.063h-.254l-.254.064h-.381l-.19.063h-.064v0l-.063.064v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222-.425V-7.41"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222-7.41v-.064l.063-.063.127-.064.127-.063h.127l.508-.19.508-.128.508-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19 223.412h-1.905v.064h-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 223.476v-10.859"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M57.222 212.617v-.063l.063-.064.127-.063.127-.064.127-.063.508-.127.508-.19.508-.128"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846-5.251v-2.16"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846-5.251h-.064v-.064l-.063-.063h-.064l-.127-.064-.19-.063-.254-.064-.191-.063h-.254l-.254-.064-.508-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877-8.172l.508.19.508.127.508.19h.127l.127.064.127.064v.063l.064.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877 217.316l.508.064.254.063h.254l.19.064.255.063h.19l.127.064h.127v.063h.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 235.223v-17.526"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 235.223l-.064.064v.063l-.127.064-.127.063h-.127l-.508.19-.508.128-.508.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19 34.69v-74.993"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19 268.116V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877 34.69v-74.993"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.952-13.252v-27.56"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.952-13.252h-.063l-.064.063h-.508v.064h-.127v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19-13.062v-27.241"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19-40.303v-.191l.064-.063.063-.064v0l.127-.063.254-.064.127-.063h.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.952 222.079v-28.83"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.952 222.079h-.507l-.128.063v0h-.127v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M59.19 222.142V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.115-32.239v-8.572"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877-31.858v-8.445"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877-31.858v-.127h-.063v-.063l-.064-.064h-.063l-.127-.063h-.127l-.127-.064h-.191v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.115-40.811l.254.063.19.064.128.063h.063l.064.064v.063l.063.064v.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.115 268.624V199.41"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.115 199.41v.063h.445l.127.063h.063l.064.064v0h.063v.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877 268.116v-68.39"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M221.877 268.116v.127l-.063.064v.063l-.064.064h-.063l-.127.063-.191.064-.127.063h-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763-13.95v-28.83"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763-13.95v-.064l-.063-.064-.064-.063-.127-.064h-.127l-.127-.063h-.889l-.063.063h-.064l-.063.064-.127.127-.254.254-.064.063-.063.064h-.064l-.127.063-.063.064h-.127l-.19.063h-.128l-.19.064h-.445"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334-13.38v-27.876"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334-41.256h.445l.19-.063.127-.064.19-.063.128-.127.063-.127.127-.127.064-.127.127-.318.254-.571.127-.318.063-.127.064-.127.063-.063.064-.064h.127l.063-.063h.317l.191.063h.127l.127.064.127.127.127.127.064.127.063.19v.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 222.015V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 222.015v0H70.05l-.254.064h-1.461"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334 222.079v-28.83"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24-33.826v-8.954"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M212.733-32.556v-8.7"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M212.733-32.556l-.317-.064h-.191l-.127-.063h-.19l-.127-.064-.127-.127-.127-.063-.064-.127-.127-.127-.063-.064-.064-.127-.19-.508-.127-.254-.064-.127-.127-.063-.063-.064-.064-.063h-.127l-.19-.064h-.191l-.127.064h-.19l-.127.063-.127.127-.064.064-.127.127v.127l-.063.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M212.733-41.256h-.508l-.127-.063-.19-.064-.127-.063-.127-.127-.127-.127-.064-.127-.127-.127-.127-.318-.19-.571-.127-.318-.064-.127-.127-.127-.063-.063-.064-.064h-.063l-.064-.063h-.381l-.127.063h-.19l-.127.064-.127.127-.064.127-.127.127v.19l-.063.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 270.53v-72.137"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 198.393l.064-.127v-.063l.127-.064.064-.063.127-.064.127-.063h.19l.127-.064h.19l.191.064h.191l.063.063.127.064.064.063.127.19.19.318.064.064.063.127.127.063.064.064.127.063.127.064h.127l.19.063h.127l.19.064h.318"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M212.733 269.069v-69.85"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M212.733 269.069h-.508l-.127.063-.19.064-.127.063-.127.127-.127.127-.064.127-.127.127-.127.318-.19.571-.127.318-.064.127-.127.127-.063.063-.064.064h-.063l-.064.063h-.381l-.127-.063h-.19l-.127-.127-.127-.064-.064-.127-.127-.127v-.19l-.063-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 34.69v-77.47"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M71.763 270.53v-77.28"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 34.69v-77.47"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M209.24 270.53v-77.28"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M223.846 232.366l3.746-1.207v-.38l-3.746 1.142"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M68.334 269.069v-.064l-8.382-.444v.063l8.382.445"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.523" d="M212.733-41.256V34.69l8.382-.269v-75.206l-8.382-.47"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.729 169.818h-.127l-.064.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.475 169.882l-.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.284 170.009l-.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.094 170.136l-.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.84 170.263l-.064.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.65 170.453l-.128.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.459 170.58l-.127.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.078 170.834h184.848"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.736 170.644l-.127-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.482 170.517l-.127-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.291 170.326l-.127-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.037 170.2l-.063-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.847 170.072l-.064-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.656 169.945l-.063-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.466 169.882l-.064-.064h-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.339 169.818H49.729"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 57.042l.064.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.078 57.106h184.848"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.926 57.106h.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.99 57.106v-.064H47.95"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 255.353V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 169.755V58.249"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 34.69v-62.103"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M251.087 255.353V-27.413"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 34.69v-62.103"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 169.755V58.249"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 255.353V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98 255.353V-27.413"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 134.957h-1.016l-1.016-.953v-.635"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M229.053 94.57V94l1.016-1.017h1.016"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98 135.084l-.127-.064h-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.409 134.957h-.445v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.409 92.983h-.445v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.409 92.983h.127l.19-.063h.127l.127-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 92.856l.127.064h.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.49 92.983H51L51.95 94v.572"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M51.951 133.37v.634l-.952.953h-.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.49 134.957h-.126l-.127.063h-.127l-.127.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.99 57.106v-21.59"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.99 57.042V35.58H47.443v21.463H232.99"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.443 35.58H232.99v-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.99 35.516l-.254-.127-.19-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.355 35.135l-.127-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.037 34.944l-.127-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.783 34.817l-.127-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.53 34.754l-.064-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.602 34.69v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.538 34.69l-.063.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.348 34.754l-.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.094 34.88l-.191.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.713 35.071l-.127.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.522 35.198l-.063.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.395 35.325l-.19.127-.127.064-.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 35.58h-.507v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.602 34.69h181.8"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 58.249v-.064h.063l.064-.063h.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.339 58.122H49.729"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.729 58.122h.063l.127.063h.064v.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 59.138h181.102"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.926 57.106H48.078"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.332 57.296l.127.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.522 57.423l.127.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.776 57.614l.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.967 57.74l.127.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.157 57.868l.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.348 57.995l.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.538 58.058l.064.064h.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.729 58.122h181.61"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.339 58.122h.063l.064-.064h.127l.063-.063.127-.064.064-.063.19-.127.254-.127.19-.19.191-.128.127-.063.127-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 35.58v-63.437"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.522 35.198l-.127.127v0h-.063v0l-.064.064-.063.063h-.064l-.063.064-.064.063v0h-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.586 35.135l.127-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.903 34.944l.19-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.22 34.817l.128-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.475 34.754l.063-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 34.69v-62.103"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983-27.413v-.063h-.064l-.127-.064-.063-.063-.191-.064-.127-.063h-.254l-.19-.064h-.254l-.254-.063h-.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M233.053 255.797h16.002V114.002h-16.002v-141.86h16.002v141.86h-16.002v141.795"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M251.087 92.983h1.016"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M252.103 134.957h-1.016"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M251.087-27.413l-.063-.063v0l-.127-.064-.127-.063-.127-.064-.191-.063h-.19l-.19-.064h-.255l-.254-.063h-.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M251.087-27.413v141.415h-2.032v-141.86"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M249.055 255.797V114.002h2.032"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M249.055 255.797h.762l.254-.063h.19l.191-.064.19-.063.128-.064h.127l.127-.063v-.064l.063-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M251.087 255.353V114.002"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M251.087-27.38a2 2 0 00-2-2.001"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M249.055-27.857h.508l.254.063h.254l.19.064h.191l.19.063.128.064.127.063.127.064v0l.063.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M249.055-27.857v-1.524"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M251.087 255.353l-.063.063v.064l-.127.063h-.127l-.127.064-.191.063-.19.064h-.19l-.255.063h-.762"></path>
                                    <g transform="scale(-.35278 .35278) rotate(89.994 -714.945 8.8)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M5.67 0A5.67 5.67 0 010 5.67"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M249.055 257.321v-1.524"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M249.055-27.857v-1.524h-16.002v1.524h16.002"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 291.545 369.197)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M5.67 0A5.67 5.67 0 010 5.67"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M249.055 257.321v-1.524h-16.002v1.524h16.002"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 291.545 369.197)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M5.67 0A5.67 5.67 0 010 5.67"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M233.053-27.857v-1.524"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085-27.413v-.063h.063l.064-.064.127-.063.127-.064.19-.063h.19l.191-.064h.254l.254-.063h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M233.053 257.321v-1.524"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 233.085 255.321)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M5.67 0A5.67 5.67 0 010 5.67"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M233.053 255.797h-.762l-.254-.063h-.19l-.19-.064-.191-.063-.127-.064h-.127l-.064-.063-.063-.064v-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 34.69v-62.103"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.466 34.69l.063.064h.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.783 34.817l.127.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.037 34.944l.19.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.609 35.262l.063.063v0l.064.064h.063v0l.127.063.064.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.99 57.106h-.064l-.127.127v0l-.063.063-.064.064h-.063l-.127.063-.127.127-.064.064-.127.063-.127.064-.063.063-.127.064-.064.063-.127.064-.063.063h-.127l-.064.064h-.19l-.064.063h-.063v.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M233.053-27.857v141.859h-1.968V58.249"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M233.053-27.857h-.508l-.254.063h-.254l-.19.064h-.19l-.191.063-.127.064-.127.063-.064.064h-.063v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 255.353V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 255.353v.063l.063.064.064.063h.127l.127.064.19.063.19.064h.191l.254.063h.762"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M233.053 255.797V114.002h-1.968v55.753"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 169.755v0h.063l.064.063h.19l.064.064.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.656 169.945l.127.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.847 170.072l.127.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.164 170.263l.127.127.127.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.609 170.58l.063.064h.064l.063.063v0l.127.127h.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.99 192.424l-.127.064-.127.063-.064.064v0l-.127.127-.19.127-.191.063-.19.127-.19.064-.128.063h-.063l-.127.064h-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M252.04 134.957h-.953"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M251.087 92.983h.953"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.99 170.898H47.443v21.463H232.99v-21.463"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.402 193.25h.064l.127-.064h.063l.064-.063.19-.064.19-.063.255-.127.19-.127.19-.19.255-.128"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.99 192.424v-.063H47.443v0h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 192.36h.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.459 192.678l.063.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.586 192.805l.127.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.903 192.996l.19.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.22 193.123l.128.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.475 193.186l.063.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.602 193.25v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.602 193.25h181.8"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 168.802H49.983h181.102"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.339 169.818h-.127l-.064-.063h-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M231.085 168.802H49.983"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 169.755v0h-.064l-.127.063h-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.729 169.818h181.61"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.926 170.834H48.078"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.078 170.834l-.064.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 170.898h185.04v-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M232.99 170.834h-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 255.797v-63.436h-.507v0-21.463 0h.508v-56.896H31.949v141.795H47.95"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.538 193.25l-.063-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.22 193.123l-.126-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.713 192.869l-.127-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.332 192.615h.063v.063h.064v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.268 192.615l-.063-.064-.064-.063-.127-.127v0h-.064v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 255.797v-63.436"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 255.797h.763l.254-.063h.19l.254-.064.127-.063.19-.064h.064l.127-.063.064-.064v-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 255.353V193.25"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M31.949-29.381H47.95"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.443 57.042v0V35.58v0h.508v-63.436H31.949v141.859H47.95v-56.96h-.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 257.321H31.95"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M31.949-27.857h-.508l-.254.063h-.191l-.254.064h-.19l-.19.063-.128.064-.127.063-.063.064h-.064v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M31.949-27.857v141.859H29.98V-27.413"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98 255.353V114.002h1.969"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98 255.353v.063l.064.064.063.063h.127l.127.064.19.063.191.064h.254l.19.063h.763"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M31.949 255.797V114.002"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 6.515 84.139)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M5.67 0A5.67 5.67 0 010 5.67"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M31.949-27.857v-1.524"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98-27.413v-.063h.064l.063-.064.127-.063.127-.064.19-.063h.191l.254-.064h.19l.255-.063h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M31.949 255.797h-.762l-.191-.063h-.254l-.19-.064-.19-.063-.128-.064h-.127l-.063-.063-.064-.064v-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M31.949 257.321v-1.524"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 31.98 255.321)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M5.67 0A5.67 5.67 0 010 5.67"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M31.949-29.381H47.95v1.524H31.949v-1.524"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983-27.38a2 2 0 00-2-2.001"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M31.949 255.797H47.95v1.524H31.949v-1.524"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983-27.38a2 2 0 00-2-2.001"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95-27.857h.509l.254.063h.254l.19.064h.254l.127.063.19.064.064.063.127.064h.064v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95-27.857v-1.524"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M47.95 257.321v-1.524"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 255.353v.063l-.064.064-.127.063h-.063l-.191.064-.127.063-.254.064h-.19l-.254.063h-.762"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 47.982 255.321)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M5.67 0A5.67 5.67 0 010 5.67"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 114.002V58.249"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 58.249v-.064h-.064l-.127-.063h-.19l-.127-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.348 57.995l-.064-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.157 57.868l-.063-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.84 57.677l-.064-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.522 57.423l-.063-.063h-.064l-.063-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.078 57.106h-.064v-.064 0h-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 114.002H47.95v-56.96"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.014 170.834h.064l.127-.127h.063l.064-.063.063-.064h.064v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.522 170.517l.127-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.776 170.326l.064-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.967 170.2l.127-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.157 170.072l.127-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.475 169.882h.127l.063-.064h.127l.127-.063h.064v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 169.755v-55.753H47.95v56.896"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M48.014 170.834v.064h-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.681 92.92h-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.49 92.856h-.126"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.3 92.793l-.063-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.173 92.666l-.063-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.11 92.475l-.064-.063v-.127l-.063-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 92.158v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.11 135.465l-.064.063v.127l-.063.064v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.11 135.401l.063-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.237 135.274l.063-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.364 135.147l.127-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.554 135.02h.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.282 135.02h.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.472 135.084l.064.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.663 135.21l.063.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.79 135.338v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.853 135.465v.063l.064.127v.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98 135.782v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.917 92.285v-.064l.063-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.917 92.348l-.064.064v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.79 92.539l-.064.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.726 92.73l-.063.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.536 92.856h-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.345 92.92h-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.745 92.983h.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.49 92.983h-.19l-.063-.063h-.064l-.127-.064h-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 92.158v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.046 92.412l.064.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.173 92.666l.064.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.3 92.793l.064.063h.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.554 92.92v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.681 92.92l.064.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 91.967v.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.872 134.957h-.127l-.127.063h-.127l-.064.064-.127.127-.063.063-.064.064-.063.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.11 135.465l-.064.063v.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M50.49 134.957h-.126l-.19.063v0h-.064v.064h-.127v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M49.983 135.782v.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.155 134.957h-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.409 134.957h.127l.063.063h.127l.127.064h.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98 135.782l-.063-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.853 135.528v-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.79 135.338l-.064-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.663 135.21l-.127-.063-.064-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.409 135.02h-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.282 135.02l-.127-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98 135.973v-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.091 92.983h.064l.127-.063h.127l.127-.064.127-.063.063-.064.064-.127.063-.063v-.127l.064-.127.063-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98 92.856h-.063l-.064.064v0h-.063v0l-.191.063h-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M29.98 92.158v-.19"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 360.685 37.624)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M35.37 0c0 19.534-15.835 35.37-35.368 35.37-19.534 0-35.37-15.833-35.372-35.367"></path>
                                    </g>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 140.502 113.97)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M8.37 0A8.37 8.37 0 01-8.37 0"></path>
                                    </g>
                                    <g transform="matrix(.0937 .3401 .3401 -.0937 40.934 101.207)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 2.948-.135 5.895-.405 8.832"></path>
                                    </g>
                                    <g transform="matrix(-.0937 -.3401 -.3401 .0937 240.07 126.734)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 2.948-.135 5.895-.405 8.832"></path>
                                    </g>
                                    <g transform="matrix(.11374 .33394 .33394 -.11374 240.07 101.207)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 1.035-.017 2.07-.05 3.105"></path>
                                    </g>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 140.502 113.97)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M-8.37 0A8.37 8.37 0 118.37 0 8.37 8.37 0 01-8.37 0"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M224.48 135.719h3.62v-2.667"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.77 135.719h-6.667v-2.668"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M61.54 130.448h8.318"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M219.464 130.448H69.858"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.77 93.809v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.77 134.131v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.77 134.131l.128-.317"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M259.977 129.432v-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M260.104 128.797l.064-.571"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M260.612 125.622l.127-1.143"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M260.93 122.955l.063-.635v-.698l.064-.635.063-.699"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M261.184 119.209v-.826l.063-.889"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M261.247 110.446l-.063-.89v-.825"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M261.12 107.652l-.063-.699-.064-.635v-.698l-.063-.635"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M260.739 103.46l-.127-1.142"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M260.168 99.714l-.064-.571"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M259.977 98.571v-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.898 94.19l-.127-.381"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M261.247 114.002V117.367l-.063.699v1.27l-.064.698-.063.699v.635l-.064.698-.063.635-.064.699-.063.698-.064.635-.127.699-.063.635-.127.698-.064.635-.127.635-.127.699-.127.635-.127.635-.19.698-.127.635-.19.699-.128.635-.19.635-.19.635-.191.635-.254.635"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.39 135.21h-6.287v-2.158"></path>
                                    <g transform="matrix(.11374 .33394 .33394 -.11374 240.07 101.207)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 1.035-.017 2.07-.05 3.105"></path>
                                    </g>
                                    <g transform="matrix(-.12456 .33006 .33006 .12456 240.07 101.207)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 2.948-.135 5.895-.405 8.832"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M228.1 133.052v2.667h-3.62v-.254"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M224.48 135.497a4.985 4.985 0 00-4.984-4.985"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M219.464 130.448h-6.096"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M213.368 130.448h1.016l.318-.063.38-.064h.128l.19-.063.19-.064h.128l.127-.063.063-.064.064-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M215.972 130.004V98"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M215.972 98v-.064l-.064-.063-.063-.064h-.127l-.127-.063-.191-.064h-.19l-.127-.063-.382-.064h-.317l-.317-.063H213.368"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M213.368 97.492h6.096"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 219.496 92.444)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M14.13 0c0 7.803-6.325 14.13-14.129 14.13"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M224.48 92.475v-.254h3.62v2.73"></path>
                                    <g transform="matrix(-.0937 -.3401 -.3401 .0937 240.07 126.734)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 2.948-.135 5.895-.405 8.832"></path>
                                    </g>
                                    <g transform="scale(.35278 -.35278) rotate(69.329 600.01 312.422)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 1.035-.017 2.07-.05 3.105"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M252.103 94.952v-2.223h6.287"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.39 92.73l.254.634.19.635.19.635.191.635.127.699.19.635.128.635.19.698.127.635.127.635.127.699.127.635.064.698.127.635.063.699.127.635.064.698.063.635.064.699.063.635.064.698v.635l.063.699.064.698v1.334l.063.635v3.429"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M169.87 98v32.004h41.466V98h4.636v32.004h-4.636V98h-41.465"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M169.87 98h-4.635v32.004h4.636V98"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M115.769 98h49.466v32.004h-49.466V98"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M224.48 135.465v.254"></path>
                                    <g transform="matrix(-.12456 .33006 .33006 .12456 240.07 101.207)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 2.948-.135 5.895-.405 8.832"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M228.1 94.952v-2.73h-3.62"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M252.103 94.952V92.22h6.668"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M61.54 97.492h157.924"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M224.48 92.221v.254"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 219.496 92.444)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M14.13 0c0 7.803-6.325 14.13-14.129 14.13"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M224.48 92.475v0"></path>
                                    <g transform="scale(.35278 -.35278) rotate(69.329 600.01 312.422)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 1.035-.017 2.07-.05 3.105"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.297 135.719h6.667"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.297 93.809v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.297 93.809l-.127.38"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M21.09 98.508v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M20.963 99.143l-.127.571"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M20.455 102.318l-.19 1.143"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M20.138 104.985l-.064.635-.063.698-.064.635v.699"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M19.884 108.731l-.064.826v.889"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M19.82 117.494v.89l.064.825"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M19.947 120.288v.699l.064.635.063.698.064.635"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M20.265 124.48l.19 1.142"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M20.836 128.226l.127.571"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M21.09 129.369v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.17 133.814l.127.317"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.297 134.131v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M19.757 114.002V111.906l.063-.635v-1.333l.064-.699v-.635l.063-.698v-.699l.064-.635.063-.698.064-.635.063-.699.064-.635.063-.698.064-.635.127-.699.063-.635.127-.698.127-.635.127-.699.127-.635.127-.635.127-.698.127-.635.19-.635.191-.699.19-.635.191-.635.19-.635.191-.635"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.614 92.73h6.35v2.222"></path>
                                    <g transform="scale(-.35278 .35278) rotate(-71.186 192.943 260.68)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 1.035-.017 2.07-.05 3.105"></path>
                                    </g>
                                    <g transform="scale(.35278 -.35278) rotate(69.329 317.769 -95.725)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 2.948-.135 5.895-.405 8.832"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M52.967 94.952v-2.73h3.62v.253"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 61.571 92.444)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M14.13 0c0 7.803-6.325 14.13-14.129 14.13"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M61.54 97.492h6.096"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M67.636 97.492H67l-.381.063h-.318l-.317.064-.19.063h-.128l-.19.064-.127.063h-.127l-.127.064v.063l-.064.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M65.032 98v32.004"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M65.032 130.004h.064v.063l.127.064.127.063h.127l.19.064.127.063h.19l.318.064.318.063h1.016"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M67.636 130.448H61.54"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 279.328 -104.767)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M14.13 0c0 7.803-6.325 14.13-14.129 14.13"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M56.587 135.465v.254h-3.62v-2.667"></path>
                                    <g transform="matrix(.0937 .3401 .3401 -.0937 40.934 101.207)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 2.948-.135 5.895-.405 8.832"></path>
                                    </g>
                                    <g transform="matrix(-.12456 .33006 .33006 .12456 40.934 101.207)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 1.035-.017 2.07-.05 3.105"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M28.964 133.052v2.159h-6.35"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.614 135.21l-.19-.634-.191-.635-.19-.635-.191-.635-.19-.635-.191-.699-.127-.635-.127-.698-.127-.635-.127-.635-.127-.699-.127-.635-.127-.635-.063-.698-.127-.635-.064-.699-.063-.635-.064-.698-.063-.699-.064-.635-.063-.698-.064-.635v-.699l-.063-.698v-.635l-.064-.635V116.669l-.063-.635v-2.032"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M65.032 98h4.636v32.004h-4.636V98"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M115.769 98v32.004H69.668V98h41.465v32.004V98h4.636"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M56.587 135.719v-.254"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 279.328 -104.767)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M14.13 0c0 7.803-6.325 14.13-14.129 14.13"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M56.587 135.465v0"></path>
                                    <g transform="matrix(-.12456 .33006 .33006 .12456 40.934 101.207)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 1.035-.017 2.07-.05 3.105"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M56.587 92.221h-3.62v2.73"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M28.964 94.952V92.22h-6.667"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M56.587 92.475v-.254"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 61.571 92.444)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M14.13 0c0 7.803-6.325 14.13-14.129 14.13"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M56.587 92.475v0"></path>
                                    <g transform="scale(.35278 -.35278) rotate(69.329 317.769 -95.725)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M96.39 0c0 2.948-.135 5.895-.405 8.832"></path>
                                    </g>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 360.685 37.624)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M8.37 0A8.37 8.37 0 01-8.37 0"></path>
                                    </g>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 140.502 113.97)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M-35.37.003C-35.372-19.53-19.538-35.368-.003-35.37 19.53-35.372 35.368-19.538 35.37-.003 35.372 19.53 19.538 35.368.003 35.37-19.53 35.372-35.368 19.538-35.37.003"></path>
                                    </g>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 360.685 37.624)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M-28.35.003C-28.352-15.655-15.66-28.35-.003-28.35 15.655-28.352 28.35-15.66 28.35-.003 28.352 15.655 15.66 28.35.003 28.35-15.655 28.352-28.35 15.66-28.35.003"></path>
                                    </g>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 140.502 113.97)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M35.37 0c0 19.534-15.835 35.37-35.368 35.37-19.534 0-35.37-15.833-35.372-35.367"></path>
                                    </g>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 360.685 37.624)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M28.35 0c0 15.657-12.692 28.35-28.349 28.35-15.656 0-28.35-12.69-28.351-28.347"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M213.368 130.448h1.016l.064-.063h.254l.38-.064.318-.063.318-.127.19-.064h.064v-.063 0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.336 130.004h4.636"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.336 130.004v.19l-.063.127v.064l-.064.063h-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.146 130.448h2.222"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.146 130.448h.063l.064-.063v-.064l.063-.127v-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.336 130.004h-41.465"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M169.87 130.004v.317l-.063.064-.063.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M169.744 130.448h41.402"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M169.744 130.448v0l.063-.063.064-.064v-.317"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 130.004h4.636"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 130.004v.444"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 130.448h4.509"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 130.448v0-.444"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 130.004h-49.466"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M115.769 130.004v.381l.063.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M115.832 130.448h49.403"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M115.832 130.448v0l-.063-.063v-.381"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.133 130.004h4.636"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.133 130.004v.19l.064.127v.064l.063.063h.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.324 130.448h4.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.324 130.448h-.064l-.063-.063v-.064l-.064-.127v-.19"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.133 130.004H69.668"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M69.668 130.004l.063.127v.19l.064.064v.063h.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M69.858 130.448h41.466"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M65.032 130.004h.064v.063h.063l.127.064.381.127.318.063.317.064h.254l.127.063h.953"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M67.636 130.448h2.222"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M69.858 130.448h-.063v-.063l-.064-.064v-.19l-.063-.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M65.032 130.004h4.636"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M215.972 98v-.127h-.064l-.19-.064-.318-.127-.317-.063-.318-.064h-.381l-.317-.063h-.698"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.146 97.492h2.222"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.146 97.492h.063l.064.063v.064l.063.127V98"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.336 98h4.636"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.336 98v-.254l-.063-.127v-.064l-.064-.063h-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M211.146 97.492h-41.402"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M169.744 97.492v0l.063.063.064.064V98"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M169.87 98h41.466"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M169.87 98v-.381l-.063-.064-.063-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 97.492h4.509"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 97.492V98"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 98h4.636"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 98v-.508 0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M165.235 97.492h-49.403"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M115.832 97.492v0l-.063.063V98"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M115.769 98h49.466"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M115.769 98v-.445l.063-.063v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.324 97.492h4.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.324 97.492h-.064l-.063.063v.064l-.064.127V98"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.133 98h4.636"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.133 98v-.254l.064-.127v-.064l.063-.063h.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M111.324 97.492H69.858"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M69.858 97.492h-.063v.063l-.064.064v.254l-.063.127"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M69.668 98h41.465"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M67.636 97.492H66.81l-.127.063h-.381l-.317.064-.318.063-.38.127-.128.064h-.063v.063l-.064.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M65.032 98h4.636"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M69.668 98l.063-.127v-.254l.064-.064v-.063h.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M67.636 97.492h2.222"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M261.755 114.002v-2.794l-.063-1.334-.064-1.397-.063-1.397-.064-1.333-.127-1.397-.19-1.334-.191-1.397-.19-1.397-.254-1.333-.254-1.334-.318-1.333-.381-1.334-.19-.698-.19-.635-.255-.699-.19-.635"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.58 92.475l.19-.254"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.58 92.475v.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.517 92.539v.063l-.064.064v0l-.063.063.444 1.27.381 1.27.318 1.334.317 1.333.254 1.27.254 1.334.19 1.333.191 1.334.127 1.333.127 1.334.064 1.397.127 1.333v1.334l.063 1.333v2.731"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M261.247 114.002h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M261.247 114.002v2.667l-.063 1.333v1.334l-.127 1.397-.064 1.333-.127 1.334-.127 1.333-.19 1.334-.191 1.333-.254 1.334-.254 1.333-.317 1.27-.318 1.334-.38 1.27-.445 1.27.063.063v.064h.064v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.58 135.401v.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.58 135.465l.19.254"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.77 135.719l.191-.635.254-.699.19-.635.191-.635.381-1.397.318-1.333.254-1.334.254-1.333.19-1.397.19-1.334.191-1.397.127-1.397.064-1.333.063-1.397.064-1.397.063-1.334v-2.73"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M261.247 114.002h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M19.757 114.002v-1.397l.063-1.334v-1.333l.064-1.334.063-1.333.127-1.397.127-1.334.127-1.333.19-1.334.191-1.333.19-1.334.318-1.27.254-1.333.381-1.334.381-1.27.381-1.27v-.063h-.063v-.064 0l-.064-.063-.063-.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.297 92.221l.127.254"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.297 92.221l-.254.635-.191.699-.19.635-.191.698-.381 1.334-.317 1.333-.318 1.334-.19 1.333-.254 1.397-.19 1.397-.128 1.334-.127 1.397-.127 1.333-.063 1.397-.064 1.397v1.334l-.063 1.397v1.397"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M19.249 114.002h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M19.249 114.002v1.333l.063 1.397v1.334l.064 1.397.063 1.397.127 1.333.127 1.397.127 1.397.19 1.334.255 1.397.19 1.333.318 1.334.317 1.333.381 1.397.19.635.191.635.19.699.255.635"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.297 135.719l.127-.254"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.424 135.465l.063-.064.064-.063v0l.063-.064v-.063l-.38-1.27-.382-1.27-.38-1.334-.255-1.27-.317-1.333-.19-1.334-.191-1.333-.19-1.334-.128-1.333-.127-1.334-.127-1.333-.063-1.397-.064-1.334v-1.333l-.063-1.334v-1.333"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M19.249 114.002h.508"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.614 135.21v.064l-.063.064-.064.063-.063.064-.064.063v.127h-.063v.064"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.297 135.719h6.667v-.508h-6.35"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.297 92.221v.064l.063.063v.064l.064.063.063.064.064.063.063.064v.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M22.614 92.73h6.35v-.509h-6.667"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.39 92.73l.063-.064v-.064l.064-.063.063-.064.064-.063.063-.064v-.063l.064-.064v0"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.77 92.221h-6.667v.508h6.287"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.77 135.719v0l-.063-.064v0l-.063-.127-.064-.063-.063-.064-.064-.063v-.064l-.063-.063"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M258.39 135.21h-6.287v.509h6.668"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M198.89 102.699v22.606"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 198.731 125.273)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M198.7 125.495h-17.59"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 181.078 125.273)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M180.92 125.305v-22.606"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 402.173 111.16)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M181.11 102.445h17.59"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M198.89 125.305v-22.606"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 198.731 125.273)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M181.11 125.495h17.59"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 181.078 125.273)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M180.92 102.699v22.606"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 402.173 111.16)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M198.7 102.445h-17.59"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M196.922 104.985v17.97"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 196.382 122.987)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M196.414 123.463h-13.018"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 183.428 122.987)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M182.888 122.955v-17.97"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 408.744 111.25)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M183.396 104.477h13.018"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M196.858 104.953a.476.476 0 00-.476-.476"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M196.922 122.955v-17.97"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 196.382 122.987)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M183.396 123.463h13.018"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 183.428 122.987)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M182.888 104.985v17.97"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 408.744 111.25)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M196.414 104.477h-13.018"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M196.858 104.953a.476.476 0 00-.476-.476"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M84.654 104.477h12.954"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M98.116 104.953a.476.476 0 00-.477-.476"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M98.116 104.985v17.97"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 97.64 122.987)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M97.608 123.463H84.654"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 84.622 122.987)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M84.146 122.955v-17.97"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 268.704 -28.804)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M84.146 104.985v17.97"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 84.622 122.987)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M84.654 123.463h12.954"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 97.64 122.987)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M98.116 122.955v-17.97"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M97.608 104.477H84.654"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 268.704 -28.804)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M1.35 0A1.35 1.35 0 010 1.35"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M82.368 102.445h17.59"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M100.148 102.699v22.606"></path>
                                    <g transform="matrix(-.00004 .35278 .35278 .00004 99.925 125.273)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M99.957 125.495h-17.59"></path>
                                    <g transform="matrix(-.35278 -.00004 -.00004 .35278 82.336 125.273)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M82.114 125.305v-22.606"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 262.223 -28.804)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M82.114 102.699v22.606"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M82.368 125.495h17.59"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M100.148 125.305v-22.606"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M99.957 102.445h-17.59"></path>
                                    <g transform="scale(.35278 -.35278) rotate(89.994 262.223 -28.804)">
                                        <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="1.44" d="M.63 0A.63.63 0 010 .63"></path>
                                    </g>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M275.535 261.449h-20.003v30.035"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M5.533-33.509h20.002v-30.035"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M25.535 291.484V261.45H5.533"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M255.532-63.544v30.035h20.003"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M5.533 291.484V-63.544"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M5.533-63.544h270.002v355.028H5.533"></path>
                                    <path fill="none" stroke="#000" stroke-dasharray="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-opacity="1" stroke-width="0.508" d="M.516-68.497V296.5h279.972V-68.497H.516"></path>
                                </g>
                            </svg>
                        </div>

                        <div class="row mb-4">
                            <button class="btn btn-success btn-block"><i class="fas fa-search"></i> Find Node</button>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-car-battery mr-2"></i>
                            </div>
                            <div class="col-8">
                            </div>
                            <div class="col-2">
                                %
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                Min Amplitude : <span id="amplitude"></span> m/s<sup>2</sup>
                                <input type="range" class="custom-range" min="0" max="160" value="10" id="myRange" name="myRange" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-8">
            <!-- Map -->
            <div class="card shadow mb-4">
                <div class="card-img" id="map" style="height: 125vmin;"></div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>


<?= $this->section('CSS'); ?>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

<link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?= $this->endSection(); ?>


<?= $this->section('JS'); ?>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>/js/demo/datatables-demo.js"></script>

<!-- Leaflet JS -->
<script src=" https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="">
</script>

<script src="<?= base_url('js/map2.js'); ?>"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "scrollY": "100px",
            "scrollCollapse": true,
            "paging": false
        });
    });
</script>

<?= $this->endSection(); ?>