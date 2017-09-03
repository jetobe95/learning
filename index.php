<!DOCTYPE html>
<html>
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <meta charset="utf-8">
        <title>Localización Syrus 2G </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>


     <h1>

     </h1>
     <blockquote>
       <h1><em>  <center>
         <p><em><img src="logos/2.png" width="349" height="130" alt=""/></em></p>
         <p><strong>Localización Syrus 2G </strong></p>
       </center>
       </em></h1>
     </blockquote>
     <table width="289" height="194" border="3"  	align="center">
  <tbody>


    <tr>
      <td width="99" height="30">Hora</td>
      <td width="147"><iframe id='dynamic-content2' src='refreshh.php' style="border:none;" height="40" width="120"></iframe>  </td>
    </tr>

    <tr>
      <td height="40" >Fecha</td>
      <td><iframe id='dynamic-content3' src='refresh3.php' style="border:none;" height="45" width="120" ></iframe></td>
    </tr>
    <tr>
      <td width="99" height="30">Latitud</td>
      <td width="147"><iframe id='dynamic-content3' src='refresh.php' style="border:none;" height="40" width="100" ></iframe></td>
    </tr>
    <tr>
      <td height="30">Longitud</td>
      <td><iframe id='dynamic-content1' src='refresh2.php' style="border:none;" height="40" width="100"   ></iframe></td>
    </tr>
    <tr>
      <td height="30">Velocidad[mph]</td>
      <td><iframe id='dynamic-content2' src='refreshv.php' style="border:none;" height="40" width="100"   ></iframe></td>
    </tr>

  </tbody>
</table>
     <center>
       <h1 id="Latitud">Google maps</h1>
       <table width="1101" height="682">
         <tbody>
           <tr>
             <td height="416"><iframe id='dynamic-content2' src='mapdb.html' style="border:none;" height="682" width="1101"   ></iframe></td>
           </tr>
         </tbody>
       </table>
       <h1><img src="logos/3.png" width="63" height="50" alt="" /></h1>
    </center>
    </p>


    <script type="text/javascript">
      setInterval(holo, 10000); // Refresca la función holo cada 10 segundos... :D

      var map; // creamos variables
      var marker;
      var coordenadas;
      var enn ="";
      var misaka=[];

      $(window).load(holo());
      function holo(){ // para mostrar los valores en la página
        var return_first = function () {
            var tmp = null;
            $.ajax({
                'async': false,
                'type': "POST",
                'global': false,
                'dataType': 'php',
                'url': "server.php",
                'success': function (data) {
                    tmp = data;
                }
            });
            return tmp;
        }();


        var coor = return_first.split("\n"); // Los datos que me importan (Lat, Long, Tiem) se encuentran en el salto 9, por eso guardo en una variable esa linea y a su vez divido ese string cada que encuentre un espacio
        var longElement = document.getElementById("Latitud"); // Voy a mostrar un texto en donde esté el id "Latitud"
        longElement.textContent = "Latitud: " + coor[0]; // Muestro Lat + la coordenada guardada en 0 que se dividio con el split
        var latElement = document.getElementById("Longitud");
        latElement.textContent = "Longitud: " + coor[1];
        var timElement = document.getElementById("Fecha");
        timElement.textContent = coor[2];
        //console.log("holo"); Haciendo prueba de que muestra
        //refrescar_marcador(coor[0], coor[1]); // latitude, longitude
        //alert(coor);
      }

    //  function initMap() { // Inicio el mapa con los recursos que me da api
        var mapDiv = document.getElementById('map');
        map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(11.0198287,-74.8499715), // Establezco el centro en las coordenadas de la u, que obtuve de internet, puedo poner la que me da la syrus, pero de igual forma cuando actualice el valor de coor me va a mover el mapa a donde sea que se encuentre
          zoom: 18, // hacemos zoom para acercar mapa
          mapTypeId: google.maps.MapTypeId.ROADMAP//'terrain' // Bla, tipo id? sugerido por google maps api
        });
      }

      //function refrescar_marcador(latitude, longitude) // creamos el marcador y lo vamos refrescando en la función "holo" cuando la llamamos con coor[0] y coor[1], ya que establecimos que los  parametros fueran latitude, longitude.
      //{
        misaka.push(new google.maps.LatLng(latitude, longitude));
        polilinea();
        var marker = new google.maps.Marker({  // función de api para crear marcador
          position: new google.maps.LatLng(latitude, longitude), // posición con coor[0] y coor[1]
          map: map,
          title: "Holo", // Titulo para el marcador, es opcional.. no es necesario.. bla bla bla
         });
        map.setCenter(new google.maps.LatLng(latitude, longitude)); // Movemos el centro hacia donde se encuentren los nuevos valores de coor[0] y coor[1]
      }


    </script>
</body>
</html>
