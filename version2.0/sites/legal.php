<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Food</title>
    <link rel="stylesheet" href="../css/legal.css">
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body>
    <?php
    $lang = $_GET['lang'];
//    if ($_GET['lang'] == 'de') {
//      $lang = 'de';
//    }    if ($_GET['lang'] == 'eng') {
//      $lang = 'eng';
//    }
    if (!isset($lang)) {
//      echo "Oops the \$_GET variable language isn't set. <a href='?lang=eng'>Set it to default(englisch) now...</a>";
      $lang = 'eng';
    }
    if ($lang=='de') {
      echo "
        <div class='navbar'>
          <a href='../index.php?lang=$lang'>Home</a>
          <a href='../sites/lunch.php?lang=$lang'>Mittagstisch</a>
          <a href='../sites/dessert.php?lang=$lang'>Nachtisch</a>
          <a href='../sites/contact.php?lang=$lang'>Kontakt</a>
          <a href='../sites/legal.php?lang=$lang'>Impressum</a>
          <a href='?lang=eng'>Change Language to English</a>
        </div>
      ";
    }
    if ($lang=='eng') {
      echo "
        <div class='navbar'>
          <a href='../index.php?lang=$lang'>Home</a>
          <a href='../sites/lunch.php?lang=$lang'>Lunch</a>
          <a href='../sites/dessert.php?lang=$lang'>Dessert</a>
          <a href='../sites/contact.php?lang=$lang'>Contact</a>
          <a href='../sites/legal.php?lang=$lang'>Legal</a>
          <a href='?lang=de'>Sprache zu Deutsch aendern</a>
        </div>
      ";
    }
    ?>
    <div class="padding-box">

    </div>
    <div class="legal-content">
      <h1>Legal - For clearency only english.</h1>
      <p>Sources are at <a href="../legal/sources.txt">/legal/sources.txt</a></p>
      <p><a href="../README.md">official projekt md file</a></p>
    </div>
    <div class="legal-content higher-legal-content">
      <div class="iconExpression">
        <h1>Vegan</h1>
        <img src="../img/vegan.png">
        <h1>Localy sourced</h1>
        <img src="../img/local.png">
        <h1>Low Carb</h1>
        <img src="../img/LowCarb.png">
        <h1>Gluten free</h1>
        <img src="../img/gluteenfree.png">
        <h1>Hormone free</h1>
        <img src="../img/hormonfree.png">
      </div>
    </div>
    <footer> <p>Moritz Siefke (C) 2022</p> </footer>
  </body>
</html>
