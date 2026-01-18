<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="Pictures/favicon.png">
     <link rel="stylesheet" type="text/css" href="CSS/Style.css">
      <link rel="stylesheet" type="text/css" href="pages/administace/CSS/style.css">
    <title>Studenti SPŠT - Administrace</title>
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
    <div class="card-container">
    <a href="/narticle"> 
        <article name="novy-clsnek">
        <h3>Nový článek<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=85298&format=png&color=FFFFFF" alt="+" width="200" height="200">
    </figure>
    </article>
</a>
<?php foreach($articles as $article): ?>
    <a href="/earticle?id=<?php echo $article['ID']; ?>"> 
        <article name="article-<?php echo htmlspecialchars($article['ID']); ?>">
            <?php if($article['state'] === "1"): ?>
            <h3><?php echo htmlspecialchars($article['title']); ?> - Koncept</h3>
<?php else: ?>
    <h3><?php echo htmlspecialchars($article['title']); ?> - Publikováno</h3>
    <?php endif; ?>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=GQsBnqPjhxbE&format=png&color=FFFFFF" 
                     alt="Tužka" width="200" height="200">
            </figure>
            
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