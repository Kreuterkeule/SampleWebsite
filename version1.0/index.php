<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Food</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>

    <?php
    $lang = 'de';
    if ($_GET['lang']=='de') {
      echo "
      <div class='navbar'>
        <a href='./index.php?lang=$lang'>Home</a>
        <a href='./sites/order.php?lang=$lang'>Bestellen</a>
        <a href='./sites/lunch.php?lang=$lang'>Mittagstisch</a>
        <a href='./sites/dessert.php?lang=$lang'>Nachtisch</a>
        <a href='./sites/legal.php?lang=$lang'>Impressum</a>
        <a href='?lang=eng'>Change Language to English</a>
      </div>
      ";
    }
    if ($_GET['lang']=='eng') {
      echo "
      <div class='navbar'>
        <a href='./index.php?lang=$lang'>Home</a>
        <a href='./sites/order.php?lang=$lang'>Order</a>
        <a href='./sites/lunch.php?lang=$lang'>Lunch</a>
        <a href='./sites/dessert.php?lang=$lang'>Dessert</a>
        <a href='./sites/legal.php?lang=$lang'>Legal</a>
        <a href='?lang=de'>Sprache zu Deutsch aendern</a>
      </div>
      ";
    }
    ?>
    <div class="bar">
      <!-- FIRST BOX OPTION -->
      <?php
      if ($_GET['lang'] == 'eng') {
        echo "<a href='./sites/lunch.php?lang=eng#meal0'><div class='element'>";
      } else if ($_GET['lang'] == 'de') {
        echo "<a href='./sites/lunch.php?lang=de#meal0'><div class='element'>";
      }
       ?>
        <img src="img/food.jpg" alt="">
        <?php
          if ($_GET['lang'] == 'eng') {
            echo "<p>Experience our delicious meals</p>";
          } else {
            echo "<p>Deutscher Text dann hier.</p>";
          }
         ?>
      </div>
      <!-- SECOND BOX OPTION -->
      </a>
      <?php
      if ($_GET['lang'] == 'eng') {
        echo "<a href='./sites/lunch.php?lang=eng#meal1'><div class='element element-secondary'>";
      } else if ($_GET['lang'] == 'de') {
        echo "<a href='./sites/lunch.php?lang=de#meal1'><div class='element element-secondary'>";
      }
       ?>
        <?php
          if ($_GET['lang'] == 'eng') {
            echo "<p>Experience our delicious meals</p>";
          } else if ($_GET['lang'] == 'de') {
            echo "<p>Deutscher Text dann hier.</p>";
          }
         ?>
        <img src="img/food.jpg" alt="">
      </div>
      </a>
    </div>
    <footer> <p>Moritz Siefke (C) 2022</p> </footer>
  </body>
</html>
