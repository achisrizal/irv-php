//menampilkan map sesuai posisi
var map = L.map("map").setView([-7.322, 109.594], 8);

//map
var tiles = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

var slider = document.getElementById("myRange");
var output = document.getElementById("amplitude");
output.innerHTML = slider.value;
dataShow();

slider.oninput = function () {
  output.innerHTML = this.value;
  clearLayer();
  dataShow();
};

var dataBaru, b, heat, marker, circle, i;

// for (i = 0; i < stasiun.length; i++) {
//   circle = new L.circleMarker([stasiun[i][2], stasiun[i][3]], {
//     radius: 5,
//     color: "black",
//     fillColor: "black",
//   })
//     .addTo(map)
//     .bindPopup(stasiun[i][0] + "<br> Stasiun " + stasiun[i][1]);
// }

function dataShow() {
  (dataBaru = []), (b = []);

  for (i = 0; i < data.length; i++) {
    if (data[i][2] >= output.innerHTML) {
      dataBaru.push(data[i]);
    }
  }

  heat = L.heatLayer(dataBaru, { radius: 10 }).addTo(map);

  for (i = 0; i < dataBaru.length; i++) {
    circle = new L.circleMarker([dataBaru[i][0], dataBaru[i][1]], {
      color: "transparent",
      fillColor: "transparent",
    })
      .addTo(map)
      .bindPopup(
        "Amplitude : " +
          dataBaru[i][2] +
          "  m/s<sup>2</sup> <br> latitude : " +
          dataBaru[i][0] +
          "<br> Longitude : " +
          dataBaru[i][1] +
          "<br><br><b>BOOGIE</b>"
      );
    b.push(circle);
  }
}

function clearLayer() {
  for (i = 0; i < b.length; i++) {
    map.removeLayer(b[i]);
  }
  map.removeLayer(heat);
}
