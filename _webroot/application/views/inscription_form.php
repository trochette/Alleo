<div id="content">
		<div class="left">
		
			<?php echo form_open('inscription'); ?>
			<fieldset class="tabs" id="etape1">					
				<legend>Création de votre profil</legend>

				<?php echo form_error('nom'); ?>
				<label>Nom :</label><input name="nom" type="text" value="<?php echo set_value('nom'); ?>" />
				<br/>
				
				<?php echo form_error('prenom'); ?>
				<label>Prénom :</label><input name="prenom" type="text" value="<?php echo set_value('prenom'); ?>" />
				<br/>
				
				<?php echo form_error('courriel'); ?>
				<label>Courriel :</label><input name="courriel" type="text" value="<?php echo set_value('courriel'); ?>" />
				<span class="description">Un courriel que vous regardez souvent</span>
				<br/>
				
				<?php echo form_error('mot_de_passe'); ?>
				<label>Mot de passe :</label><input name="mot_de_passe" type="password" value="<?php echo set_value('mot_de_passe'); ?>" />
				<br/>
				
				<?php echo form_error('confirmation'); ?>
				<label>Confirmation :</label><input name="confirmation" type="password" value="<?php echo set_value('confirmation'); ?>" />
				<br/>

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
				<label>Modèle :</label><input name="modele" type="text" />
				
				<label>Année :</label><input name="annee" type="text" />
				
				<label>Couleur :</label><input name="couleur" type="text" />
				
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
					<p>«J'utilise les services d'Alleo depuis un an et j'ai toujours comblé toutes mes places rapidement. J'ai même eu droit à deux cadeaux! Génial.»</p>
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

