<?php
  session_start();
  require_once('funkce.php');
  if (!isset($_SESSION['email'])) {
    neprihlasen();
  }
  $email_uzivatele=$_POST['email'];
?>

<!DOCTYPE html>
<html>
<head lang="cs">
    <meta charset="UTF-8">
    
    <title>Kreatinek</title>
    <link rel="shortcut icon" href="grafika/loga/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>

<div class="obsah">
<div class="hlavicka">
    <div style="text-align: left;padding-top: 0%; padding-left: 1%;position: absolute;">
        <a href="index.php" style="text-decoration: none"><img src="grafika/loga/kreatinek.png" alt="" width="10%" height="10%">
        <img src="grafika/loga/logo.png" alt="" width="4%" height="4%"></a>
      </div>
        <p style="text-align: center;font-size: 20px;font-family: 'psychofont';">!Tento web není oficiální web časopisu Logos Polytechnikos!</p>   
  </div>
  <div class="telo">
      <?php
        $role=get_item($email_uzivatele,'role');
        if ($role=='autor') {
          vypis_karta_autor($email_uzivatele);
        }
        else if ($role=='recenzent') {
          vypis_karta_recenzent($email_uzivatele);
        }
        else if ($role=='redaktor') {
          vypis_karta_redaktor($email_uzivatele);
        }
        else if ($role=='sefredaktor') {
          vypis_karta_sefredaktor($email_uzivatele);
        }
        else if ($role=='admin') {
          vypis_karta_admin($email_uzivatele);
        }
      ?>
  </div>
  
</div>
 <div class="footer">
  <button onclick="history.back()" id="img_zpet" class="img_tlacitka_zpet btn_odeslat_form"></button>
</div>

<body>
   
</body>
</html>