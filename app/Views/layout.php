<!doctype html>
<html>
<head>
	<meta  charset="utf-8" />
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0" />
</head>

<body>

	<!-- *****************************


	 		Bar de navigation laterale


	 ********************************** -->

	 	<!-- Contenu des vues  -->


	 	<!-- Fenetre modale -->

	 		<!-- The Modal -->
	 		<div id="myModal1" class="modal">

	 		  <!-- Modal content -->
	 		  <div class="modal-content">
	 		    <span class="close" onclick="closeModal()">x</span>
	 		    <p>Connexion..</p>
	 		    <p><a href="" onclick="closeModal()">lien connection</a></p>
	 		  </div>

	 		</div>

	 		<div id="myModal2" class="modal">

	 		  <!-- Modal content -->
	 		  <div class="modal-content">
	 		    <span class="close" onclick="closeModal()">x</span>
	 		    <p>Inscription..</p>
	 		    <p><a href=""></a>>lien inscription </a></p>
	 		  </div>

	 		</div>


		<aside>

			<div id="imgW">
				<img src="<?= $this->assetUrl('img/logoWf3.png') ?>">
			</div>

			<nav>
				<ul>

					<li class="active"><a href="<?php echo $this->url('default_home'); ?>">Accueil</a></li>
					<li><a href="#">A propos</a></li>
					<li><a href="#">Les artistes</a></li>
					<li><a href="#">Les évenements du jour</a></li>
					<li><a href="#">Nous contacter</a></li>

				</ul>
			</nav>


			<div class="btnRs">

				<a href="facebook.fr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="twitter.fr"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="plus.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

			</div>

		</aside>

		<header>

		<span class="bars">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</span>

			<div id="titre">
				<h1>SUIVEZ MA VOIX !</h1>
					<h2>Phrase d'acroche</h2>
			</div>

			<span id="connexion">

			<button class="btnOpenModal" onclick="openModal1()">
				Connexion				
			</button>

			<button class="btnOpenModal"  onclick="openModal2()">
				Inscription
			</button>
			

			</span>



		</header>


		<!-- *****************************


		 	 Vue de l'acceuil du site


		 ********************************** -->

		 <main>
		 
		<?= $this->section('main_content') ?>
		 	
		 	
		 </main>



		<!-- *****************************


		 	Fin Vue de l'acceuil du site


		 ********************************** -->

		<footer>
			Copyrigth Wf3 | 2016 &copy
		</footer>


		<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo $this->assetUrl('js/flashmessage.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->assetUrl('js/boutonModal.js') ?>"></script>
	</body>
	</html>
