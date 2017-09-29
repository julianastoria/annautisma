<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<header class="jumbotron">
		<div class="container demo">
		<h1 class="text-center text-uppercase">Annautisma</h1>
		<h2 class="text-center">Site de note-annuaire de l'autisme en France</h2>
	</div>
	</header>



<main class="container-fluid">
	<h3 class="text-center regions">Derniers établissements ajoutés dans les départements :</h2><br>
	<a class="afficher" href="#">Afficher tous les établissements</a>

		<div class="row">
			<?php foreach ($institutions as $key => $institution): ?>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<div class="caption">
							<img class="img-responsive" src="<?= $institution['photos']; ?>" alt="Photo de <?= $institution['name'] ?>">
							<a href="<?= $this->url('institution_details',['id'=>$institution['id']]) ?>"><h4 class="text-uppercase text-center"><?= $institution['name'] ?></h4></a>
							<div class="border"></div>
						</div>
					</div>
						
				</div>
			<?php endforeach; ?>
				</div>

	<h3 class="text-center regions">Derniers médecins ajoutés dans les départements :</h2>
	<a class="afficher" href="#">Afficher tous les médecins</a>
			<div class="row">
				<?php foreach ($doctors as $key => $doctor): ?>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
							<div class="caption">
							<!-- img class="img-responsive" src="<?= isset($doctor['photos']) ? $doctor['photos'] : null; ?>" alt="Photo de <?= $doctor['firstname'] ?>"> -->
							<a href="<?= $this->url('doctor_details',['id'=>$doctor['id']]) ?>"><h4 class="text-uppercase text-center">Dr <?= $doctor['lastname']." ".$doctor['firstname'] ?></h4></a>
							<div class="border"></div>
						</div>
					</div>
						
				</div>
				<?php endforeach ?>
			</div>

	</main>

<?php $this->stop('main_content') ?>
