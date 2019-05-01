<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : '.$e->getMessage());
}


$bdd->exec('INSERT INTO utilisateur(prenom,nom,message,mail,departement) VALUES ("'.$_POST['prenom'].'","'.$_POST['nom'].'","'.$_POST['message'].'","'.$_POST['mail'].'","'.$_POST['departement'].'");'); //insertion en base de donnée

// $message = "Prénom : ".$_POST['prenom']." Nom : ".$_POST['nom']." Mail : ".$_POST['mail']." Département : ".$_POST['departement']." Message : ".$_POST['message'];
// echo $message;
// $to      = $_POST['departement'].'@gmail.com';
// $subject = 'Fiche contact';
// $headers = 'From: test' . "\r\n".'Reply-To: test' . "\r\n".'X-Mailer: PHP/'.phpversion();

// mail($to, $subject, $message, $headers); //envoi du mail 

header('Location: index.php');  //redirection vers la page de formulaire.

?>