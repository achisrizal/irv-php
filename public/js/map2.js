'use strict';
//menampilkan map sesuai posisi
var map = new L.map("map").setView([lat, lng], 15);

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
  i;

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

  marker = L.marker([lat, lng]).addTo(map);
}

// find node 
function findNode() {
  var query = `mutation{
                findNode(where: {
                  gatewayId: "` + gatewayId + `",
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

// change threshold for node 
function changeNodeThreshold() {
  var query = `mutation{
                changeNodeThreshold(where: {
                  gatewayId:"` + gatewayId + `",
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
      .then(data => console.log('data returned:', data));
};

// auto refresh
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

// change button 
const btn = document.getElementById("refreshing");

if(btn.innerHTML === '<i class="fas fa-stop text-gray-500"></i> Stop Refreshing'){
  window.onload = timedRefresh(30000);
}

function battery() {
  var query = `subscription {
    gatewayBattery(gateway_id: "61323609c53397d06bcfc6ff"){
      payload
    }
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