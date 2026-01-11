<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
     <link rel="icon" href="Pictures/favicon.png">
    <title>Komunita Studenti SPŠT - Kontakt</title>
    <style>
        .odkazy {
            color: white;
        }
.card_odkaz
{
    color: white;
    text-decoration: none;
}
.card_odkaz:hover {
  text-decoration: none;
}
        </style>
</head>
<body>
    <header>
        <?php include 'header.php'?>
    </header>
 <?php if(!empty($hlaska)) echo $hlaska; ?>
   <script>
setTimeout(() => {
    const msg = document.querySelector('.success');
    if(msg) msg.style.display = 'none';
}, 5000); // zmizí po 5 sekundách
</script>
    <main>
<div class="container">
    

<h1> 
Kontakty    
</h1>
<br>
    <div class="card-container">
        <a class="card_odkaz" href="mailto:senat@spst.eu">
        <article name="email">
        <h3>Email<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=tXMRLtbq3oq6&format=png&color=000000" alt="Obálka" width="200" height="200">
                <figcaption>
                    <a href="mailto:senat@spst.eu" class="odkazy">senat@spst.eu</a>
    </figcaption>
    </figure>
    </article>
</a>
 <a class="card_odkaz" href="https://www.instagram.com/studenti_spst">
    <article name="IG">
        <h3>Instagram<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=nj0Uj45LGUYh&format=png&color=000000" alt="Logo Instagram" width="200" height="200">
                <figcaption>
                    <a href="https://www.instagram.com/studenti_spst" class="odkazy">instagram.com/studenti_spst</a>
    </figcaption>
    </figure>
    </article>
</a>
 <a class="card_odkaz" href="">
<article name="FB">
        <h3>Facebook<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=uLWV5A9vXIPu&format=png&color=000000" alt="Logo Facebook" width="200" height="200">
                <figcaption>
                    <a href="" class="odkazy">facebook.com/doplnit</a>
    </figcaption>
    </figure>
    </article>
</a>
 <a class="card_odkaz" href="">
    <article name="YT">
        <h3>Youtube<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=9a46bTk3awwI&format=png&color=000000" alt="Logo Youtube" width="200" height="200">
                <figcaption>
                    <a href="" class="odkazy">youtube.com/doplnit</a>
    </figcaption>
    </figure>
    </article>
</a>
</div>
    <br>
  <h2>Napište nám!</h2><br>
  <p>Chcete li nás kontaktovat rovnou, můžete využít formulář níže. Pokud nám chcete poslat váš návrh, využijte prosím formulář na stánce <a href="/ideas">Návrhy.</a></p>
  <form class="form" method="post" action="">

    <label for="fname">Jméno a příjmení<label><span id="fname-desc"> (Uveďte celé jméno.) *</span><br>
       <input id="fname" name="fullname" type="text" required placeholder="Jan Novák" aria-describedby="fname-desc"><br><br><br>
      

       <label for="email">Školní E-mail *</label><br>
<input id="email" name="email" type="email" required placeholder="jmeno@spst.eu"><br><br><br>

<label for="subject">Předmět *</label><br>
<input id="subject" name="subject" type="text" required placeholder="Dotaz..."><br><br><br>

<label for="fmessage">Zpráva *</label><br>
 <textarea id="fmessage" name="zprava" rows="6" cols="50" placeholder="Napište sem svůj text..." require></textarea><br><br>

<button type="submit">Odeslat</button>
    </form>
    </div>
</p>
    </div>
</main>

<footer>
 <?php include 'footer.php'?>
</footer>
</body>
</html>