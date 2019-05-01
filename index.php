	<!doctype html>
	<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Titre de la page</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<form action="cible.php" method="post">
		<p>
			Veuillez entrer votre prénom :
		</p>
		<p>
			<input type="text" name="prenom" />
		</p>
		<p>
			Veuillez entrer votre nom :
		</p>
		<p>
			<input type="text" name="nom" />
		</p>

		<p>
			Veuillez entrer votre mail :
		</p>
		<p>
			<input type="text" name="mail" />
		</p>
		<p>
			<p>
				Veuillez entrer votre département :
			</p>
			<select name="departement">

				<?php 

				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
					die('Erreur : '.$e->getMessage());
				}

				$reponse = $bdd->query('SELECT * FROM departement;');

				while ($donnees = $reponse->fetch())
				{
					echo ("<option value='".$donnees['nom']."'>".$donnees['nom']."</option>");
				}

				$reponse->closeCursor();

				?>
			</select> 

			<br>
			<textarea name="message" rows="8" cols="45">Veuillez entrer votre message ici.
			</textarea>


			<br>
			<input type="submit" value="Valider" />
		</form>a
		</html>
