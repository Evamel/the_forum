<?php require '../app/View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>
    <h1>Articles</h1>
    
    <ul>
        <?php foreach ($articles as $article) : ?>
            
            <?php /*<li><a href="index.php?page=articles-show&title=<?= $article["title"]?>"><?= $article["title"] ?> (<?= $article["publish_date"]?>)</a> </li>*/?>
            <li><a href="index.php?page=articles-show&title=<?= $article->title?>"><?=$article->title ?>  (<?= $article->formatPublishDate() ?>)</a></li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require '../app/View/includes/footer.php'?>