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
            echo "<h1 class='meal-name'>Heading</h1>";
          } else if ($lang == 'de') {
            echo "<h1 class='meal-name'>Ueberschrift</h1>";
          }
         ?>
      <?php
        if ($lang == 'eng') {
          echo "<p>sample text</p>";
        } else if ($lang == 'de') {
          echo "<p>text zum austauschen</p>";
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
          echo "<h1 class='meal-name'>Heading</h1>";
        } else if ($lang == 'de') {
          echo "<h1 class='meal-name'>Ueberschrift</h1>";
        }
       ?>
       <?php
         if ($lang == 'eng') {
           echo "<p>sample text</p>";
         } else if ($lang == 'de') {
           echo "<p>text zum austauschen</p>";
         }
        ?>
     </div>
       <div class="meal-img">
         <img src="../img/Matcha-Collagen-Green-Smoothie.jpg" alt="">
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
            echo "<h1 class='meal-name'>Heading</h1>";
          } else if ($lang == 'de') {
            echo "<h1 class='meal-name'>Ueberschrift</h1>";
          }
         ?>
      <?php
        if ($lang == 'eng') {
          echo "<p>sample text</p>";
        } else if ($lang == 'de') {
          echo "<p>text zum austauschen</p>";
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
          echo "<h1 class='meal-name'>Heading</h1>";
        } else if ($lang == 'de') {
          echo "<h1 class='meal-name'>Ueberschrift</h1>";
        }
       ?>
       <?php
         if ($lang == 'eng') {
           echo "<p>sample text</p>";
         } else if ($lang == 'de') {
           echo "<p>text zum austauschen</p>";
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
