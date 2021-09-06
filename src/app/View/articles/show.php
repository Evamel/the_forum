<?php require '../app/View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>

    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>

</section>

<?php require '../app/View/includes/footer.php'?>