<?php $this->layout('layout', ['title' => 'Wf3 | Suivez ma voix']) ?>

<?php $this->start('main_content') ?>
	

<!-- *****************************


 	Partie de la Vue de l'acceuil du site


 ********************************** -->

 		
	
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


 				<?php foreach ($vue_artisteAcceuil as $vueArt) :?>
 						
 					<div class="img_artist">
 						<img src="<?= $this->assetUrl('img/'.$vueArt['illustration']); ?>" alt=""  title="image Artistes" >
						<p><?= $this->e($vueArt['nom_artiste']); ?></p>
  					</div>	

 				
 				<?php endforeach; ?>

				</div>
 		

					<a href="" class="btn">Découvrir les artistes</a>

 		</section>

 		<section>
 				
 				<h2>Prochains évenements</h2>

 				<div class="imgSec3">

	 				<?php foreach ($vue_evenementAcceuil as $vueEv) :?>
	 						
	 					<div class="img_artist">
	 						<p><?= $this->e($vueEv['date_evenement']); ?></p>
	 						<p><?= $this->e($vueEv['titre_evenement']); ?></p>
	 						<p><?= $this->e($vueEv['description_evenement']); ?></p>
	 						<p><?= $this->e($vueEv['adresse']); ?></p>
	 						<p><?= $this->e($vueEv['id_artiste']); ?></p>
	  					</div>	

	 				
	 				<?php endforeach; ?>
 					
 				</div>

 		</section>

	<!-- *****************************


	 	Fin Vue de l'acceuil du site


	 ********************************** -->


<?php $this->stop('main_content') ?>


