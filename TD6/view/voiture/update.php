<form method="get" action="index.php">

		<fieldset>
			<legend>Formulaire d'enregistrement voiture:</legend>
			<p>
				<input type ="hidden" name ="action" id="updated" value="updated"/>

				<label for="immat_id">Immatriculation</label> :
				<input type="text" placeholder="Ex : GF559HG" name="immat" id="immat_id" required/>
				<input type="text" name="immatriculation" id="immat_id" <?php echo 'value="' . htmlspecialchars($immat) . '" readonly="' . htmlspecialchars($immat) . '"' ?> > 
				
			</p>
			<p>
				<label for="marque_id">Marque</label> :
				<input type="text" placeholder="Ex : Seat" name="marque" id="marque_id" <?php echo 'readonly=' . htmlspecialchars($marque) . '"'?> required/>
			</p>
			<p>
				<label for="couleur_id">Couleur</label> :
				<input type="text" placeholder="Ex : Gris" name="couleur" id="couleur_id" <?php echo 'readonly=' . htmlspecialchars($couleur) . '"'?> required/>
			</p>

			<p>
				<input type="submit" value="Envoyer" />
			</p>
		</fieldset>
	</form>