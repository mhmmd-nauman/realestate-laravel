$(document).ready(function() {
    'use strict';

    function initialize() {
        var lat = document.getElementById("latitude").value;
        var lon = document.getElementById("longitude").value;
        var mapProp = {
            center:new google.maps.LatLng(lat ,lon),
            zoom:7,
            mapTypeId:google.maps.MapTypeId.ROADMAP
          };
          var map =new google.maps.Map(document.getElementById("map"), mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
        
        
        
        
})
