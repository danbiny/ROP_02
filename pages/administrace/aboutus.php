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
    <h1>Nastavení Sekce o Nás</h1><br><br>
<h2>O Nás</h2>

    <form method="post" action="/ulozit2">
<label for="aboutusText">Text o Nás</label>
<textarea id="fmessage" name="zprava" rows="10" cols="50" placeholder="Napište sem svůj text..." require><?php echo $text; ?></textarea>

<button type="submit">Uložit</button>
</form>

<h2>Koordinátorka</h2>
<form method="post" action="/ulozit">
     <input type="hidden" name="funkce" value="Koordinator">
<label for="Kname">Jméno a Příjmení</label>
       <input id="Kname" name="fullname" type="text" required placeholder="Jan Novák" 
       value="<?php echo htmlspecialchars($data['Koordinator']['jmeno'] ?? ''); ?>">
      
<label for="Kpicture">Odkaz na fotku</label>
       <input id="Kpicture" name="picture" type="text" required placeholder="Odkaz na fotku"
       value="<?php echo htmlspecialchars($data['Koordinator']['foto'] ?? ''); ?>">

       <label for="Kemail">Školní E-mail</label>
<input id="Kemail" name="email" type="email" required placeholder="jmeno@spst.cz"
value="<?php echo htmlspecialchars($data['Koordinator']['email'] ?? ''); ?>">

<label for="Koffice">Kabinet</label>
<input id="Koffice" name="subject" type="text" required placeholder="A234"
value="<?php echo htmlspecialchars($data['Koordinator']['trida'] ?? ''); ?>">

<label for="Kbio">Krátké Bio</label>
<textarea id="Kbio" name="Kbio" rows="4" cols="50" placeholder="Krátké bio" require><?php echo htmlspecialchars($data['Koordinator']['bio'] ?? ''); ?></textarea>
<button type="submit">Uložit</button>
</form>
<h2>Předseda</h2>
<form method="post" action="/ulozit">
    <input type="hidden" name="funkce" value="Predseda">
<label for="Pname">Jméno a Příjmení</label>
       <input id="Pname" name="fullname" type="text" required placeholder="Jan Novák" 
       value="<?php echo htmlspecialchars($data['Predseda']['jmeno'] ?? ''); ?>">
      
<label for="Ppicture">Odkaz na fotku</label>
       <input id="Ppicture" name="picture" type="text" required placeholder="Odkaz na fotku"
       value="<?php echo htmlspecialchars($data['Predseda']['foto'] ?? ''); ?>">

       <label for="Pemail">Školní E-mail</label>
<input id="Pemail" name="email" type="email" required placeholder="jmeno@spst.eu"
value="<?php echo htmlspecialchars($data['Predseda']['email'] ?? ''); ?>">

<label for="Pclass">Třída</label>
<input id="Pclass" name="subject" type="text" required placeholder="ABC4"
value="<?php echo htmlspecialchars($data['Predseda']['trida'] ?? ''); ?>">

<label for="Pbio">Krátké bio</label>
<textarea id="Pbio" name="Kbio" rows="4" cols="50" placeholder="Krátké bio" require><?php echo htmlspecialchars($data['Predseda']['bio'] ?? ''); ?></textarea>
<button type="submit">Uložit</button>
</form>
<h2>Místopředseda</h2>
<form method="post" action="/ulozit">
    <input type="hidden" name="funkce" value="Mistopredseda">
<label for="Mname">Jméno a Příjmení</label>
       <input id="Mname" name="fullname" type="text" required placeholder="Jan Novák" 
       value="<?php echo htmlspecialchars($data['Mistopredseda']['jmeno'] ?? ''); ?>">
      
<label for="Mpicture">Odkaz na fotku</label>
       <input id="Mpicture" name="picture" type="text" required placeholder="Odkaz na fotku"
       value="<?php echo htmlspecialchars($data['Mistopredseda']['foto'] ?? ''); ?>">

       <label for="Memail">Školní E-mail</label>
<input id="Memail" name="email" type="email" required placeholder="jmeno@spst.eu"
value="<?php echo htmlspecialchars($data['Mistopredseda']['email'] ?? ''); ?>">

<label for="Mclass">Třída</label>
<input id="Mclass" name="subject" type="text" required placeholder="ABC4"
value="<?php echo htmlspecialchars($data['Mistopredseda']['trida'] ?? ''); ?>">

<label for="Mbio">Krátké bio</label>
<textarea id="Mbio" name="Kbio" rows="4" cols="50" placeholder="Krátké bio" require><?php echo htmlspecialchars($data['Mistopredseda']['bio'] ?? ''); ?></textarea>
<button type="submit">Uložit</button>
</form>
</div>
</main>

<footer>
<?php include 'footer.php'?>
</footer>
</body>
</html>