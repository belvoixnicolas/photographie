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
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/flickity.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
    <div class="container">
        <div class="hero">
			<div class="hero__back hero__back--static"></div>
			<div class="hero__back hero__back--mover"></div>
			<div class="hero__front"></div>
		</div>
		<header class="codrops-header">
			<h1 class="codrops-title"><img src="img/logo.png" alt="img01" width="250px"/> <span>Charleville</span></h1>
		</header>

        <form action="#" method="post">
            <input type="text" name="titre">
            <input type="file" name="image">
            <input type="text" name="pays">
            <input type="text" name="ville">
            <input type="text" name="nom">
            <input type="text" name="prenom">
            <input type="text" name="age">
            <input type="text" name="sexe">
            <input type="text" name="genre">

            <input type="submit" value="Envoyer">
        </form>
    </div>

    <script src="js/flickity.pkgd.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/main.js"></script>
</body>
</html>