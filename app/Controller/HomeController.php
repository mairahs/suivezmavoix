<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArtisteAccueilModel;
use \Model\EvenementsModel;

class HomeController extends Controller
{

	/**
	 * Page d'accueil
	 */

	public function Accueil_Artists()
	{
		$artisteAcceuilM = new ArtisteAccueilModel();

		$artisteAcceuil = $artisteAcceuilM -> sixArtistes();

		$evenementsAcceuilM = new EvenementsModel();

		$evenementsAcceuil = $evenementsAcceuilM -> quatreArtistes();

	$this->show('default/home', array('vue_artisteAcceuil' => $artisteAcceuil,'vue_evenementAcceuil' => $evenementsAcceuil ));

	}


}