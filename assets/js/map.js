mapboxgl.accessToken = 'pk.eyJ1IjoiY2hhbGlkYWRlcmFobWFuIiwiYSI6ImNrNHRneGc4dzA4YmIza25vdnd1cGQxNmUifQ.3TJcDhIyugJL7V2F111tHQ';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [112.752165, -7.257113],
  zoom: 3
});

var url = 'http://localhost/uapi/map';

map.on('load', function() {
  var request = new XMLHttpRequest();
  window.setInterval(function() {
    // make a GET request to parse the GeoJSON at the url
    request.open('GET', url, true);
    request.onload = function() {
      if (this.status >= 200 && this.status < 400) {
        // retrieve the JSON from the response
        var json = JSON.parse(this.response);

        // update the drone symbol's location on the map
        map.getSource('drone').setData(json);

        // fly the map to the drone's current location
        map.flyTo({
          center: json.geometry.coordinates,
          speed: 0.5,
          zoom: 14
        });
      }
    };
    request.send();
  }, 2000);

  map.addSource('drone', { type: 'geojson', data: url });
    map.addLayer({
    'id': 'drone',
    'type': 'symbol',
    'source': 'drone',
    'layout': {
    'icon-image': 'rocket-15'
    }
  });
});
