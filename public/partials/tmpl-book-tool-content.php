<!DOCTYPE html>
<html>
    <head>
        <title>Peta Jakarta</title>
        <link rel="stylesheet" 
              href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" 
              integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" 
              crossorigin=""
        />
        <link rel="stylesheet" href="https://opengeo.tech/maps/leaflet-search/src/leaflet-search.css" />
        <link rel="stylesheet" href="https://opengeo.tech/maps/leaflet-search/examples/style.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
                crossorigin="">
        </script>
        <script src="https://opengeo.tech/maps/leaflet-search/dist/leaflet-search.src.js"></script>
        <style>
            html, body {
                height: 100%;
                margin: 0;
            }
            .leaflet-container {
                height: 400px;
                width: 600px;
                max-width: 100%;
                max-height: 100%;
            }
            #map {margin: 0 auto;float: none;}
            body h1 {text-align: center;}
            .leaflet-control-search .search-button {width: 200px;background: url('https://opengeo.tech/maps/leaflet-search/images/search-icon.png') no-repeat 170px 4px #fff;}
            .leaflet-control-search .search-button:hover {background: url('https://opengeo.tech/maps/leaflet-search/images/search-icon.png') no-repeat 170px -20px #fafafa;}
            .leaflet-bottom.leaflet-right {display: none;}
            .leaflet-control-search .search-input {position: absolute;width: 138px;}
            .leaflet-right {left: 44px;}
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: block;
                font-size: 16px;
                cursor: pointer;
                width: 110px;
                margin: 10px auto 10px auto;
            }
        </style>
    </head>
    <body>

        <h1>Peta Jakarta</h1>
        <div id="map" style="width: 600px; height: 400px;"></div>
        <a href="https://peta-tes.andhiirawan.my.id/" class="button">Back to Home</a>
    </body>
    <script>
        var map = L.map('map').setView([-6.218564190435105, 106.80264472961426], 13);

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // var marker = L.marker([-6.218564190435105, 106.80264472961426]).addTo(map)
        // .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

        var marker = L.marker([-6.218564190435105, 106.80264472961426]).addTo(map);

        var polygon = L.polygon([
            [-6.215348470027062, 106.81826591491699],
            [-6.219444110503459, 106.81251525878906],
            [-6.23117623728013, 106.82071208953857],
            [-6.230536309851153, 106.82157039642334]
        ]).addTo(map).bindPopup('Polygon.');

        var popup = L.popup()
            .setLatLng([-6.218564190435105, 106.80264472961426])
            .setContent('Peta Jakarta')
            .openOn(map);

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent('You clicked the map at ' + e.latlng.toString())
                .openOn(map);
        }

        map.on('click', onMapClick);

        var markersLayer = new L.LayerGroup();

        map.addLayer(markersLayer);

        var controlSearch = new L.Control.Search({
		position:'topright',		
		layer: markersLayer,
		initial: false,
		zoom: 12,
		marker: false
	});

	map.addControl( controlSearch );

    </script>
</html>
