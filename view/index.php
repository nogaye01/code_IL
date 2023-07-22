<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CLACTU</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  
  <body>
  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</head>
<body>
	<?php require_once 'shared/entete.php'; ?>
	<div class="bg-white p-4 card">
		<?php if (!empty($articles)): ?>
			<?php foreach ($articles as $article): ?>
				<div class="bg-white p-4 card">
				<li class="mt-5"><a href="index.php?action=article&id=<?= $article->id ?>"><?= $article->titre ?></a></li>
					<p><?= substr($article->contenu, 0, 300) . '...' ?></p>
				</div>
			<?php endforeach ?>
		<?php else: ?>
			<div class="message">Aucun article trouvé</div>
		<?php endif ?>
	</div>
	
</body>
</html>