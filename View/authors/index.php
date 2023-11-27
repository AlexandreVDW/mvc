<!DOCTYPE html>
<html>
<head>
    <title>Authors</title>
</head>
<body>
<?php require 'View/includes/header.php'?>
    <div class="author-list">
        <h1>Authors :</h1>
        <?php foreach ($authors as $author): ?>
            <p>
                <a href="index.php?page=authors-show&id=<?= $author->getId() ?>">
                    <?= $author->getName() ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
<?php require 'View/includes/footer.php'?>
</body>
</html>