<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/users/login', 'Public#login', 'login'],
		['GET|POST', '/artiste/[i:idArtiste]/edit/qrcode', 'Artiste#addQrcode', 'artiste_qrcode'],
	);
