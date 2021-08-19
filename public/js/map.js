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
  clearLayer();
  showData();
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

  for (i = 0; i < data.length; i++) {
    if (parseFloat(data[i].amplitude_z) >= output.textContent) {
      dataBaru.push(data[i]);
    }
  }

  heat = new L.heatLayer(dataBaru, {
    radius: 15,
    maxZoom: 8,
  }).addTo(map);

  for (i = 0; i < dataBaru.length; i++) {
    gj = L.geoJson(geojson);
    nearest = leafletKnn(gj).nearest(
      L.latLng(dataBaru[i].lat, dataBaru[i].lng),
      2
    );

    row =
      "<tr><td>" +
      dataBaru[i].lat +
      "</td><td>" +
      dataBaru[i].lng +
      "</td><td>" +
      dataBaru[i].amplitude_z +
      "</td><td>" +
      nearest[0].layer.feature.title +
      ", " +
      nearest[1].layer.feature.title +
      "</td></tr>";

    table = document.getElementById("downloadTable");
    table.innerHTML += row;

    contentPopup =
      "Amplitude : " +
      dataBaru[i].amplitude_z +
      " m/s<sup>2</sup><br>Latitude : " +
      dataBaru[i].lat +
      "<br>Longitude : " +
      dataBaru[i].lng +
      "<br>Kecepatan : - km/h<br>Stasiun Terdekat : <br>" +
      nearest[0].layer.feature.title +
      "<br>" +
      nearest[1].layer.feature.title +
      "<br><br><b>" +
      dataBaru[i].name +
      "</b>";

    circle = new L.circleMarker([dataBaru[i].lat, dataBaru[i].lng], {
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
    table.innerHTML = "";
  }

  map.removeLayer(heat);
}

map.on("click", function (e) {
  if (nearest != null) {
    for (i = 0; i < nearest.length; i++) {
      map.removeLayer(nearest[i].layer);
    }
  }

  gj = L.geoJson(geojson);
  nearest = leafletKnn(gj).nearest(L.latLng(e.latlng), 2);

  for (i = 0; i < nearest.length; i++) {
    console.log(nearest[i]);
    map.addLayer(nearest[i].layer);
    nearest[i].layer
      .bindPopup(nearest[i].layer.feature.properties.popupContent)
      .openPopup();
  }
});

function getLoc(lat, lng) {
  map.setView(new L.LatLng(lat, lng), 8);
}
