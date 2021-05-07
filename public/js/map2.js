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
};
