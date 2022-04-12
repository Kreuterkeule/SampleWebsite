<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Food</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/meal.css">
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
    <!-- navbar end -->
  <div id="attributeInnerChange" class="bar">
    <div id="meal1" class="meal">
      <div class="meal-text">
        <?php
          if ($lang == 'eng') {
            echo "<h1 class='meal-name'>Healthy Peanutbutter Banana Muffins</h1>";
          } else if ($lang == 'de') {
            echo "<h1 class='meal-name'>Gesunde Erdnussbutter Bananen Muffins</h1>";
          }
         ?>
      <?php
        if ($lang == 'eng') {
          echo "<p>Such an dessert you probably never tryed. <br>It relly is quite healthy. <br>Did you know that peanuts are a very great delivery of omega 3 fatty acids? <br>That's actually true and these fats are great for our Body.</p>";
        } else if ($lang == 'de') {
          echo "<p>So einen Nachtisch hast du warscheinlich noch nie Probiert. <br>Er ist wirklich gesund. <br>Wusstest du das Erdnüsse sehr gute omega 3 Fettsäurelieferanten sind? <br>Es ist wirklich wahr und diese Fettsäuren sind sehr gut für unseren Körper.</p>";
        }
       ?>
     </div>
     <div class="meal-img">
       <img src="../img/Healthy-Peanut-Butter-Banana-Muffins.jpg">
     </div>
      <div class="attributes">
        <span class="attribute"><img title="Vegan" src='../img/vegan.png'></span>
        <span class="attribute"><img title="Low Carb" src='../img/LowCarb.png'></span>
      </div>
    </div>
    <div id="meal2" class="secondary-meal meal">
      <div class="meal-text">

      <?php
        if ($lang == 'eng') {
          echo "<h1 class='meal-name'>Green Smoothie with avocado.</h1>";
        } else if ($lang == 'de') {
          echo "<h1 class='meal-name'>Grüner Smoothie mit Avocado</h1>";
        }
       ?>
       <?php
         if ($lang == 'eng') {
           echo "<p>Smoothie, not quite a new Idea, but with avocado it's real great. <br>Many people say Smoothies are no alternative, but after this creation many opinions will change.</p>";
         } else if ($lang == 'de') {
           echo "<p>Smootie, keine wirklich neue Idee, aber mit Avocado ist es wirklich gut. <br>Viele sagen Smoothies sind keine Option, doch nach dieser Kreation werden sich sicherlich einige Meinungen ändern.</p>";
         }
        ?>
        <div class="meal-img">
          <img src="../img/Matcha-Collagen-Green-Smoothie.jpg" alt="">
     </div>
       </div>
      <div class="attributes">
        <span class="attribute"><img title="Vegan" src='../img/vegan.png'></span>
        <span class="attribute"><img title="Hormon free" src='../img/hormonfree.png'></span>

      </div>
    </div>
    <div id="meal3" class="meal">
      <div class="meal-text">
        <?php
          if ($lang == 'eng') {
            echo "<h1 class='meal-name'>Not baked cranberry-orange breakfast cookies</h1>";
          } else if ($lang == 'de') {
            echo "<h1 class='meal-name'>Nicht gebackener Cranberry-Orange Frühstückskeks</h1>";
          }
         ?>
      <?php
        if ($lang == 'eng') {
          echo "<p>These are real basic cookies, but there is a small twist... <br>they're healthy! Don't mind to trying this this cookies they're great.</p>";
        } else if ($lang == 'de') {
          echo "<p>Wirklich normale Kekse, aber da ist eine kleine Besonderheit... <br>sie sind Gesund! Probiert sie mal, bei uns.</p>";
        }
       ?>
     </div>
     <div class="meal-img">
       <img src="../img/No-Bake-Cranberry-Orange-Breakfast-Cookies.jpg">
     </div>
     <div class="attributes">
        <span class="attribute"><img title="Vegan" src='../img/vegan.png'></span>
        <span class="attribute"><img title="Glutenfree" src='../img/gluteenfree.png'></span>
        <span class="attribute"><img title="Low Carb" src='../img/LowCarb.png'></span>
      </div>
    </div>
    <div id="meal4" class="secondary-meal meal">
      <div class="meal-text">

      <?php
        if ($lang == 'eng') {
          echo "<h1 class='meal-name'>Glutenfree chocolate chip cookies</h1>";
        } else if ($lang == 'de') {
          echo "<h1 class='meal-name'>Glutenfreie Schokoladenkekse</h1>";
        }
       ?>
       <?php
         if ($lang == 'eng') {
           echo "<p>Also for our gluten intolerant people there are some cookies to eat. <br>For me these even are the best we have to offer. <br>Glutenfree food is realy healty too because to much of gluten will make your stomache hurt.</p>";
         } else if ($lang == 'de') {
           echo "<p>Auch für glutenintolerante Kunden haben wir Kekse zum essen. <br>Für mich sind es die besten Kekse aus unseren Angebot. <br>Glutenfreies Essen ist wirklich gesund, zu gluten wird dir Bauchschmerzen bringen.</p>";
         }
        ?>
     </div>
       <div class="meal-img">
         <img src="../img/Healthy-Gluten-Free-Chocolate-Chip-Cookies.webp" alt="">
       </div>
      <div class="attributes">
        <span class="attribute"><img title="Glutenfree" src='../img/gluteenfree.png'></span>
        <span class="attribute"><img title="Hormon free" src='../img/hormonfree.png'></span>
        <span class="attribute"><img title="Vegan" src='../img/vegan.png'></span>
      </div>
    </div>
  </div>



  <footer> <p>Moritz Siefke (C) 2022</p> </footer>
  <script src="../scripts/meal.js"></script>
  </body>
</html>
