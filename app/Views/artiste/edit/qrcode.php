<?php $this->layout('layout_artiste', ['title' => 'Qrcode']) ?>

<?php $this->start('main_content') ?>
	<h2>Voici votre Qrcode</h2>
	<p>Test de qrcode</p>
	<?php
		$url = $_SERVER['REDIRECT_URL'];
		$string = "/edit/qrcode";
		$urlQrcode = str_replace($string, '', $url);
		var_dump($urlQrcode);
	?>
<?php $this->stop('main_content') ?>
