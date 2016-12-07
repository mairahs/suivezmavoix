<?php
	
	$w_routes = array(
		['GET', '/', 'Home#Accueil_Artists', 'default_home'],
		['GET|POST', '/users/login', 'Public#login', 'login'],

	);