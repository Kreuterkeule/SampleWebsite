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
    $lang = 'de';
    if ($_GET['lang']=='de') {
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
    if ($_GET['lang']=='eng') {
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
      <p>Sources are in <a href="../legal/sources.txt">/legal/sources.txt</a></p>
    </div>
    <footer> <p>Moritz Siefke (C) 2022</p> </footer>
  </body>
</html>
