<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="Pictures/favicon.png">
     <link rel="stylesheet" type="text/css" href="CSS/Style.css">
      <link rel="stylesheet" type="text/css" href="pages/administace/CSS/style.css">
    <title>Studenti SPŠT - Administrace</title>
    
</head>
<body>
    <header>
        <?php include 'header.php'?>
    </header>

    <main>
        
<div class="container">
    <form method="post" action="/addarticle">
<h1>Nový článek</h1>
<label for="title">Název článku</label>
<input id="title" name="title" type="text" required placeholder="Název článku">

<label for=obrazek>Odkaz na úvodní obrázek</label>
<input id="obrazek" name="obrazek" type="text" placeholder="Odkaz na úvodní obrázek (volitelné)">

<label for="obsah">Text článku</label>
<textarea id="fmessage" name="obsah" rows="30" cols="50" placeholder="Napište sem svůj text..." require></textarea>

<span><label for="koncept"><b>Koncept</b></label>
<input type="radio" id="koncept" name="stav" value="1" checked></span>
<span><label for="publikovat"><b>Publikovat</b></label>
<input type="radio" id="publikovat" name="stav" value="2"><span><br><br>

<label for="date">Datum</label>
<input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>"><br><br>
    <button type="submit">Uložit</button>
</form>
</div>
</main>

<footer>
<?php include 'footer.php'?>
</footer>
</body>
</html>