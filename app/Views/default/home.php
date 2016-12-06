<?php $this->layout('layout', ['title' => 'Wf3 | Suivez ma voix']) ?>

<?php $this->start('main_content') ?>
	

<!-- *****************************


 	Partie de la Vue de l'acceuil du site


 ********************************** -->

 		
	<!-- Contenu des vues  -->



	<main>
 			<!-- Section haut de page (Image plus titre) -->


 		<!-- Artiste Image plus description   -->
 		<section>

	 		<span class="imgSec1">

	 					<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" >
	 					<p class="desc">description image 1</p>
	 		</span>

	 		<span class="imgSec1">

	 					<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" >
	 					<p class="desc">description image 2</p>
	 		</span>

	 		<span class="imgSec1">

	 					<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" >
	 					<p class="desc">description image 3</p>
	 		</span>

	 		<span class="imgSec1">

	 					<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" >
	 					<p class="desc">description image 4</p>
	 		</span>


 		</section>

 		<section>

 					<h2>Les artistes </h2>

 					<div class="imgSec2">

 						<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" >	 		

 						<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" >	 		

 						<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" > 		

 						<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" >

 						<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" >

 						<img src="<?= $this->assetUrl('img/default.jpg') ?>" alt=""  title="image Artistes" >
 		
					</div>

					<a href="" class="btn">Découvrir les artistes</a>

 		</section>

 		<section>
 				
 				<h2>Prochains évenements</h2>

 				<div class="imgSec3">

 				<img src="<?= $this->assetUrl('img/default_map.jpg') ?>">


 				<img src="<?= $this->assetUrl('img/default_map.jpg') ?>" alt=""  title="image Artistes" >

 				<img src="<?= $this->assetUrl('img/default_map.jpg') ?>" alt=""  title="image Artistes" >

 				<img src="<?= $this->assetUrl('img/default_map.jpg') ?>" alt=""  title="image Artistes" >
 					
 				</div>

 		</section>

	</main>



	<!-- *****************************


	 	Fin Vue de l'acceuil du site


	 ********************************** -->


<?php $this->stop('main_content') ?>
