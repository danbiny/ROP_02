<?php

declare(strict_types=1);
require_once 'flight/Flight.php';
require 'flight/autoload.php';
Flight::register('db', 'PDO', array(
    'mysql:host=localhost;dbname=rop;charset=utf8mb4', 
    'rop', 
    '987Rop_M@t987',   
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    )
));

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

  


Flight::route('/', function () {
   $db = Flight::db();
   
    $stmt = $db->query("SELECT ID, title, picture, date FROM articles WHERE state = 2");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

     require_once 'pages/home.php';
});
Flight::route('/narticle', function () {
     if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
     require_once 'pages/administace/narticle.php';
});
Flight::route('/delart', function () {
$db = Flight::db();
   if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    
$bool = $_POST['bool'];
$id = $_POST['name'];
if($bool === "1")
{
$stmt = $db->prepare("DELETE FROM articles WHERE id = ?");
        $stmt->execute([$id]);

        header("Location: /articles");
        exit;
}
else{
header("Location: /articles");
     exit;
}
     
});
flight::route('/darticle', function () {
     if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    $id = $_GET['id'];
     require_once 'pages/administace/darticle.php';
});
Flight::route('/earticle', function () {
    $db = Flight::db();
     if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
$id=$_GET['id'];
$stmt = $db->prepare("SELECT * FROM articles WHERE id = ?");
    $stmt->execute([$id]);
    $article = $stmt->fetch(PDO::FETCH_ASSOC);
     require_once 'pages/administace/earticle.php';
});
Flight::route('/addarticle', function () {
       $db = Flight::db();
    if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    $nazev = $_POST['title'];
    $obrazek = $_POST['obrazek'];
    $text = $_POST['obsah'];
    $state = $_POST['stav'];
    $date = $_POST['date'];
$stmt = $db->prepare("
        INSERT INTO articles (title, picture, text, state, date)
        VALUES (?, ?, ?, ?,?)
    ");
    $stmt->execute([$nazev, $obrazek, $text, $state, $date]);

    header("Location: /articles");
    exit;

});
Flight::route('/sarticle', function () {
       $db = Flight::db();
    if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    $id = $_POST['id'];
    $nazev = $_POST['title'];
    $obrazek = $_POST['obrazek'];
    $text = $_POST['obsah'];
    $state = $_POST['stav'];
    $date = $_POST['date'];
$stmt = $db->prepare("
    UPDATE articles 
    SET title = ?, picture = ?, text = ?, state = ?, date = ?
    WHERE id = ?
");
$stmt->execute([$nazev, $obrazek, $text, $state, $date, $id]);
    header("Location: /articles");
    exit;

});

Flight::route('/contact', function () {
    $hlaska = "<p></p>";

 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['fullname'] ?? '';
        $email = $_POST['email'] ?? '';
        $zprava = $_POST['zprava'] ?? '';
        $subject = $_POST['subject'] ?? '';
        if ($fullname && $email && $zprava) {
            
            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.seznam.cz';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'studenti@gagym.cz';
                $mail->Password   = '269Rop269';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
                $mail->Port       = 587; 
                $mail->CharSet    = 'UTF-8';

                $mail->setFrom('studenti@gagym.cz', 'Nový Dotaz');
                $mail->addAddress('d.binar@gagym.uk', 'Administrátor');
                $mail->addReplyTo($email, $fullname);

                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body    = "<b>Odesílatel:</b> {$fullname} ({$email})<br><br><b>Zpráva:</b><br>" . nl2br(htmlspecialchars($zprava));
                $mail->AltBody = "Odesílatel: {$fullname} ({$email})\n\nZpráva:\n{$zprava}";

                $mail->send();
                $hlaska = '<p class="success">Zpráva byla úspěšně odeslána.</p>';
            } catch (Exception $e) {
                $hlaska = '<p class="error">E-mail se nepodařilo odeslat. Chyba: ' . htmlspecialchars($mail->ErrorInfo) . '</p>';
            }
        }
    }

    require_once 'pages/contact.php';
});

Flight::route('/admini', function () {
      $db = Flight::db();
    if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    $username = $_COOKIE['username'];
    $stmt = $db->prepare("SELECT role FROM users WHERE name = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$user){
        
        header("Location: /login");
        exit;
    }
    $role = $user['role'];
    require_once 'pages/admini.php';
});

