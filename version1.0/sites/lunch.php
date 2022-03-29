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
          <a href='../sites/order.php?lang=$lang'>Bestellen</a>
          <a href='../sites/lunch.php?lang=$lang'>Mittagstisch</a>
          <a href='../sites/dessert.php?lang=$lang'>Nachtisch</a>
          <a href='../sites/legal.php?lang=$lang'>Impressum</a>
          <a href='?lang=eng'>Change Language to English</a>
        </div>
      ";
    }
    if ($_GET['lang']=='eng') {
      echo "
        <div class='navbar'>
          <a href='../index.php?lang=$lang'>Home</a>
          <a href='../sites/order.php?lang=$lang'>Order</a>
          <a href='../sites/lunch.php?lang=$lang'>Lunch</a>
          <a href='../sites/dessert.php?lang=$lang'>Dessert</a>
          <a href='../sites/legal.php?lang=$lang'>Legal</a>
          <a href='?lang=de'>Sprache zu Deutsch aendern</a>
        </div>
      ";
    }
    ?>
    <!-- navbar end -->
  <div id="attributeInnerChange" class="bar">
    <div id="meal1" class="meal">
      <h1 class="meal-name">Spaghetti</h1>
      <div class="attributes">
        <span id="lowcarb" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
        <span id="vegan" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
        <span id="glutenfree" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
        <span id="local" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
        <span id="hormonfree" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
      </div>
    </div>
    <div id="meal2" class="meal">
      <h1 class="meal-name">Spaghetti</h1>
      <div class="attributes">
        <span id="lowcarb" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
        <span id="vegan" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
        <span id="glutenfree" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
        <span id="local" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
        <span id="hormonfree" class="attribute">default string replacer -- if you see this the java script could not be loaded</span>
      </div>
    </div>
  </div>




  <script src="../scripts/meal.js"></script>
  </body>
</html>
