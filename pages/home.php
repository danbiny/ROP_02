<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
    <link rel="icon" href="Pictures/favicon.png">
    <title>Komunita Studenti SPŠT</title>
        <style>
 a{
    color: white;
    text-decoration: none;
}
a:hover {
    color: white;
    text-decoration: none;
}
        </style>
</head>
<body>
    <header>
        <?php include 'header.php'?>
    </header>

    <main>
<div class="container">
    <h1>Aktuality</h1>
    <div class="card-container">
<?php foreach($articles as $article): ?>
    <a href="/article?id=<?= $article['ID']; ?>"> 
        <article name="article-<?= $article['ID']; ?>">
            <h3><?=$article['title']; ?></h3>
            <figure>
                <img src="<?= $article['picture']; ?>" 
                     alt="náhled" width="400" height="300">
            </figure>
            <h4><?= $article['date']; ?>
        </article>
    </a>
<?php endforeach; ?>

</div>
</div>
</main>

<footer>
 <?php include 'footer.php'?>
</footer>
</body>
</html>