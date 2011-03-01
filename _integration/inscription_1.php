<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alleo - Gagnez à covoiturer</title>
        <link href="styles/main.css" type="text/css" rel="stylesheet">
        <link href="styles/inscription.css" type="text/css" rel="stylesheet">

        <script type="text/javascript" src="js/jquery-1.5.js"></script>
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

                <div class="clear"></div>

                <div id="header-bottom">
                    <div class="text">
                        <h2>Devenir conducteur</h2>
                        <p>Alleo réinvente le covoiturage dans la grande région de Québec avec <br/>une application simple à utiliser qui offre aux usagers un programme<br/>
                         de récompenses drôlement attrayant.</p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div id="content">
                <div class="left">
                    <form action="#" method="post">
                    <fieldset class="tabs" id="etape1">
                        <legend>Création de votre profil</legend>

                        <label>Nom :</label><input type="text" />
                        <label>Prénom :</label><input type="text" />
                        <label>Courriel :</label><input type="text" /><br/>
                        <span class="description">Un courriel que vous regardez souvent</span>

                        <label>Mot de passe :</label><input class="pwd" type="text" /><br/>
                        <span class="description">Doit contenir minimalement 8 caractères alphanumériques</span>

                    </fieldset>

                    <fieldset class="tabs" id="etape2" style="display:none;">
                        <legend>Vos préférences personnelles</legend>

                        <label>Fumeur :</label><p>Oui <input type="radio" name="fumeur" value="1" /> Non <input type="radio" name="fumeur" value="0" /></p>
                        <label>Covoitureur de<br/>même sexe :</label><p>Uniquement <input type="checkbox" name="meme_sexe" value="1" /></p>
                        <label>Précisions supplémentaires :</label><textarea name="precisions" ></textarea>
                    </fieldset>
                    <fieldset class="tabs" id="etape3" style="display:none;">
                        <legend>Informations sur votre véhicule</legend>

                        <label>Marque :</label><input type="text" />
                        <label>Modèle :</label><input type="text" />
                        <label>Année :</label><input type="text" />
                        <label>Couleur :</label><input type="text" />
                        <label>Plaque d'immatriculation :</label><input type="text" />
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

        <div id="footer">
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
