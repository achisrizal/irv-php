//menampilkan map sesuai posisi
var map = new L.map("map").setView([-7.322, 109.594], 8);

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
  clearLayer();
  showData();
};

var dataBaru, heat, a;

function showData() {
  (dataBaru = []), (a = []);

  for (var i = 0; i < data.length; i++) {
    if (parseFloat(data[i].amplitude) >= output.textContent) {
      dataBaru.push(data[i]);
    }
  }

  heat = new L.heatLayer(dataBaru, {
    radius: 15,
    maxZoom: 8,
  }).addTo(map);

  for (var i = 0; i < dataBaru.length; i++) {
    var contentPopup =
      "Amplitude : " +
      dataBaru[i].amplitude +
      " m/s<sup>2</sup><br>Latitude : " +
      dataBaru[i].lat +
      "<br>Longitude : " +
      dataBaru[i].lng +
      "<br>Kecepatan : - km/h<br><br><b>" +
      dataBaru[i].name +
      "</b>";

    var circle = new L.circleMarker([dataBaru[i].lat, dataBaru[i].lng], {
      color: "transparent",
      fillColor: "transparent",
      radius: 10,
    })
      .addTo(map)
      .bindTooltip(contentPopup, { direction: "top" });

    a.push(circle);
  }
}

function clearLayer() {
  for (i = 0; i < a.length; i++) {
    map.removeLayer(a[i]);
  }
  map.removeLayer(heat);
}

var stasiunTerdekat, c;

map.on("click", function (e) {
  if (c != null) {
    for (i = 0; i < c.length; i++) {
      map.removeLayer(c[i]);
    }
  }

  (stasiunTerdekat = []), (c = []);

  for (i = 0; i < stations.length; i++) {
    if (
      e.latlng.lat - stations[i].lat <= 0.05 &&
      e.latlng.lng - stations[i].lng <= 0.05 &&
      e.latlng.lat - stations[i].lat >= -0.05 &&
      e.latlng.lng - stations[i].lng >= -0.05
    ) {
      stasiunTerdekat.push(stations[i]);
    }
  }

  for (i = 0; i < 2; i++) {
    var contentPopup = stasiunTerdekat[i].name;

    var marker = new L.marker([
      stasiunTerdekat[i].lat,
      stasiunTerdekat[i].lng,
    ]).bindPopup(contentPopup);

    c.push(marker);
    map.addLayer(c[i]);
  }
});
