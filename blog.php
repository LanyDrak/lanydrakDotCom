<section>
		<?php foreach($articles AS $article): ?>
			<article class="animated2 zoomIn">
				<div class="ch-item">
					<div class="ch-info">
						<h3><?= $article['titre'] ?></h3>
						<p><?= $article['synopsis_short'] ?><a href="index.php?page=article&id=<?= $article['id'] ?>">Lire la suite</a></p>
					</div>
					<img src="img/blog-thumbs/<?= $article['thumb'] ?>" alt="image2">
				</div>
			</article>
		<?php endforeach ?>

	<?php include("aside.php") ?>