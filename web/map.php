<?php
    session_start();
    require 'postgres.php';

    if (!isset($_SESSION['username'])) {
      # code...
      header("Location: login.php");
      die();
    }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Geocoding service</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
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
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
      <form action="address-add.php" method="post">
        <input id="address" type="textbox" value="address">
        <input type="textbox" id="town" value="town">
        <input id="state" type="textbox" value="state">
        <input id="zip" type="textbox" value="zip code">
        <input id="submit" name="add" type="submit" value="add">
        <input id="logout" name="logout" type="submit" value="logout">
      </form>
    </div>
    <div id="map"></div>

    <script>
    var encoded;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 43.814694, lng: -111.784937}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
          encoded = geocodeAddress(geocoder, map);
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = <?php  ?>
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3poy_AN2gvfXKsyEHf9mlyDoWRat740g&callback=initMap">
    </script>
  </body>
</html>
