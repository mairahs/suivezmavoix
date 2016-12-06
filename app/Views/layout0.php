<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1><?= $this->e($title) ?></h1>
		</header>

		<section>
			<?php echo "<p>" . $fmsg->display() . "</p>"; ?>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
	<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo $this->assetUrl('js/flashmessage.js') ?>"></script>
</body>
</html>
