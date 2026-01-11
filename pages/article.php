<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
     <link rel="icon" href="Pictures/favicon.png">
    <title>Komunita Studenti SPŠT</title>
</head>
<body>
    <header>
        <?php include 'header.php'?>
    </header>

    <main>
<div class="container">
<h1><?= $article['title']; ?><h1>
    <img src="<?= $article['picture'] ?>" alt="úvodní obrázek">
    <div>
<?= htmlspecialchars($article['text']);?>
</div>
</div>

</main>

<footer>
 <?php include 'footer.php'?>
</footer>
</body>
</html>