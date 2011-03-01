<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alleo - Gagnez à covoiturer</title>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-1.5.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/main.js"></script>
        
        <link href="<?php echo $this->config->item('base_url');?>styles/main.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $this->config->item('base_url');?>styles/inscription.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $this->config->item('base_url');?>styles/interne.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $this->config->item('base_url');?>styles/pages_statiques.css" type="text/css" rel="stylesheet">
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

            <div id="content" class="recompenses">
                <div class="head_left">
                    <h2>Accumulez des points Alleo</h2>
                </div>
                <div class="clear"></div>
                <div class="left">
                    <p>Chaque fois que vous interagissez sur Alleo, vous accumulez des points (d’une valeur de 0,25$) que vous pourrez troquer contre des produits dernier cri ou des cartes-cadeaux offerts par vos commerçants préférés. </p>

                    <h3>Partagez vos frais de transport</h3>
                    <ul class="green">
                        <li>Devenir membre : 5 points</li>
                        <li>Publier une annonce : 1 point</li>
                        <li>Covoiturer à titre de passager ou de conducteur Alleo : 2 personnes dans la voiture = 2 points, 3 personnes = 3 points, etc.</li>
                        <li>Covoiturer : Bonis d’un point par personne pour les trajets de plus de 20 km</li>
                        <li>Covoiturer : Bonis d’un point par personne pour les trajets de plus de 20 km</li>
                        <li>Inscrire un commentaire / témoignage : 1 point</li>
                        <li>Évaluer un passager ou un conducteur : 1 point</li>
                    </ul>

                    <h3>Échangez vos points contre des produits</h3>
                    <p>Exemple : <br/>
                        50 points = 1 billet de cinéma gratuit<br/>
                        100 points = Certificat de 25$ dans une station-service ou un restaurant<br/>
                        200 points = Billet de spectacle</p>
                </div>

                <div class="right">
                    <h3>Lèche-vitrine</h3>
                    <div class="stat">
                        <div class="left">
                            50 <img src="<?php echo $this->config->item('base_url');?>styles/images/logoO.png" alt="Alleo" />
                        </div>
                        <div class="right">
                            <p>Selon certaines compagnies d'assurance, les risques d'accident seraient moindres pour les conducteurs accompagnés. En effet, la présence de passagers responsabiliserait le conducteur.</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="stat">
                        <div class="left">
                            100 <img src="<?php echo $this->config->item('base_url');?>styles/images/logoO.png" alt="Alleo" />
                        </div>
                        <div class="right">
                            <p>Les voies réservées aux autobus acceptent les véhicules occupées par 3 personnes et plus. ll doit y avoir 25 autobus à l'heure pour que les voies réservées soient à «pleine capacité», mais à Québec, il y en a moins de 15 à l'heure. Il reste donc de la place pour vous!</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="stat">
                        <div class="left">
                            200 <img src="<?php echo $this->config->item('base_url');?>styles/images/logoO.png" alt="Alleo" />
                        </div>
                        <div class="right">
                            <p>Par année, une voiture peut produire entre trois et cinq tonnes de CO2, dont la moitié uniquement pour se rendre et revenir du travail. Imaginez si 4 travailleurs laissent leur auto à la maison pour covoiturer. C’est entre 4 et 8 tonnes de CO2 qui sont ainsi « économisées ».</p>
                        </div>
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