<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
  
   <div id="info"></div>

	
	
    
    
    <script>		
		var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "syrus"
});

con.connect(function(err) {
  if (err) throw err;
  var info=	con.query("SELECT * FROM datos ORDER BY id_syrus DESC LIMIT 1", function (err, result) {
	  
	  document.write(5+1);
	  
	  
    if (err) throw err;
    console.log(result);
  });
});
		</script>
    <script>

		
		
		
		
		
		
		
		
		
		
		
	
		
		
		function changeMarkerPosition(marker) {
    var latlng = new google.maps.LatLng(-24.397, 140.644);
    marker.setPosition(myLatLng);
}

      function initMap() {
		  
        var myLatLng = {lat:  -70.33, lng: 131.044};
        var myLatLng = {lat: -70.33, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDNTmaLlqCkbFdxOTuKD2D4GODQie1UcAc &callback=initMap">
    </script>
  </body>
</html>