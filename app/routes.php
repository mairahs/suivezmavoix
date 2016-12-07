<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/users/login', 'Public#login', 'login'],
		['GET', '/logout', 'Public#logout', 'logout'],
		['GET|POST', '/artiste/[i:id]/edit/profil', 'Artiste#profil', 'profil'],
		['GET|POST', '/artiste/[i:id]/edit/galerie', 'Artiste#galerie', 'galerie'],
		['GET|POST', '/artiste/[i:id]/edit/videos', 'Artiste#videos', 'videos'],
		['GET|POST', '/artiste/[i:id]/edit/audio', 'Artiste#audio', 'audio'],
		['GET|POST', '/artiste/[i:id]/edit/evenements', 'Artiste#evenements', 'evenements'],
		['GET|POST', '/artiste/[i:id]/edit/qrcode', 'Artiste#qrCode', 'qrcode'],
	);
