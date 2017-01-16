<!DOCTYPE html>
<html>
<head>
	<title>M2L POWA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="http://localhost/M2l/css/bootstrap.min.css" rel="stylesheet">
	<!-- styles -->
	<link href="http://localhost/M2l/css/styles.css" rel="stylesheet">

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<link rel="stylesheet" href="http://localhost/M2l/css/font-awesome.min.css">


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php
if (isset($_SESSION['connecte']) == true) {
	?>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://localhost/M2l/formations">M2L POWA</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php
			if (isset($_SESSION['connecte'])) {
				?>


				<ul class="nav navbar-nav navbar-right">

					<li>
						<form class="navbar-form" role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search" name="q">
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
							<li><a href="profile">Profil</a></li>
							<li class="divider"></li>
							<li><a href="logout">Déconnection</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><?= $_SESSION['credits']; ?><span> Cts </span><i class="fa fa-plus" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="#"><?= $_SESSION['jour']; ?><span> Jours </span><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
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


	<footer>
		<div class="container">

			<div class="copy text-center">
				Copyright 2014 <a href='#'>Website</a>
			</div>

		</div>
	</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://localhost/M2l/bootstrap/js/bootstrap.min.js"></script>
<script src="http://localhost/M2l/js/custom.js"></script>
</body>
</html>