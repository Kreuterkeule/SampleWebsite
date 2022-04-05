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
    <!-- navbar end -->
  <div id="attributeInnerChange" class="bar">
    <div id="meal1" class="meal">
      <div class="meal-text">
        <?php
          if ($_GET['lang'] == 'eng') {
            echo "<h1 class='meal-name'>Heading</h1>";
          } else if ($_GET['lang'] == 'de') {
            echo "<h1 class='meal-name'>Ueberschrift</h1>";
          }
         ?>
      <?php
        if ($_GET['lang'] == 'eng') {
          echo "<p>sample text</p>";
        } else if ($_GET['lang'] == 'de') {
          echo "<p>text zum austauschen</p>";
        }
       ?>
     </div>
      <div class="attributes">
        <span class="attribute"><img title="Vegan" src='../img/vegan.png'></span>
        <span class="attribute"><img title="Glutenfree" src='../img/gluteenfree.png'></span>
        <span class="attribute"><img title="Low Carb" src='../img/LowCarb.png'></span>
        <span class="attribute"><img title="Locally produced Ingredience" src='../img/local.png'></span>
        <span class="attribute"><img title="Hormon free" src='../img/hormonfree.png'></span>
      </div>
    </div>
    <div id="meal2" class="secondary-meal meal">
      <div class="meal-text">

      <?php
        if ($_GET['lang'] == 'eng') {
          echo "<h1 class='meal-name'>Heading</h1>";
        } else if ($_GET['lang'] == 'de') {
          echo "<h1 class='meal-name'>Ueberschrift</h1>";
        }
       ?>
       <?php
         if ($_GET['lang'] == 'eng') {
           echo "<p>sample text</p>";
         } else if ($_GET['lang'] == 'de') {
           echo "<p>text zum austauschen</p>";
         }
        ?>
     </div>
       <div class="meal-img">
         <img src="../img/food.jpg" alt="">
       </div>
      <div class="attributes">
        <span class="attribute"><img title="Locally produced Ingredience" src='../img/local.png'></span>
        <span class="attribute"><img title="Hormon free" src='../img/hormonfree.png'></span>
      </div>
    </div>
  </div>



  <footer> <p>Moritz Siefke (C) 2022</p> </footer>
  <script src="../scripts/meal.js"></script>
  </body>
</html>
