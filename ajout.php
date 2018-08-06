<?php 
	include 'connect.php';

	if (isset($_POST['titre']) && isset($_POST['image']) && isset($_POST['pays']) && isset($_POST['ville']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['sexe']) && isset($_POST['genre'])) {
		date_default_timezone_set('UTC');
		$jour = date('d');
		$mois = date('m');
		$anner = date('Y');

		$sql = 'INSERT INTO jour (ID, jour) VALUES (' . $jour . ', ' . $jour . ')';
		$bdh -> query($sql);

		$sql = 'INSERT INTO mois (ID, mois) VALUES (' . $mois . ', ' . $mois . ')';
		$bdh -> query($sql);

		$sql = 'INSERT INTO anner (ID, anner) VALUES (' . $anner . ', ' . $anner . ')';
		$bdh -> query($sql);

		$ville = $_POST['ville'];
		$pays = $_POST['pays'];
		$sql = 'INSERT INTO lieu (ID, ville, pays) VALUES (NULL, "' . $ville . '", "' . $pays . '")';
		$bdh -> query($sql);

		$sql = 'INSERT INTO auteur (ID, nom, prenom, age, sexe) VALUES (NULL , "' . $_POST['nom'] . '", "' . $_POST['prenom'] . '", "' . $_POST['age'] . '", "' . $_POST['sexe'] . '")';
		$bdh -> query($sql);
		$sql = 'SELECT id FROM auteur WHERE nom = "' . $_POST['nom'] . '" AND prenom = "' . $_POST['prenom'] . '"'

		$sql = 'INSERT INTO photo (ID, titre, image, ID_auteur, ID_lieu, ID_jour, ID_mois, ID_anner) VALUES (NULL, "' . $_POST['titre'] . '", "' . $_POST['titre'] . '.jpg' . '", "' . $_POST['titre'] . '", '', '', '', '')';
	} else {
		echo 'non';
	}
?>

<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Photographie Website</title>
	<meta name="description" content="A photography-inspired website layout with an expanding stack slider and a background image tilt effect" />
	<meta name="keywords" content="photography, template, layout, effect, expand, image stack, animation, flickity, tilt" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/test.css" />
</head>
<body>
        <form action="ajout.php" method="post">
            <input type="text" name="titre" placeholder="Titre" required>
            <input type="file" name="image" required>
            <input type="text" name="pays" placeholder="Pays" required>
            <input type="text" name="ville" placeholder="Ville" required>
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="prenom" placeholder="Prénom" required>
            <input type="text" name="age" placeholder="Age" required>
			<select name="sexe" required>
				<option value="0">Homme</option>
				<option value="1">Femme</option>
			</select>
            <input type="text" name="genre" placeholder="Genre" required>

            <input type="submit" value="Envoyer">
        </form>
</body>
</html>