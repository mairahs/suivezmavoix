<?php

namespace Controller;

use Model\PublicModel;
use W\Security\AuthentificationModel;
use \Respect\Validation\Validator as v;
use \Respect\Validation\Exceptions\ValidationException;

class PublicController extends BaseController
{

	public function login() {
		$auth = new AuthentificationModel();

		// Créer un mot de passe haché pour tester le formualire de connexion
		// echo $auth->hashPassword('123456');

//		 on va utiliser le model d'Authentification et plus particulièrement
//		 la méthode isValidLoginInfos à laquelle on passera en param
//		 le pseudo/email et le password envoyés en post par l'utilisateur
//		 une fois cette vérification faite, on récupère l'utilisateur en bdd
//		 on le connecte et on le redirige vers la page d'accueil
		if( !empty($_POST)) {
			// je vérifie la non-vacuité du pseudo en POST
			if( empty($_POST['email'])) {
				// si le pseudo est vide on ajoute un message d'erreur
				$this->getFlashMessenger()->error('Veuillez entrer votre e-mail');
			}
			// je vérifie la non-vacuité du mot de passe en POST
			if( empty($_POST['password'])) {
				// si le mot de passe est vide on ajoute un message d'erreur
				$this->getFlashMessenger()->error('Veuillez entrer votre mot de passe');
			}

			$auth = new AuthentificationModel();

			if( ! $this->getFlashMessenger()->hasErrors()) {
				// vérification de l'existence de l'utilisateur
				$idUser = $auth->isValidLoginInfo($_POST['email'], $_POST['password']);

				var_dump($idUser);

				// si l'utilisateur existe bel et bien...
				if($idUser !== 0){
					$publicModel = new PublicModel();

					// ... je récupère les infos de l'utilisateur et je m'en
					// sers pour le connecter au site à l'aide de $auth->logUserIn
					$userInfos = $publicModel->find($idUser);
					$auth->logUserIn($userInfos);

					// une fois l'utilisateur connecté, je le redirige vers l'accueil
					$this->getFlashMessenger()->success('Vous vous êtes connecté avec succès !');
					$this->redirectToRoute('default_home');
				} else {
					// les infos de connexion sont incorrectes, on avertit
					// l'utilisateur
					$this->getFlashMessenger()->error('Vos informations de connexion sont incorrectes');
				}

			}

		}

		$this->show('users/login', array('datas' => isset($_POST) ? $_POST : array()));
	}

}
