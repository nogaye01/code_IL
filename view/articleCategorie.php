<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualités MGLSI</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php require_once 'inc/entete.php'; ?>
	<div id="cotenu">
		<?php if (!empty($articles)): ?>
			<?php foreach ($articles as $article): ?>
				<div class="bg-white p-4 card">
				<h3 class="mb-4"><a href="index.php?action=article&id=<?= $article->id ?>"><?= $article->titre ?></a></h3>
					<p><?= substr($article->contenu, 0, 300) . '...' ?></p>
				</div>
			<?php endforeach ?>
		<?php else: ?>
			<div class="message">Aucun article trouvé</div>
		<?php endif ?>
	</div>
	
</body>
</html>
