<section>
	<article class="fullview">
		<img src="img/blog-photos/<?= $article['photo'] ?>" alt="<?= $article['photo'] ?>">
		<h3><?= $article['titre'] ?><em><?= $article['categorie'] ?></em></h3>
		<p>Posté le <?= $article['creationTimestamp'] ?> <em>par <?= $article['auteur'] ?></em></p>
		<p><strong><?= $article['synopsis'] ?></strong></p>
		<p><?= $article['critique'] ?></p>
		<iframe width="640" height="360" src="https://www.youtube.com/embed/<?= $article['trailer'] ?>" frameborder="0" allowfullscreen></iframe>
	</article>
	<?php include("aside.php") ?>