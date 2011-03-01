<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alleo - Gagnez à covoiturer</title>
        <link href="<?php echo $this->config->item('base_url');?>styles/main.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $this->config->item('base_url');?>styles/inscription.css" type="text/css" rel="stylesheet">

        <script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-1.5.js"></script>
        <script type="text/javascript">
            var activeTab = 1;
            $(document).ready(function() {
                $('#previous').click(function(el){
                    var prevTab = activeTab;
                    activeTab = activeTab - 1;
                    $('#etape'+prevTab).css('display', 'none');
                    $('#etape'+activeTab).fadeIn('slow');
                    if(activeTab == 1){
                        $('#previous').css('display', 'none');
                    }else{
                        $('#next').css('display', '');
                        $('#previous').css('display', '');
                        $('#submit').css('display', 'none');
                    }
                    $('.etapes li').each(function(el){
                        $(this).removeClass('active');
                        if($(this).attr('id') == "tab_"+activeTab){
                            $(this).addClass('active');
                        }
                    })
                });
                $('#next').click(function(el){
                    var prevTab = activeTab;
                    activeTab = activeTab + 1;
                    $('#etape'+prevTab).css('display', 'none');
                    $('#etape'+activeTab).fadeIn('slow');
                    if(activeTab == 3){
                        $('#next').css('display', 'none');
                        $('#submit').css('display', '');
                        $('#previous').css('display', '');
                    }else{
                        $('#next').css('display', '');
                        $('#previous').css('display', '');
                        $('#submit').css('display', 'none');
                    }
                    $('.etapes li').each(function(el){
                        $(this).removeClass('active');
                        if($(this).attr('id') == "tab_"+activeTab){
                            $(this).addClass('active');
                        }
                    })
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
                            <li><a href="#">Gagnants sur toute la ligne</a></li>
                            <li><a href="#">Programme de récompenses</a></li>
                            <li><a href="#">Alleo?</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="clear"></div>

                <div id="header-bottom">
                    <div class="text">
                        <h2>Devenez <?php if($type=="Passager"){echo strtolower($type);}else{ echo 'conducteur';} ?> Alleo</h2><h2 class="etapes"><ul><li class="active" id="tab_1">1</li><li id="tab_2">2</li><li id="tab_3">3</li></ul></h2>
                        <div class="clear"></div>
                        <p>Covoiturage sur une base régulière ou occasionnelle : le même processus simple et rapide vous connecte en quelques clics. Créez votre profil Alleo et nous vous proposerons automatiquement des covoiturants qui font le même trajet que vous.</p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div id="content">
                <div class="left">
                    <form action="./accueil/ajout_utilisateur?<?php echo $type ?>" method="post">
                    <fieldset class="tabs" id="etape1">					
                        <legend>Création de votre profil</legend>
						
						<?php 
							if(isset($_GET['erreur_1']))
							{
								echo '<div class="error">' . $_GET['erreur_1'] . '</div>';
							}
						?>

                        <label>Nom :</label><input name="nom" type="text" />
						<?php if(isset($_GET['erreur_nom'])) echo '<span class="erreur">Le nom est requis</span>'; ?>
						
                        <label>Prénom :</label><input name="prenom" type="text" />
						<?php if(isset($_GET['erreur_prenom'])) echo '<span class="erreur">Le prenom est requis</span>'; ?>
						
                        <label>Courriel :</label><input name="courriel" type="text" /><br/>
                        <span class="description">Un courriel que vous regardez souvent</span>
						<?php if(isset($_GET['erreur_courriel'])) echo '<span class="erreur">Le courriel est requis</span>'; ?>
						<?php if(isset($_GET['erreur_compte'])) echo '<span class="erreur">Un compte existe déjà à ce courriel</span>'; ?>

                        <label>Mot de passe :</label><input name="password" class="pwd" type="password" /><br/>
                        <span class="description">Doit contenir minimalement 8 caractères alphanumériques</span>
						<label>Confirmation :</label><input name="passwordconf" class="pwd" type="password" /><br/>
						<?php if(isset($_GET['erreur_mdp'])) echo '<span class="erreur">Le Le mot de passe requis</span>'; ?>

                    </fieldset>

                    <fieldset class="tabs" id="etape2" style="display:none;">
                        <legend>Vos préférences personnelles</legend>

                        <label>Fumeur :</label><p>Oui <input type="radio" name="fumeur" value="1" /> Non <input type="radio" name="fumeur" value="0" /></p>
                        <label>Covoitureur de<br/>même sexe :</label><p>Uniquement <input type="checkbox" name="meme_sexe" value="1" /></p>
                        <label>Précisions supplémentaires :</label><textarea name="precisions" ></textarea>
                    </fieldset>
                    <fieldset class="tabs" id="etape3" style="display:none;">
                        <legend>Informations sur votre véhicule</legend>

                        <label>Marque :</label><input name="marque" type="text" />
						<?php if(isset($_GET['erreur_marque'])) echo '<span class="erreur">La marque est requise</span>'; ?>
                        <label>Modèle :</label><input name="modele" type="text" />
						<?php if(isset($_GET['erreur_modele'])) echo '<span class="erreur">Le modele est requis</span>'; ?>
                        <label>Année :</label><input name="annee" type="text" />
						<?php if(isset($_GET['erreur_annee'])) echo "<span class='erreur'>L'année est requise</span>"; ?>
                        <label>Couleur :</label><input name="couleur" type="text" />
						<?php if(isset($_GET['erreur_couleur'])) echo '<span class="erreur">La couleur est requise</span>'; ?>
                        <label>Plaque d'immatriculation :</label><input name="immatriculation" type="text" />
                    </fieldset>
                    <div class="prev_next">
                        <input type="button" value="Précédent" id="previous" style="display:none;" /><input type="button" value="Annuler" id="cancel" /><input type="submit" value="Soumettre" id="submit" style="display:none;" /><input type="button" value="Suivant" id="next" />
                    </div>
                    </form>
                </div>

                <div class="right">
                    <div class="stat">
                        <div class="left">
                            35%
                        </div>
                        <div class="right">
                            De réduction<br/>
                            des frais de transport
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="stat">
                        <div class="left">
                            2 454
                        </div>
                        <div class="right">
                            "Alleos"<br/>
                            Effectué le mois dernier
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="comment-box">
                        <div class="top">

                        </div>
                        <div class="center">
                            <p>Lorem ipsum</p>
                        </div>
                        <div class="bottom">

                        </div>
                        <div class="member">
                            <p>Marie-Ève Leblanc, Conductrice Alleo</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="footer" style="clear:both">
            <div class="top-footer">
                <div class="content">
                    <div class="left">
                        <a href="#" class="facebook">Partagez sur Facebook</a> <a href="#" class="twitter">Partagez vos idées avec nous</a>
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