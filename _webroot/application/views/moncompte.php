<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alleo - Gagnez à covoiturer</title>
        <link href="<?php echo $this->config->item('base_url');?>styles/main.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $this->config->item('base_url');?>styles/interne.css" type="text/css" rel="stylesheet">

        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-1.5.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-ui.js"></script>
        
        <script type="text/javascript">
//Useful links:
// http://code.google.com/apis/maps/documentation/javascript/reference.html#Marker
// http://code.google.com/apis/maps/documentation/javascript/services.html#Geocoding
// http://jqueryui.com/demos/autocomplete/#remote-with-cache

var geocoder;
var map;
var marker;

function initialize(){
//MAP
  var latlng = new google.maps.LatLng(41.659,-4.714);
  var options = {
    zoom: 16,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.SATELLITE
  };

  map = new google.maps.Map(document.getElementById("map"), options);

  //GEOCODER
  geocoder = new google.maps.Geocoder();

  marker = new google.maps.Marker({
    map: map,
    draggable: true
  });

}

$(document).ready(function() {

  initialize();

  $(function() {
    $("#input_add_trajet").autocomplete({
      //This bit uses the geocoder to fetch address values
      source: function(request, response) {
        geocoder.geocode( {'address': request.term }, function(results, status) {
          response($.map(results, function(item) {
            return {
              label:  item.formatted_address,
              value: item.formatted_address,
              latitude: item.geometry.location.lat(),
              longitude: item.geometry.location.lng()
            }
          }));
        })
      },
      //This bit is executed upon selection of an address
      select: function(event, ui) {
        $("#latitude").val(ui.item.latitude);
        $("#longitude").val(ui.item.longitude);
        var location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
        marker.setPosition(location);
        map.setCenter(location);
      }
    });
  });

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
                         <a href="<?php echo $this->config->item('base_url');?>index.php/" ></a>
                    </div>

                    <div class="top-links">
                        <ul>
                            <li><a href="#">Devenez Partenaire</a></li>
                            <li><a href="<?php echo $this->config->item('base_url');?>index.php/gagnants/index">Gagnants sur toute la ligne</a></li>
                            <li><a href="<?php echo $this->config->item('base_url');?>index.php/recompenses/index">Programme de récompenses</a></li>
                            <li><a href="#">Québec ville verte</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div id="content">
                <div class="left">
                    <div class="head_left">
                        <h2><?php echo $user->nom . ', ' . $user->prenom ?></h2>
                        <p><a href="#">Modifier mes préférences &rsaquo;</a></p>
                    </div>
                    <div class="head_right">
                        <h2><?php echo $user->points?></h2>
                        <p>points accumulés</p>
                    </div>
                    <div class="clear"></div>

                    <div id="notifications">
                        <h2>Notifications <span class="float-right">10 de 32</span></h2>
                        <div class="clear"></div>

                        <div class="line">
                            <div class="line-left"><img src="<?php echo $this->config->item('base_url');?>styles/images/icon_notices.jpg" heigth="15" width="17" /></div>
                            <div class="line-right">Aléo a trouvé un passager. Trajet: Maison -> Boulot</div>
                            <div class="deploy">V</div>
                            <div class="clear"></div>
                            <div class="description">
                                <div class="left_infos">

                                </div>
                                <div class="right_infos">
                                    
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="line">
                            <div class="line-left"><img alt="Notification" src="<?php echo $this->config->item('base_url');?>styles/images/icon_notices.jpg" heigth="15" width="17" /></div>
                            <div class="line-right">Aléo a trouvé un passager. Trajet: Maison -> Boulot</div>
                            <div class="deploy">V</div>
                            <div class="clear"></div>
                        </div>
                        <div class="line">
                            <div class="line-left"><img alt="Notification" src="<?php echo $this->config->item('base_url');?>styles/images/icon_notices.jpg" heigth="15" width="17" /></div>
                            <div class="line-right">Votre trajet: Maison -> Mont Sainte-Anne est complet</div>
                            <div class="deploy">X</div>
                            <div class="clear"></div>
                        </div>
                        <div class="line">
                            <div class="line-left"><img alt="Notification" src="<?php echo $this->config->item('base_url');?>styles/images/icon_notices.jpg" heigth="15" width="17" /></div>
                            <div class="line-right">ThieryB Accepte de vous transporter au Boudoir. </div>
                            <div class="deploy">X</div>
                            <div class="clear"></div>
                        </div>
                        <div class="line">
                            <div class="line-left"><img alt="Notification" src="<?php echo $this->config->item('base_url');?>styles/images/icon_notices.jpg" heigth="15" width="17" /></div>
                            <div class="line-right">Aléo a trouvé un passager. Trajet: Maison -> Boulot</div>
                            <div class="deploy">V</div>
                            <div class="clear"></div>
                        </div>
                        <div class="line">
                            <div class="line-left"><img alt="Notification" src="<?php echo $this->config->item('base_url');?>styles/images/icon_notices.jpg" heigth="15" width="17" /></div>
                            <div class="line-right">Aléo a trouvé un passager. Trajet: Maison -> Boulot</div>
                            <div class="deploy">V</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="head_left">
                        <h2>Mes trajets</h2>
                    </div>
                    <div class="clear"></div>

                    <div id="add_point">
                        <h2>Ajouter un trajet <span class="float-right"></span></h2>
                        <div id="map"></div>
                        <input id="latitude" type="hidden"/>
                        <input id="longitude" type="hidden"/>
                        <div class="line">
                            <input type="text" class="ui-autocomplete-input" id="input_add_trajet"/><input type="submit" value="+" id="input_submit_trajet"/>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
		        <div id="footer" style="clear:both">
            <div class="top-footer">
                <div class="content">
                    <div class="left">
                        <a href="#" class="facebook">Partager sur Facebook</a> <a href="#" class="twitter">Partagez vos idées avec nous</a>
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