<!DOCTYPE html>
<html>
<head>
	<title>M2L POWA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?=BASE_URL?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- styles -->
	<link href="<?=BASE_URL?>/css/styles.css" rel="stylesheet">
	<link href="<?=BASE_URL?>/css/chat.css" rel="stylesheet">

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<link rel="stylesheet" href="<?=BASE_URL?>/css/font-awesome.min.css">


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php

try
{
	$bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8","root","",
		array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
		));
}
catch (Exception $e)
{
	echo "Erreur de connection";
}


if (isset($_SESSION['connecte']) == true) {
	$requete = $bdd->query("SELECT * FROM salaries WHERE id_s=".$_SESSION['id_s']." ");
	$get_salaries = $requete->fetch();
	?>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" target="_blank">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=BASE_URL?>/formations">M2L POWA</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php
			if (isset($_SESSION['connecte'])) {
				?>
				
				<ul class="nav navbar-nav navbar-right">
					<?php
					if ($_SESSION['admin']) {
						?>
						<li>
							<a href="<?=BASE_URL?>/admin_panel">Gérer</a>
						</li>
						<?php
					}
					if ($_SESSION['chef']) {
						?>
						<li>
							<a href="<?=BASE_URL?>/chef_panel">Gérer</a>
						</li>
						<?php
					}
					?>
					<li>
						<a href="<?=BASE_URL?>/formations">Formations</a>
					</li>

					<li>
						<form class="navbar-form" role="search">
							<div class="input-group">
								<input type="text" class="form-control barre-chercher" id="barre" placeholder="Search" name="q">
									<ul class="form-group resultat-recherche panel" style="position: absolute; width: 500px; margin-top: 40px; margin-left: -200px">
										<!-- résultat recherche.php -->
									</ul>
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['login']; ?><b
								class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?=BASE_URL?>/profile">Profil</a></li>
							<li class="divider"></li>
							<li><a href="<?=BASE_URL?>/logout">Déconnection</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><?= $get_salaries['credits']; ?><span> Cts </span><i class="fa fa-plus" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="#"><?= $get_salaries['jour']; ?><span> Jours </span><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			<?php } ?>
		</div><!-- /.navbar-collapse -->
	</nav>
	<?php
}
?>

	<div class="page-content min-height-content">
		<div class="row">

			<?php echo $content; ?>

		</div>
	</div>

<div id="chat">
	<!-- OUVERTURE DU CHAT -->
</div>
<!-- FAIS APPARAITRE UN NOUVEAU CHAT AU CLIC -->

<?php
if (isset($_SESSION['connecte'])) {
?>

	<footer>
		<div class="container">

			<div class="copy text-center">
				Copyright 2014 <a href='#'>Website</a>
			</div>

		</div>
	</footer>

<?php } ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=BASE_URL?>/js/main.js"></script>
<script src="<?=BASE_URL?>/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=BASE_URL?>/js/custom.js"></script>
<script src="<?=BASE_URL?>/js/recherche.js"></script>
<script src="<?=BASE_URL?>/js/modif-admin.js"></script>
<script src="<?=BASE_URL?>/js/profile.js"></script>
<script src="<?=BASE_URL?>/js/chat.js"></script>
<script src="<?=BASE_URL?>/js/infinite-scroll.js"></script>
<script src="<?=BASE_URL?>/js/accueil.js"></script>
<script src="<?=BASE_URL?>/js/rand-mdp.js"></script>

</body>
</html>