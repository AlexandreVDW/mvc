<!DOCTYPE html>
<html>
<head>
    <title><?= $author->getName() ?></title>
</head>
<body>
<?php require 'View/includes/header.php'?>
    <div class="author-details">
        <h1><?= $author->getName() ?></h1>
    </div>
    <div class="article-list">
        <?php foreach ($articles as $article): ?>
            <p>
                <a href="index.php?page=articles-show&id=<?= $article->id ?>">
                    <strong><?= $article->title ?></strong>
                </a>
                <small><?= $article->formatPublishDate() ?></small>
            </p>
        <?php endforeach; ?>
        
    </div>
<?php require 'View/includes/footer.php'?>
</body>
</html>