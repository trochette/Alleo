<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alleo - Gagnez à covoiturer</title>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-1.5.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery.ui.datepicker-fr.js"></script>

        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/main.js"></script>
        <link href="<?php echo $this->config->item('base_url');?>styles/main.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $this->config->item('base_url');?>styles/interne.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $this->config->item('base_url');?>styles/ajout_trajet.css" type="text/css" rel="stylesheet">

        <link href="<?php echo $this->config->item('base_url');?>styles/jquery-ui.css" type="text/css" rel="stylesheet">

        <script src="http://maps.google.com/maps/api/js?v=3.4&sensor=true&geometry=true" type="text/javascript"></script>

        <script type="text/javascript">
//Useful links:
// http://code.google.com/apis/maps/documentation/javascript/reference.html#Marker
// http://code.google.com/apis/maps/documentation/javascript/services.html#Geocoding
// http://jqueryui.com/demos/autocomplete/#remote-with-cache

var geocoder;
var map;
var marker;

function initialize(){
 var myOptions = {
 zoom: 10,
 mapTypeId: google.maps.MapTypeId.ROADMAP
 };
 map = new google.maps.Map(document.getElementById("map"), myOptions);

 geocoder = new google.maps.Geocoder(); 
 marker = new google.maps.Marker({
    map: map,
    draggable: true
 });
 marker2 = new google.maps.Marker({
    map: map,
    draggable: true
 });
 // Try W3C Geolocation method (Preferred)
 if(navigator.geolocation) {
 browserSupportFlag = true;
 navigator.geolocation.getCurrentPosition(function(position) {
 initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
 contentString = "Vous êtes ici";
 map.setCenter(initialLocation);
 infowindow.setContent(contentString);
 infowindow.setPosition(initialLocation);
 infowindow.open(map);
 }, function() {
 handleNoGeolocation(browserSupportFlag);
 });
 } else if (google.gears) {
 // Try Google Gears Geolocation
 browserSupportFlag = true;
 var geo = google.gears.factory.create('beta.geolocation');
 geo.getCurrentPosition(function(position) {
 initialLocation = new google.maps.LatLng(position.latitude,position.longitude);
 contentString = "Vous êtes ici";
 map.setCenter(initialLocation);
 infowindow.setContent(contentString);
 infowindow.setPosition(initialLocation);
 infowindow.open(map);
 }, function() {
 handleNoGeolocation(browserSupportFlag);
 });
 } else {
 // Browser doesn't support Geolocation
 browserSupportFlag = false;
 handleNoGeolocation(browserSupportFlag);
 }

}

function handleNoGeolocation(errorFlag) {
 if (errorFlag == true) {
 initialLocation = newyork;
 contentString = "Error: The Geolocation service failed.";
 } else {
 initialLocation = siberia;
 contentString = "Error: Your browser doesn't support geolocation. Are you in Siberia?";
 }
 map.setCenter(initialLocation);
 infowindow.setContent(contentString);
 infowindow.setPosition(initialLocation);
 infowindow.open(map);
}

$(document).ready(function() {

  initialize();

  //Add listener to marker for reverse geocoding
  google.maps.event.addListener(marker, 'drag', function() {
    geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
          $('#address').val(results[0].formatted_address);
          $('#latitude').val(marker.getPosition().lat());
          $('#longitude').val(marker.getPosition().lng());
        }
      }
    });
  });

});
        </script>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="header-top">
                    <div class="logo">

                    </div>

                    <div class="top-links">
                        <ul>
                            <li><a href="#">Devenez Partenaire</a></li>
                            <li><a href="#">Pourquoi Covoiturer</a></li>
                            <li><a href="#">Programme de récompenses</a></li>
                            <li><a href="#">Alleo?</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div id="content">
                <div class="head_left">
                    <h2>Trajet</h2>
                    <p><a href="#">&lsaquo; Retour au compte</a></p>
                </div>
                <div class="clear"></div>
                <div class="left">
                    <div id="notifications">
                        <h2>Visualisation</h2>
                        <div class="clear"></div>

                        <div class="line">
                            <div id="map"></div>
                            <input id="latitude" type="hidden"/>
                            <input id="longitude" type="hidden"/>
                        </div>
                    <div class="clear"></div>
                    </div>
                </div>

                <div class="right">
                    <div id="notifications">
                        <h2>Modifier mon trajet</h2>
                        <div class="clear"></div>
                        <form action="./ajoutertrajet/ajouter" method="post">
                        <div class="line">
                            <label>Départ</label><br />
                            <input value="Entrez un lieu" onclick="$(this).val('');" name="nom_depart" type="text" /><br />
                            <input id="input_add_trajet_1" name="adresse_depart" value="Entrez une adresse" onclick="$(this).val('');" type="text" /><br />
                            <label>Arrivée</label><br />
                            <input value="Entrez un lieu" onclick="$(this).val('');" name="nom_arrivee" type="text" /><br />
                            <input id="input_add_trajet_2" name="adresse_arrivee" value="Entrez une adresse" onclick="$(this).val('');" type="text" /><br />
                        </div>
                        <div class="line">
                            <label>Heure de départ</label><br />
                            <select name="heure">
                                <?php for ($i=0; $i<=24;$i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                } ?>
                            </select>
                            &nbsp;h&nbsp;
                            <select name="minute">
                                <?php for ($i=0; $i<=59;$i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                } ?>
                            </select>
                            <br /><br />
                            <label>Fréquence</label><br />
                            <span>Ponctuel</span><input type="radio" checked="checked" name="frequence" value="0" />
                            <span>Récurrent</span><input type="radio" name="frequence" value="1" />
                        </div>
                        <div class="line">
                            <input type="checkbox" name="is_driver" value="1" /><span>Je désire être conducteur</span><br />
                            <span>Nombre de passagers</span>
                            <select name="nb_passagers">
                                <?php for ($i=0; $i<=8;$i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                } ?>
                            </select>
                        </div>
                        <div class="line" style="border-bottom: none;">
                            <input type="checkbox" name="aller_retour" value="1" /><span>Aller-retour</span><br />
                            <input id="submit_btn" type="submit" value="Soumettre" />
                            <div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                    </div>
                </div>
            </div>

        </div>
		        <div id="footer" style="clear:both">
            <div class="top-footer">
                <div class="content">
                    <div class="left">
                        <a href="#" class="facebook" onclick="gotofacebook()">Partager sur Facebook</a> <a href="#" class="twitter" onclick="gototwitter()">Partagez vos idées avec nous</a>
                    </div>
                    <div class="right">
                        <a href="#">Haut</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="bottom-footer">
                <div class="content">
                    <div class="left">
                        <a href="#">Politique de confidentialité</a>
                        <a href="#">Conditions d'utilisation</a>
                    </div>
                    <div class="right">
                        Site web conçu lors de la compétition Iron Web 2011
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>

    </body>
</html>