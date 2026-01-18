<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="Pictures/favicon.png">
     <link rel="stylesheet" type="text/css" href="CSS/Style.css">
      <link rel="stylesheet" type="text/css" href="pages/administace/CSS/style.css">
    <title>Studenti SPŠT - Administrace</title>
     <style>
a {
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
    <a href="/nuser"> 
        <article name="novy-uzivatel">
        <h3>Nový uživatel<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=GCsCDZiHTP0d&format=png&color=FFFFFF" alt="Uživatel +" width="200" height="200">
                
    </figure>
    </article>
</a>
<?php

foreach($usernames as $username): ?>
    <a href="/euser?user=<?php echo $username;?>"> 
        <article name="<?php echo htmlspecialchars($username); ?>">
            <h3><?php echo htmlspecialchars($username); ?></h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=83190&format=png&color=FFFFFF" 
                     alt="Ikona uživatele" width="200" height="200">
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