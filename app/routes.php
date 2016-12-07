<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/users/login', 'Public#login', 'login'],
		['GET', '/logout', 'Public#logout', 'logout'],
		['GET|POST', '/artiste/[i:id]/edit/qrcode', 'Artiste#qrCode', 'qrcode'],
		['GET|POST', '/artiste/[i:id]/edit/galerie', 'Artiste#galerie', 'galerie'],
	);
