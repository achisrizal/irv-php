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

slider.oninput = function () {
  output.innerHTML = this.value;
  changeNodeThreshold();
};

function findNode() {
  var query = `mutation{
                findNode(find: {
                  deviceId: "` + deviceId + `",
                  nodeId: "` + nodeId + `",
                })
              }`;

  fetch('https://backend.irv.co.id/graphql', {
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

function changeNodeThreshold() {
  var query = `mutation{
                changeNodeThreshold(find:{
                  deviceId:"` + deviceId + `",
                  nodeId:"` + nodeId + `",
                  threshold: ` + slider.value + `
                })
              }`;

  fetch('https://backend.irv.co.id/graphql', {
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
      .then(data => console.log('data returned:', data, slider.value));
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

const btn = document.getElementById("record");

btn.addEventListener("click", ()=>{
    if(btn.innerHTML === '<i class="fas fa-play text-gray-500"></i> Start Recording'){
        btn.innerHTML = '<i class="fas fa-stop text-gray-500"></i> Stop Recording';
    }else{
        btn.innerHTML = '<i class="fas fa-play text-gray-500"></i> Start Recording';
    }
})