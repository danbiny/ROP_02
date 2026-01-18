<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="Pictures/favicon.png">
     <link rel="stylesheet" type="text/css" href="CSS/Style.css">
      <link rel="stylesheet" type="text/css" href="pages/administace/CSS/style.css">
    <title>Studenti SPŠT - Administrace</title>
    <style>a
    {
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
    <form method="post" action="/sarticle">
<h1>Nový článek</h1>
<input type="text" name="id" hidden value="<?php echo $article['ID'];?>">
<label for="title">Název článku</label>
<input id="title" name="title" type="text" required value="<?php echo $article['title'];?>">

<label for=obrazek>Odkaz na úvodní obrázek</label>
<input id="obrazek" name="obrazek" type="text" value="<?php echo $article['picture'];?>">

<label for="obsah">Text článku</label>
<textarea id="fmessage" name="obsah" rows="30" cols="50" placeholder="Napište sem svůj text..." require><?php echo htmlspecialchars($article['text']); ?></textarea>
<?php if($article['state']==="1"):?>
<span><label for="koncept"><b>Koncept</b></label>
<input type="radio" id="koncept" name="stav" value="1" checked></span>
<span><label for="publikovat"><b>Publikovat</b></label>
<input type="radio" id="publikovat" name="stav" value="2"></span><br><br>
<?php else:?>
    <span><label for="koncept"><b>Koncept</b></label>
<input type="radio" id="koncept" name="stav" value="1"></span>
<span><label for="publikovat"><b>Publikovat</b></label>
<input type="radio" id="publikovat" name="stav" value="2" checked></span><br><br>
<?php endif; ?>

<label for="date">Datum</label>
<input type="date" id="date" name="date" value="<?php echo $article['date'];?>">
    <button type="submit">Uložit</button>
</form>

<div class=card-container>
   
 <a href="/darticle?id=<?php echo $article['ID']; ?>"> 
        <article name="smazat-článek">
        <h3>odstranit článek<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=7837&format=png&color=FA5252" alt="Popelnice" width="200" height="200">
                
    </figure>
    </article>
</a>

<a href="/articles"> 
        <article name="zpet">
        <h3>Zpět na seznam článků<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=9045&format=png&color=FFFFFF" alt="Zpět" width="200" height="200">
                
    </figure>
    </article>
</a>
</div>
</div>
</main>

<footer>
<?php include 'footer.php'?>
</footer>
</body>
</html>