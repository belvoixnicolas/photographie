<?php include('connect.php'); ?>

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
	<a href="ajout.php">Ajouter une photo</a>

	<div class="container">
		<div class="hero">
			<div class="hero__back hero__back--static"></div>
			<div class="hero__back hero__back--mover"></div>
			<div class="hero__front"></div>
		</div>
		<header class="codrops-header">
			<h1 class="codrops-title"><img src="img/logo.png" alt="img01" width="250px"/> <span>Charleville</span></h1>
		</header>

		<!-- Création d'une catégorie -->
		<div class="stack-slider">
			<div class="stacks-wrapper">
			<?php foreach ($bdh -> query('SELECT ID, genre FROM genre') as $row) {?>
				<!-- Création d'une catégorie -->
				<div class="stack">
					<h2 class="stack-title"><a href="#" data-text="<?php echo $row[1];?>"><span><?php echo $row[1];?></span></a></h2>
					<?php
						$sql = 'SELECT ID_photo FROM defini WHERE ID = ' . $row[0]; 
						foreach ($bdh -> query($sql) as $liste) {
							$sql = 'SELECT * FROM photo WHERE ID = ' . $liste[0];
							$req = $bdh -> query($sql);
							$donnes = $req -> fetch();

							$sql = 'SELECT * FROM auteur WHERE ID = ' . $donnes[3];
							$req = $bdh -> query($sql);
							$auteur = $req -> fetch();

							$sql = 'SELECT * FROM lieu WHERE ID = ' . $donnes[3];
							$req = $bdh -> query($sql);
							$lieu = $req -> fetch();
					?>
					<!-- Création d'un Article -->
					<div class="item">
						<div class="item__content">
							<img src="img/photo/<?php echo $donnes[2]; ?>" alt="img01" />
							<h3 class="item__title"><?php echo $donnes[1]; ?> <span class="item__date"><?php echo $donnes[5] . '/' . $donnes[6] . '/' . $donnes[7]; ?></span></h3>
							<div class="item__details">
								<ul>
									<li><i class="icon icon-camera"></i><span><?php echo $auteur[1] . ' ' . $auteur[2] ?></span></li>
									<li><i class="icon icon-aperture"></i><span><?php echo $auteur[3] . ' ans' ?></span></li>
									<li><i class="icon icon-exposure_time"></i><span><?php echo $lieu[1] . ' ( ' . $lieu[2] . ' )' ?></span></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Fin d'un Article -->
					<?php } ?>
				</div>
			<?php } ?>

			</div>
			<!-- /stacks-wrapper -->
		</div>
		<!-- /stacks -->
		<img class="loader" src="img/three-dots.svg" width="60" alt="Loader image" />
	</div>
	<!-- /container -->
	<!-- Flickity v1.0.0 http://flickity.metafizzy.co/ -->
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
