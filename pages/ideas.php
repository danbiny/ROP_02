<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
     <link rel="icon" href="Pictures/favicon.png">
    <title>Komunita Studenti SPŠT - Návrhy</title>
</head>
<body>
    <header>
        <?php include 'header.php'?>
    </header>
   <?php if(!empty($hlaska)) echo $hlaska; ?>
   <script>
setTimeout(() => {
    const msg = document.querySelector('.success-msg');
    if(msg) msg.style.display = 'none';
}, 5000); // zmizí po 5 sekundách
</script>
    <main>
<div class="container">
<h2>Napište nám!</h2><br>
  <p>Máš nápad na akci, nebo chceš jenom zlepšit něco ve škole? Tak to jsi na správném místě, vyplň formulář níže a my s tvým nápadem něco uděláme. Pokud se nás chceš jenom na něco zeptat, využij formulář na stránce <a href="/contact">Kontakt</a></p>
  <form class="form" method="post" action="">

    <label for="fname">Jméno a příjmení<label><span id="fname-desc"> (Uveďte celé jméno.) *</span><br>
       <input id="fname" name="fullname" type="text" required placeholder="Jan Novák" aria-describedby="fname-desc"><br><br><br>
      

       <label for="email">Školní E-mail *</label><br>
<input id="email" name="email" type="email" required placeholder="jmeno@spst.eu"><br><br><br>

<label for="fmessage">Zpráva *</label><br>
 <textarea id="fmessage" name="zprava" rows="6" cols="50" placeholder="Napište sem svůj text..." require></textarea><br><br>

<button type="submit">Odeslat</button>
    </form>
    </div>
</main>

<footer>
 <?php include 'footer.php'?>
</footer>
</body>
</html>