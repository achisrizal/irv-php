//menampilkan map sesuai posisi
var map = new L.map("map").setView([-7.522, 109.594], 8);

//map
var tiles = L.tileLayer(
  "https://{s}.tile.thunderforest.com/transport/{z}/{x}/{y}.png?apikey={apikey}",
  {
    attribution:
      '&copy; <a href="http://www.thunderforest.com/">Thunderforest</a>, &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    apikey: "ef85ec23377f400f80385d6a0a9249da",
  }
).addTo(map);

var slider = document.getElementById("myRange");
var output = document.getElementById("amplitude");
output.innerHTML = slider.value;
showData();

slider.oninput = function () {
  output.innerHTML = this.value;
  changeNodeThreshold();
};

var dataBaru,
  heat,
  a,
  b,
  i,
  j,
  gj,
  row,
  table,
  stasiun,
  nearest,
  circle,
  contentPopup;

function showData() {
  (dataBaru = []), (a = []);

  for (var i = 0; i < data.length; i++) {
    if (parseFloat(data[i].amplitude_z) >= output.textContent) {
      dataBaru.push(data[i]);
    }
  }

  heat = new L.heatLayer(dataBaru, {
    radius: 15,
    maxZoom: 8,
  }).addTo(map);

  // for (var i = 0; i < dataBaru.length; i++) {
  //   var gj = L.geoJson(geojson);
  //   nearest = leafletKnn(gj).nearest(
  //     L.latLng(dataBaru[i].lat, dataBaru[i].lng),
  //     2
  //   );

  //   row =
  //     "<tr><td>" +
  //     dataBaru[i].lat +
  //     "</td><td>" +
  //     dataBaru[i].lng +
  //     "</td><td>" +
  //     dataBaru[i].amplitude_z +
  //     "</td><td>" +
  //     nearest[0].layer.feature.title +
  //     ", " +
  //     nearest[1].layer.feature.title +
  //     "</td></tr>";

  //   table = document.getElementById("downloadTable");
  //   table.innerHTML += row;

  //   contentPopup =
  //     "Amplitude : " +
  //     dataBaru[i].amplitude_z +
  //     " m/s<sup>2</sup><br>Latitude : " +
  //     dataBaru[i].lat +
  //     "<br>Longitude : " +
  //     dataBaru[i].lng +
  //     "<br>Kecepatan : - km/h<br>Stasiun Terdekat : <br>" +
  //     nearest[0].layer.feature.title +
  //     "<br>" +
  //     nearest[1].layer.feature.title +
  //     "<br><br><b>" +
  //     dataBaru[i].name +
  //     "</b>";

  //   circle = new L.circleMarker([dataBaru[i].lat, dataBaru[i].lng], {
  //     color: "transparent",
  //     fillColor: "transparent",
  //     radius: 10,
  //   })
  //     .addTo(map)
  //     .bindTooltip(contentPopup, { direction: "top" });

  //   a.push(circle);
  // }
}

// find node 
function findNode() {
  var query = `mutation{
                findNode(where: {
                  gatewayId: "` + gatewayId + `",
                  nodeId: "` + nodeId + `",
                })
              }`;

  fetch('https://backend.staging.irv.co.id/graphql', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'Authorization': 'Bearer ' + token
          },
          body: JSON.stringify({
            query,
          })
      })
      .then(r => r.json())
      .then(data => console.log('data returned:', data));
};

// change threshold for node 
function changeNodeThreshold() {
  var query = `mutation{
                changeNodeThreshold(where: {
                  gatewayId:"` + gatewayId + `",
                  nodeId:"` + nodeId + `",
                  threshold: ` + slider.value + `
                })
              }`;

  fetch('https://backend.staging.irv.co.id/graphql', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'Authorization': 'Bearer ' + token
          },
          body: JSON.stringify({
              query,
          })
      })
      .then(r => r.json())
      .then(data => console.log('data returned:', data));
};


// function record() {
//     var d = new Date();
//     var t = new Date(d.getTime()); d.setSeconds(d.getSeconds() - 3);

//     // startDate:"`+ d.toJSON() + `"
//     // endDate: "`+ t.toJSON() + `"
//     // startDate:"2021-07-01T00:00:01Z"
//     // endDate: "2021-08-01T00:00:01Z"
//     var query = `query{
//         vibrations(find:
//         {
//             deviceId:"`+ deviceId + `",
//             nodeIds:["`+ nodeId + `"],
//             startDate:"`+ d.toJSON() + `"
//             endDate: "`+ t.toJSON() + `"
//         } ){
//             location{
//                 latitude
//                 longitude
//             }
//             data{
//                 z
//                 y
//                 x
//             }
//         }
//     }`;

//     fetch('https://backend.irv.co.id/graphql', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'Accept': 'application/json',
//             'Authorization': 'Bearer ' + token
//         },
//         body: JSON.stringify({
//             query,
//         })
//     })
//     .then(r => r.json())
//     .then(data => console.log('data returned:', data));
// };

// change button 
const btn = document.getElementById("record");

btn.addEventListener("click", ()=>{
    if(btn.innerHTML === '<i class="fas fa-play text-gray-500"></i> Start Recording'){
        btn.innerHTML = '<i class="fas fa-stop text-gray-500"></i> Stop Recording';
    }else{
        btn.innerHTML = '<i class="fas fa-play text-gray-500"></i> Start Recording';
    }
})