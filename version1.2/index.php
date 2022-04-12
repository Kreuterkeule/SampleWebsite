<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Food</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <?php
    if (!isset($_GET['lang'])) {
      echo "Oops the language isn't set. <a href='?lang=eng'>Set it to default(englisch) now...</a>";
    }
     ?>
    <?php
    $lang = 'de';
    if ($_GET['lang']=='de') {
      echo "
      <div class='navbar'>
        <a href='./index.php?lang=$lang'>Home</a>
        <a href='./sites/lunch.php?lang=$lang'>Mittagstisch</a>
        <a href='./sites/dessert.php?lang=$lang'>Nachtisch</a>
        <a href='./sites/contact.php?lang=$lang'>Kontakt</a>
        <a href='./sites/legal.php?lang=$lang'>Impressum</a>
        <a href='?lang=eng'>Change Language to English</a>
      </div>
      ";
    }
    if ($_GET['lang']=='eng') {
      echo "
      <div class='navbar'>
        <a href='./index.php?lang=$lang'>Home</a>
        <a href='./sites/lunch.php?lang=$lang'>Lunch</a>
        <a href='./sites/dessert.php?lang=$lang'>Dessert</a>
        <a href='./sites/contact.php?lang=$lang'>Contact</a>
        <a href='./sites/legal.php?lang=$lang'>Legal</a>
        <a href='?lang=de'>Sprache zu Deutsch aendern</a>
      </div>
      ";
    }
    ?>
    <div class="bar">
      <!-- SECOND BOX OPTION -->
      <?php
      if ($_GET['lang'] == 'eng') {
        echo "<a href='#'><div id='health-disclaimer' class='element'>";
      } else if ($_GET['lang'] == 'de') {
        echo "<a href='#'><div id='health-disclaimer' class='element'>";
      }
       ?>
       <?php
         if ($_GET['lang'] == 'eng') {
           echo "<p>Because we care about our customers health, every meal has official health attributes.</p>";
         } else {
           echo "<p>Weil wir wert auf die Gesundheit unserer Kunden legen, hat jedes unserer Gerichte offizielle Gesundheitskenzeichen.</p>";
         }
        ?>
      </div>
      </a>
      <!-- FIRST BOX OPTION -->
        <?php
        if ($_GET['lang'] == 'eng') {
          echo "<a href='#'><div class='element element-secondary specials'>";
        } else if ($_GET['lang'] == 'de') {
          echo "<a href='#'><div class='element element-secondary specials'>";
        }
         ?>
         <?php
           if ($_GET['lang'] == 'eng') {
             echo "<p>Our specialites</p>";
           } else {
             echo "<p>Unsere spezialitaeten</p>";
           }
          ?>
      </div>
      </a>
      <!-- FIRST BOX OPTION -->
      <?php
      if ($_GET['lang'] == 'eng') {
        echo "<a href='./sites/lunch.php?lang=eng#meal0'><div class='element'>";
      } else if ($_GET['lang'] == 'de') {
        echo "<a href='./sites/lunch.php?lang=de#meal0'><div class='element'>";
      }
       ?>
        <img loading="lazy" src="img/food.jpg" alt="">
        <?php
          if ($_GET['lang'] == 'eng') {
            echo "<p>sample text</p>";
          } else {
            echo "<p>text zum austauschen</p>";
          }
         ?>
      </div>
      </a>
      <!-- SECOND BOX OPTION -->
      <?php
      if ($_GET['lang'] == 'eng') {
        echo "<a href='./sites/lunch.php?lang=eng#meal1'><div class='element element-secondary'>";
      } else if ($_GET['lang'] == 'de') {
        echo "<a href='./sites/lunch.php?lang=de#meal1'><div class='element element-secondary'>";
      }
       ?>
       <?php
         if ($_GET['lang'] == 'eng') {
           echo "<p>sample text</p>";
         } else {
           echo "<p>text zum austauschen</p>";
         }
        ?>
        <img loading="lazy" src="img/food.jpg" alt="">
      </div>
      </a>
    </div>
    <footer> <p>Moritz Siefke (C) 2022</p> </footer>
  </body>
</html>