<!DOCTYPE html>
<html lang="cs">
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
        <a href="/admini">
<img src="Pictures/Logo.png" alt="Logo" class="logo">
</a>
        <h1>Administrace</h1>
    </header>

    <main>
<div class="container">
    
    <div class="card-container">
         <a href="/"> <article name="home">
        <h3>Domovská stránka<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=2797&format=png&color=FFFFFF" alt="Domeček" width="200" height="200">
                
    </figure>
    </article>
    
</a>
       <a href="/articles"> <article name="articles">
        <h3>Správa článků<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=i426cfMKcE3l&format=png&color=FFFFFF" alt="papír a tužka" width="200" height="200">
                
    </figure>
    </article>
</a>
<?php if($role === 2): ?>
    <a href="/aboutusSet"> <article name="aboutus">
        <h3>Nastavení O Nás<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=2800&format=png&color=FFFFFF" alt="I v bublině" width="200" height="200">
                
    </figure>
    </article>
</a>
    <a href="/users"> <article name="articles">
        <h3>Správa uživatelů<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=102261&format=png&color=FFFFFF" alt="uživatelé" width="200" height="200">
                
    </figure>
    </article>
</a>
<?php endif ?>
    <a href="/changepass"> <article name="articles">
        <h3>Změna hesla<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=14085&format=png&color=FFFFFF" alt="Klíč" width="200" height="200">
                
    </figure>
    </article>
</a>
    <a href="/logout"> <article name="articles">
        <h3>Odhlásit se<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=2445&format=png&color=FFFFFF" alt="Odhlásit se" width="200" height="200">
                
    </figure>
    </article>
</a>
</div>
</div>
</main>

<footer>
<?php include 'administace/footer.php'?>
</footer>
</body>
</html>