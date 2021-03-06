<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title><?= $this->e($title) ?></title>
	
	<link rel="stylesheet" href=" <?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">	
	<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.css') ?>">
	<link rel="stylesheet" href=" <?= $this->assetUrl('css/responsive.css') ?>">

	<!-- Animate CSS -->
    <link rel="stylesheet" href="<?= $this->assetUrl('css/animate.css') ?>">

     <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
    
 

</head>
<body class="index">
	
	<div class="container-fluid demo">
	<header id="header">

		<!--navbar -->
<nav class="navbar navbar-default navbar-fixed-top" id="nav" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?= $this->url('home') ?>">Annautisma</a>
			<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#annautisma">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
			<div class="collapse navbar-collapse" id="annautisma">


			<ul class="nav navbar-nav navbar-left">

				
			<li>
				<div class="dropdown">
					
						<a role="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-blue dropdown-toggle" href="#Etablissements"><i class="fa fa-home visible-xs" aria-hidden="true"></i><p class="hidden-xs">Etablissements</p><span class="caret"></span></a>
						 
							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu1">
								 <li class="dropdown-submenu">
								 	<a class="dropdown-toggle" data-toggle="dropdown" href="<?= $this->url('institutions_index',['type'=>'etablissementsspe']) ?>">Etablissements spécialisés</a>
										 
								</li>	 		
							

								<li class="dropdown-submenu"><a href="<?= $this->url('institutions_index',['type'=>'ecoles']) ?>">Ecoles</a>
						    		 
						    	</li>
							</ul>
					
				</div>
			</li>
			


			<li>
				<div class="dropdown">
					
							<a href="#Medecins" class="btn btn-blue dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"><i class="fa fa-user-md visible-xs" aria-hidden="true"></i><p class="hidden-xs">Médecins</p><span class="caret"></span></a>
							
				  		
				  		 <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
						    <li><a href="<?= $this->url('doctors_index',['type'=>'generaliste']) ?>">Généraliste</a></li>
						    <li><a href="<?= $this->url('doctors_index',['type'=>'psychiatre']) ?>">Psychologue/Psychiatre</a></li>
						    <li><a href="<?= $this->url('doctors_index',['type'=>'dentiste']) ?>">Dentiste</a></li>
						</ul>
					</div>
				</li>
			</ul>
		
				
			<ul class=" nav navbar-nav navbar-right">
				<?php if (!isset($_SESSION['user'])) : ?>
					<li class="navbar-right"><a href="<?= $this->url('user_signup') ?>"><i class="fa fa-user-plus bonhomme" aria-hidden="true"></i></a></li>
					<li class="navbar-right"><a href="<?= $this->url('user_signin') ?>"><i class="fa fa-sign-in" aria-hidden="true"></i><span lang="en"> Login</span></a></li>
				<?php else : ?>	
					<li><a href="<?=$this->url('profile')?>"><?= $_SESSION['user']['firstname'] ?></a></li>
					<li><a href="<?= $this->url('logout') ?>">Deconnexion</a></li>
				<?php endif; ?>
					<li>
					<div class="dropdown">
		
							<a href="#Ajout" class="btn btn-blue ajout dropdown-toggle" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button">Ajout <span class="caret"></span></a>
							 
				  		
				  		 <ul class="dropdown-menu ajouts" aria-labelledby="dropdownMenu4">
						    <li class=""><a href="<?= $this->url('institution_create')?>">Etablissements</a></li>
						    <li class=""><a href="<?= $this->url('doctor_create') ?>">Médecins</a></li>
						</ul>
					</div>
			</li>
		</ul>
		</div>
	</div>
</nav>
</header>



	

		

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer class="container-fluid footer" role="contentinfo">
			<div class="row">
				<div class="col-md-6">
					<ul class="list-inline">
						<li class="text-left contact"><a href="<?= $this->url('contact') ?>">Contacts</a></li>
						<li class="text-left"><a>à propos</a></li>
						<li class="text-left"><a>Mentions légales</a></li>
					</ul>
				</div>

				<div class="col-md-6">
					<p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright Mouton à 5 pattes, Compéthance, WebForce3, Urbilog 2017 </p>

				</div>	
			</div>
		</footer>
	</div>



	

	<!-- jQuery Version 2.1.1 -->
    <script src="<?= $this->assetUrl('js/jquery-2.1.1.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>

	   
	   <!-- Modernizer js -->
    <script src="<?= $this->assetUrl('js/modernizr.custom.js') ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= $this->assetUrl('js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/classie.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/count-to.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/jquery.appear.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/cbpAnimatedHeader.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/jquery.fitvids.js') ?>"></script>
	

    <!-- Contact Form JavaScript -->
    <script src="<?= $this->assetUrl('js/jqBootstrapValidation.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/contact_me.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= $this->assetUrl('js/script.js') ?>"></script>
	<?= $this->section('main_script') ?>


</body>
</html>