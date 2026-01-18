<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="Pictures/favicon.png">
     <link rel="stylesheet" type="text/css" href="CSS/Style.css">
      <link rel="stylesheet" type="text/css" href="pages/administace/CSS/style.css">
    <title>Studenti SPŠT - Administrace</title>
    <style> 
    form input[type="password"]{
  background-color: #e0e0e0;   
  border: none;                
  border-radius: 8px;          
  padding: 10px;
  font-size: 1rem;
  width: 100%;
  box-sizing: border-box;
}
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
    <h1>Správa uživatele: <?php echo $user; ?> </h1>
    <form>
<h2>Uživatelské jméno</h2>
<input id="name" name="name" type="text" required value="<?php echo $user; ?>">
</form>

<form id="registerForm" method="post" action="/forget">
<h2>Změnit Heslo</h2>
<input hidden id="name" name="name" type="text" required value="<?php echo $user; ?>">
<label for="npas">Nové heslo</label>
    <input id="npass" name="npas" type="password" required placeholder="Zadejte vaše nové heslo">

    <label for="fpass">Zopakujte nové heslo</label>
<input id="fpass" name="npas2" type="password" required placeholder="Zopakujte vaše nové heslo">

<button type="submit">Změnit heslo</button>
</form>
 <?php if($shoda !==1):?>
<form method="post" action="/change-role">
    <h2>Role</h2>
    <input id="name" name="name" type="text" required value="<?php echo $user; ?>">
<?php if ($user_role === 1): ?>
  <span>  <input type="radio" id="normal" name="role" value="1" checked>
    <label for="normal">Normální uživatel</label></span>
   <span> <input type="radio" id="admin" name="role" value="2">
    <label for="admin">Administrátor</label></span>
   
<?php else: ?>
   <span> <input type="radio" id="normal" name="role" value="1"> 
    <label for="normal"> Normální uživatel</label></span>
   <span> <input type="radio" id="admin" name="role" value="2" checked>
    <label for="admin">Administrátor</label></span>
    
<?php endif; ?>
<button type="submit">Změnit roli</button>
</form>
<?php endif; ?>
<div class=card-container>
    <?php if($shoda !==1):?>
 <a href="/deluser?user=<?php echo $user; ?>"> 
        <article name="smazat-uzivatele">
        <h3>odstranit uživatele<h3>
            <figure>
                <img src="https://img.icons8.com/?size=100&id=7837&format=png&color=FA5252" alt="Popelnice" width="200" height="200">
                
    </figure>
    </article>
</a>
<?php endif; ?>
<a href="/users"> 
        <article name="zpet">
        <h3>Zpět na seznam uživatelů<h3>
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
<script>
document.getElementById('registerForm').addEventListener('submit', function(e){
    var password = document.getElementById('npass').value;
    var confirmPassword = document.getElementById('fpass').value;

    if(password !== confirmPassword){
        e.preventDefault();
        alert("Hesla se neschodují!");
    }
});
</script>
</body>
</html>