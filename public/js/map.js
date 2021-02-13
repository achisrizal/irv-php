//menampilkan map sesuai posisi
var map = new L.map("map").setView([-7.322, 109.594], 8);

//map
var tiles = L.tileLayer(
  "https://{s}.tile.thunderforest.com/transport/{z}/{x}/{y}.png?apikey={apikey}",
  {
    attribution:
      '&copy; <a href="http://www.thunderforest.com/">Thunderforest</a>, &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    apikey: "ef85ec23377f400f80385d6a0a9249da",
    maxZoom: 22,
  }
).addTo(map);

var slider = document.getElementById("myRange");
var output = document.getElementById("amplitude");
output.innerHTML = slider.value;
dataShow();

slider.oninput = function () {
  output.innerHTML = this.value;
  clearLayer();
  dataShow();
};

var dataBaru, b, heat, marker, circle, i, stasiunTerdekat, c;

function dataShow() {
  (dataBaru = []), (b = []);

  for (i = 0; i < data.length; i++) {
    if (data[i][2] >= output.innerHTML) {
      dataBaru.push(data[i]);
    }
  }

  heat = new L.heatLayer(dataBaru, { radius: 15 }).addTo(map);

  for (i = 0; i < dataBaru.length; i++) {
    var contentPopup =
      "Amplitude : " +
      dataBaru[i][2] +
      "  m/s<sup>2</sup> <br> latitude : " +
      dataBaru[i][0] +
      "<br> Longitude : " +
      dataBaru[i][1] +
      "<br> Kecepatan : - km/h";

    circle = new L.circleMarker([dataBaru[i][0], dataBaru[i][1]], {
      color: "transparent",
      fillColor: "transparent",
      radius: 10,
    })
      .addTo(map)
      // bindPopup(contentPopup);
      .bindTooltip(contentPopup, { direction: "top" });

    b.push(circle);
  }
}

function clearLayer() {
  for (i = 0; i < b.length; i++) {
    map.removeLayer(b[i]);
  }
  map.removeLayer(heat);
}

map.on("click", function (e) {
  if (c != null) {
    for (i = 0; i < c.length; i++) {
      map.removeLayer(c[i]);
    }
  }

  (stasiunTerdekat = []), (c = []);

  for (i = 0; i < stasiun.length; i++) {
    if (
      e.latlng.lat - stasiun[i][2] <= 0.03 &&
      e.latlng.lng - stasiun[i][3] <= 0.03
    ) {
      if (
        e.latlng.lat - stasiun[i][2] >= -0.03 &&
        e.latlng.lng - stasiun[i][3] >= -0.03
      ) {
        stasiunTerdekat.push(stasiun[i]);
      }
    }
  }

  for (i = 0; i < stasiunTerdekat.length; i++) {
    var contentPopup = stasiunTerdekat[i][1];

    marker = new L.marker([
      stasiunTerdekat[i][2],
      stasiunTerdekat[i][3],
    ]).bindPopup(contentPopup);

    c.push(marker);
    map.addLayer(c[i]);
  }
});
