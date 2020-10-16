
<body>

	<form method="get" action="index.php">

		<fieldset>
			<legend>Formulaire d'enregistrement voiture:</legend>
			<p>
				<input type ="hidden" name ="action" id="created" value="created"/>
				<label for="immat_id">Immatriculation</label> :
				<input type="text" placeholder="Ex : GF559HG" name="immat" id="immat_id" required/>
			</p>
			<p>
				<label for="marque_id">Marque</label> :
				<input type="text" placeholder="Ex : Seat" name="marque" id="marque_id" required/>
			</p>
			<p>
				<label for="couleur_id">Couleur</label> :
				<input type="text" placeholder="Ex : Gris" name="couleur" id="couleur_id" required/>
			</p>

			<p>
				<input type="submit" value="Envoyer" />
			</p>
		</fieldset>
	</form>

</body>
