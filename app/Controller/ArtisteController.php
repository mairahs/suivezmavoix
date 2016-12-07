<?php

namespace Controller;

use \W\Controller\Controller;
use W\Security\AuthentificationModel;
// use \W\Security\AuthorizationModel as A;

class ArtisteController extends PublicController
{

	public function qrCode($idPageArtiste) {
		$this->editionAccess($idPageArtiste);

	}



}
