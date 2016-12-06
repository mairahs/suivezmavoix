<?php

namespace Controller;

use \W\Controller\Controller;

class ArtisteController extends BaseController
{

	/**
	 * Page d'accueil par défaut
	 */
	public function addQrcode($idArtiste)
	{
		var_dump($idArtiste);

		
		$this->show('artiste/edit/qrcode');
	}

}
