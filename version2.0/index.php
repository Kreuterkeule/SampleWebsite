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
        <a href='./index.php?lang=$lang'>Home</a>
        <a href='./sites/lunch.php?lang=$lang'>Mittagstisch</a>
        <a href='./sites/dessert.php?lang=$lang'>Nachtisch</a>
        <a href='./sites/contact.php?lang=$lang'>Kontakt</a>
        <a href='./sites/legal.php?lang=$lang'>Impressum</a>
        <a href='?lang=eng'>Change Language to English</a>
      </div>
      ";
    }
    if ($lang=='eng') {
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
      if ($lang == 'eng') {
        echo "<a href='#'><div id='health-disclaimer' class='element'>";
      } else if ($lang == 'de') {
        echo "<a href='#'><div id='health-disclaimer' class='element'>";
      }
       ?>
       <?php
         if ($lang == 'eng') {
           echo "<p>Because we care about our customers health, every meal has official health attributes.</p>";
         } else {
           echo "<p>Weil wir wert auf die Gesundheit unserer Kunden legen, hat jedes unserer Gerichte offizielle Gesundheitskenzeichen.</p>";
         }
        ?>
      </div>
      </a>
      <!-- FIRST BOX OPTION -->
        <?php
        if ($lang == 'eng') {
          echo "<a href='#'><div class='element element-secondary specials'>";
        } else if ($lang == 'de') {
          echo "<a href='#'><div class='element element-secondary specials'>";
        }
         ?>
         <?php
           if ($lang == 'eng') {
             echo "<p>Our specialites</p>";
           } else {
             echo "<p>Unsere spezialitaeten</p>";
           }
          ?>
      </div>
      </a>
      <!-- FIRST BOX OPTION -->
      <?php
      if ($lang == 'eng') {
        echo "<a href='./sites/lunch.php?lang=eng#meal0'><div class='element'>";
      } else if ($lang == 'de') {
        echo "<a href='./sites/lunch.php?lang=de#meal0'><div class='element'>";
      }
       ?>
        <img loading="lazy" src="img/green-tea-noodles-with-sticky-sweet-chilli-salmon.jpg">
        <?php
          if ($lang == 'eng') {
            echo "<p>Green tea noodles with sticky sweet chilli salmon<p>";
          } else {
            echo "<p>text zum austauschen</p>";
          }
         ?>
      </div>
      </a>
      <!-- SECOND BOX OPTION -->
      <?php
      if ($lang == 'eng') {
        echo "<a href='./sites/lunch.php?lang=eng#meal3'><div class='element element-secondary'>";
      } else if ($lang == 'de') {
        echo "<a href='./sites/lunch.php?lang=de#meal3'><div class='element element-secondary'>";
      }
       ?>
       <?php
         if ($lang == 'eng') {
           echo "<p>Silverbeet fatteh with sumac yoghurt and chickpeas</p>";
         } else {
           echo "<p>text zum austauschen</p>";
         }
        ?>
        <img loading="lazy" src="img/silverbeet-fatteh-with-sumac-yoghurt-and-chickpeas.jpg">
      </div>
      </a>
      <?php
      if ($lang == 'eng') {
        echo "<a href='./sites/dessert.php?lang=eng#meal1'><div class='element'>";
      } else if ($lang == 'de') {
        echo "<a href='./sites/dessert.php?lang=de#meal1'><div class='element'>";
      }
       ?>
        <img loading="lazy" src="img/Matcha-Collagen-Green-Smoothie.jpg" alt="">
        <?php
          if ($lang == 'eng') {
            echo "<p>Green smothie with avocado<p>";
          } else {
            echo "<p>text zum austauschen</p>";
          }
         ?>
      </div>
      </a>
      <?php
      if ($lang == 'eng') {
        echo "<a href='./sites/dessert.php?lang=eng#meal3'><div class='element element-secondary'>";
      } else if ($lang == 'de') {
        echo "<a href='./sites/dessert.php?lang=de#meal3'><div class='element element-secondary'>";
      }
       ?>
       <?php
         if ($lang == 'eng') {
           echo "<p>Healthy and Gluten free chocolate cookie</p>";
         } else {
           echo "<p>text zum austauschen</p>";
         }
        ?>
        <img loading="lazy" src="img/Healthy-Gluten-Free-Chocolate-Chip-Cookies.webp" alt="">
      </div>
      </a>
    </div>
    <footer> <p>Moritz Siefke (C) 2022</p> </footer>
  </body>
</html>
