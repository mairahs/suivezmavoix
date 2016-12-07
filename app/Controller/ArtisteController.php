<?php

namespace Controller;

use \W\Controller\Controller;
use W\Security\AuthentificationModel;
// use \W\Security\AuthorizationModel as A;

class ArtisteController extends PublicController
{

	public function profil($idPageArtiste) {
		$this->editionAccess($idPageArtiste, "profil");
	}

	public function galerie($idPageArtiste) {
		$this->editionAccess($idPageArtiste, "galerie");
	}

	public function videos($idPageArtiste) {
		$this->editionAccess($idPageArtiste, "videos");
	}

	public function audio($idPageArtiste) {
		$this->editionAccess($idPageArtiste, "audio");
	}

	public function evenements($idPageArtiste) {
		$this->editionAccess($idPageArtiste, "evenements");
	}

	public function qrcode($idPageArtiste) {
		$this->editionAccess($idPageArtiste, "qrcode");
	}

}
