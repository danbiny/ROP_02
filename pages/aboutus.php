<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
     <link rel="icon" href="Pictures/favicon.png">
    <title>Komunita Studenti SPŠT - O nás</title>
</head>
<body>
    <header>
        <?php include 'header.php'?>
    </header>
    

    <main>
<div class="container">
<h1>O Nás</h1>
<p><?php echo nl2br(htmlspecialchars($text)); ?></p>

<div class="card-container">
<article>
 <h3>Předseda</h3>
      <figure>
        <img src="<?php echo htmlspecialchars($data['Predseda']['foto'] ?? ''); ?>" alt="Předseda" width="200" height="200">
        <figcaption>
          <strong ><?php echo htmlspecialchars($data['Predseda']['jmeno'] ?? ''); ?></strong>
        </figcaption>
      </figure>
      
       <p>Třída: <?php echo htmlspecialchars($data['Predseda']['trida'] ?? ''); ?></p>
      <p>Email: <a href="mailto:<?php echo htmlspecialchars($data['Predseda']['email'] ?? ''); ?>"><?php echo htmlspecialchars($data['Predseda']['email'] ?? ''); ?></a>
      <p>Krátké bio: <?php echo htmlspecialchars($data['Predseda']['bio'] ?? ''); ?></p>
</article>
<article>
 <h3>Místopředseda</h3>
      <figure>
        <img src="<?php echo htmlspecialchars($data['Mistopredseda']['foto'] ?? ''); ?>" alt="Místopředseda" width="200" height="200">
        <figcaption>
          <strong ><?php echo htmlspecialchars($data['Mistopredseda']['jmeno'] ?? ''); ?></strong>
        </figcaption>
      </figure>
      
       <p>Třída: <?php echo htmlspecialchars($data['Mistopredseda']['trida'] ?? ''); ?></p>
      <p>Email: <a href="mailto:<?php echo htmlspecialchars($data['Mistopredseda']['email'] ?? ''); ?>"><?php echo htmlspecialchars($data['Mistopredseda']['email'] ?? ''); ?></a>
      <p>Krátké bio: <?php echo htmlspecialchars($data['Mistopredseda']['bio'] ?? ''); ?></p>
</article>
<article>
 <h3>Koordinátorka</h3>
      <figure>
        <img src="<?php echo htmlspecialchars($data['Koordinator']['foto'] ?? ''); ?>" alt="Koordinátorka" width="200" height="200">
        <figcaption>
          <strong ><?php echo htmlspecialchars($data['Koordinator']['jmeno'] ?? ''); ?></strong>
        </figcaption>
      </figure>
     
      <p>Kabinet: <?php echo htmlspecialchars($data['Koordinator']['trida'] ?? ''); ?></p>
      <p>Email: <a href="mailto:<?php echo htmlspecialchars($data['Koordinator']['email'] ?? ''); ?>"><?php echo htmlspecialchars($data['Koordinator']['email'] ?? ''); ?></a>
       <p>Krátké bio: <?php echo htmlspecialchars($data['Koordinator']['bio'] ?? ''); ?></p>
</article>

</div>
</div>
</main>

<footer>
 <?php include 'footer.php'?>
</footer>
</body>
</html>