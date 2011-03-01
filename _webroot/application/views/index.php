<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alleo - Gagnez à covoiturer</title>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-1.5.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/main.js"></script>
        <link href="<?php echo $this->config->item('base_url');?>styles/main.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $this->config->item('base_url');?>styles/jquery-ui.css" type="text/css" rel="stylesheet">
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

                <div class="clear"></div>

                <div id="header-bottom">
                    <div class="text">
                        <h2>Gagnez à covoiturer</h2>
                        <p>Alleo réinvente le covoiturage dans la grande région de<br/>
                        Québec avec une application simple à utiliser qui offre aux<br/>
                        usagers un programme de récompenses drôlement attrayant.</p>
                        <p class="green">Avoir à la fois plus d'argent dans vos poches et la <br/>
                        satisfaction de faire une bonne action, c'est ce qu'on <br/>
                        appelle le meilleur des deux mondes, non?</p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
            <div id="content">
				<?php 
					if(isset($_GET['erreur_login']))
					{
						echo '<div class="error">' . $_GET['erreur_login'] . '</div>';
					}
				?>
                <div id="subscribe-login">
                    <div class="subscribe">
                        <ul>
                            <li class="first">Devenez membre</li>
                            <li><a href="inscription">Je suis conducteur</a></li>
                            <li><a href="inscription">Je suis passager</a></li>
                        </ul>
                    </div>
                    <div class="login">
						<?php echo validation_errors(); ?>
						<?php echo form_open('login'); ?>				
                            <input type="text" name="username" value="Nom d'usager" onclick="$(this).val('');" />
                            <input type="password" name="password" value="Mot de passe" onclick="$(this).val('');" />
                            <input id="connect" type="submit" value="Connexion" />
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>

                <div id="content-boxes">
                    <div class="left">
                        <div class="box">
                            <h3>Échangez vos points contre des produits tendances</h3>
                            <ul>
                                <li><a target="_blank" href="http://www.fringalegourmet.com/"><img alt="Fringale" src="<?php echo $this->config->item('base_url');?>styles/images/fringale.png" /></a></li>
                                <li><a target="_blank" href="http://www.cineplex.com/"><img alt="Cineplex" src="<?php echo $this->config->item('base_url');?>styles/images/cineplex.png" /></a></li>
                                <li><a target="_blank" href="http://www.mont-sainte-anne.com/"><img alt="Mont-Sainte-Anne" src="<?php echo $this->config->item('base_url');?>styles/images/msa.png" /></a></li>
                            </ul>
                            <a href="">En savoir plus sur le programme de récompenses &raquo;</a>
                        </div>
                        <div class="box-small" id="calc">
                            <h3>1 506$ dans vos poches</h3>
                            <p>En covoiturant aller-retour sur <b>10km</b> avec <b>4 personnes</b>, <b>5 jours</b> par semaine pendant un&nbsp;<b>an</b>.</p>
                            <p>Le prix d'un voyage ou d'un cinéma maison. Pas mal, non?</p>
                            
                        </div>
                        <div class="box-small" id="how_it_works">
                            <h3>Boulot, loisirs, événements </h3>
                            <p>Alleo vous permet de trouver des covoiturants <b>occasionnels ou réguliers</b>. C'est simple et rapide. <br /><br />Essayez:<br /><a href="./inscription?conducteur">Conducteur</a><br /><a href="./inscription?passager">Passager</a></p>
                        </div>
                         <div class="clear"></div>
                    </div>
                    <div class="right">
                        <div class="box">
                            <h3>Activités récentes</h3>
                            <div class="line">
                                <div class="line-left">
                                    <span class="green">jdesgane</span> a trouvé une course pour le centre Marie-Rolet
                                </div>
                                <div class="line-right">
                                    17h45
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="line">
                                <div class="line-left">
                                    <span class="green">MarcTr</span> a inscrit un trajet de Stoneham à Lévis
                                </div>
                                <div class="line-right">
                                    16h45
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="line">
                                <div class="line-left">
                                    Un siège s'est libéré. Trajet Lebourgneuf - Cineplex Beauport
                                </div>
                                <div class="line-right">
                                    15h45
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="line">
                                <div class="line-left">
                                    <span class="green">jdesgane</span> a trouvé une course pour le centre Marie-Rolet
                                </div>
                                <div class="line-right">
                                    14h45
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="line">
                                <div class="line-left">
                                    <span class="green">jdesgane</span> a trouvé une course pour le centre Marie-Rolet
                                </div>
                                <div class="line-right">
                                    13h45
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <div class="comment-box">
                            <div class="top">

                            </div>
                            <div class="center">
                                <p>J'utilise les services d'Alleo depuis un an et j'ai toujours comblé toutes mes places rapidement. J'ai même eu droit à deux cadeaux! Génial.</p>
                            </div>
                            <div class="bottom">

                            </div>
                            <div class="member">
                                <p>Marie-Ève Leblanc, Conductrice Alleo</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>                
            </div>
            <div id="dialog" style="display:none;">

            </div>
            
        </div>
		        <div id="footer" style="clear:both">
            <div class="top-footer">
                <div class="content">
                    <div class="left">
                        <a href="#" class="facebook" onclick="gotofacebook()">Partagez sur Facebook</a> <a href="#" class="twitter" onclick="gototwitter()">Partagez vos idées avec nous</a>
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