Flight::route('/ideas', function () {
     $hlaska = "<p></p>";

 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['fullname'] ?? '';
        $email = $_POST['email'] ?? '';
        $zprava = $_POST['zprava'] ?? '';

        if ($fullname && $email && $zprava) {
            
            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.seznam.cz';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'studenti@gagym.cz';
                $mail->Password   = '269Rop269';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
                $mail->Port       = 587; 
                $mail->CharSet    = 'UTF-8';

                $mail->setFrom('studenti@gagym.cz', 'Nový návrh');
                $mail->addAddress('d.binar@gagym.uk', 'Administrátor');
                $mail->addReplyTo($email, $fullname);

                $mail->isHTML(true);
                $mail->Subject = 'Nový návrh';
                $mail->Body    = "<b>Odesílatel:</b> {$fullname} ({$email})<br><br><b>Zpráva:</b><br>" . nl2br(htmlspecialchars($zprava));
                $mail->AltBody = "Odesílatel: {$fullname} ({$email})\n\nZpráva:\n{$zprava}";

                $mail->send();
                $hlaska = '<p class="success">Zpráva byla úspěšně odeslána.</p>';
            } catch (Exception $e) {
                $hlaska = '<p class="error">E-mail se nepodařilo odeslat. Chyba: ' . htmlspecialchars($mail->ErrorInfo) . '</p>';
            }
        }
    }

    
    
   require_once 'pages/ideas.php';
});

Flight::route('/article', function () {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if ($id > 0) {
        $db = Flight::db();
        $stmt = $db->prepare("SELECT * FROM articles WHERE ID = :id AND state = 2");
        $stmt->execute(['id' => $id]);
        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($article) {
            
             require_once 'pages/article.php';
        } else {
            Flight::redirect('/');
        }
    } else {
        
        Flight::redirect('/');
    }
});
Flight::route('/aboutus', function () {
      $db = Flight::db();
$stmt = $db->query("SELECT * FROM Vedeni");
$vedeni = $stmt->fetchAll(PDO::FETCH_ASSOC);

$data = [];
foreach($vedeni as $o){
    $data[$o['funkce']] = $o;
}
// získání textu o nás
$stmt = $db->prepare("SELECT TEXT FROM Others WHERE ID = ?");
$stmt->execute([1]);
$text = $stmt->fetchColumn();
     require_once 'pages/aboutus.php';
});
Flight::route('/login', function () {
     require_once 'pages/login.php';
});
Flight::route('/articles', function () {
      $db = Flight::db();
    if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    $stmt = $db->query("SELECT ID, title, state FROM articles");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
     require_once 'pages/administace/articles.php';
});
Flight::route('/users', function () {
$db = Flight::db();
   if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    $username = $_COOKIE['username'];
    $stmt = $db->prepare("SELECT role FROM users WHERE name = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$user){
        
        header("Location: /login");
        exit;
    }
    $role = $user['role'];
if($role === 1)
{
     header("Location: /admini");
     exit;
}
$stmt = $db->query("SELECT name FROM users");
$usernames = $stmt->fetchAll(PDO::FETCH_COLUMN);
     require_once 'pages/administace/users.php';
});

Flight::route('/euser', function () {
$db = Flight::db();
   if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    $username = $_COOKIE['username'];
    $stmt = $db->prepare("SELECT role FROM users WHERE name = ?");
    $stmt->execute([$username]);
    $userr = $stmt->fetch(PDO::FETCH_ASSOC);
    $role = $userr['role'];
    if($role === 1)
{
     header("Location: /admini");
     exit;
}
    $user =  $_GET['user'];
    $stmt = $db->prepare("SELECT role FROM users WHERE name = ?");
    $stmt->execute([$user]);
    $userr = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_role = $userr['role'];
$shoda = 0;
if($username === $user)
{
    $shoda = 1;
}

     require_once 'pages/administace/euser.php';
});
Flight::route('/aboutusSet', function () {
    $db = Flight::db();
    if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    $username = $_COOKIE['username'];
    $stmt = $db->prepare("SELECT role FROM users WHERE name = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $role = $user['role'];
    if($role === 1)
    {
     header("Location: /admini");
     exit;
    }
$stmt = $db->query("SELECT * FROM Vedeni");
$vedeni = $stmt->fetchAll(PDO::FETCH_ASSOC);


$data = [];
foreach($vedeni as $o){
    $data[$o['funkce']] = $o;
}

$stmt = $db->prepare("SELECT text FROM Others WHERE ID = ?");
$stmt->execute([1]);
$text = $stmt->fetchColumn();
     require_once 'pages/administace/aboutus.php';
});
Flight::route('/logout', function () {
    if(isset($_COOKIE['username'])){
    setcookie("username", "", time() - 3600, "/");
}
header("Location: /login");
exit;
});
Flight::route('/changepass', function () {
       $db = Flight::db();
     if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }
    $username = $_COOKIE['username'];

      require_once 'pages/administace/changepass.php';
});
Flight::route('/ulozit', function () {
    $db = Flight::db();
 if(!isset($_COOKIE['username'])){
        header("Location: /login");
        exit;
    }

$funkce = $_POST['funkce'];
$jmeno = $_POST['fullname'];
$email = $_POST['email'];
$foto = $_POST['picture'];
$trida = $_POST['subject'];
$bio = $_POST['Kbio'] ?? '';

