<html>
<head> 
	<meta charset="UTF-8">
	<title>Mercados de Tacna</title>
	<link rel="stylesheet" href="css/leaflet.css" />
	
	<style> 
 
 	 body {
            padding: 0;
            margin: 0;
        }
        html, body, #map {
            height: 100%;
            width: 100%;
        }
		
	.leaflet-popup-content-wrapper {
    width: 420px;
	height: 400px;
	}
	
	iframe {
	width: 400px;
	height: 350px;
	}
 	</style> 
</head>  
	<body>
	<script src="js/leaflet.js"></script>
	<script src="js/leaflet.wms.js"></script>
 
	<div id ="map"> </div> 
	<script>
 
	//*****************PROPIEDADES DE MAPA GENERAL**********************//
	var map = L.map(
		'map',
		{
			zoomControl:true,
			attributionControl: false
		}).setView([-18.014424, -70.2517890], 18);
		
	//*****************MAPA BASE*******************************//
	// OPEN STREET MAP

	var osm = new L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	attribution: '&copy; <ahref="http://osm.org/copyright"> OpenStreetMap</a> contributor'
}).addTo(map);
L.control.scale().addTo(map);
L.marker([-18.014424, -70.2517890], {draggable: true}).addTo(map);

		
	//*****************LISTA DE SERVICIOS*******************************//
		
	var wmsGeneral = L.tileLayer.wms("http://localhost:8080/geoserver/proyecto_webgis/wms?", {
	   layers: "proyecto_webgis:departamento,proyecto_webgis:provincias,proyecto_webgis:distritos,proyecto_webgis:mercados",
	   //gisweb:Tacna
	   format: 'image/png',
	   transparent: true,
	   version: '1.1.1',
	   attribution: "SENCICO"
	}).addTo(map);
	
	</script>
	</body> 
</html>