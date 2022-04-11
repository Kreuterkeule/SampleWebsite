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
       <img src="../img/green-tea-noodles-with-sticky-sweet-chilli-salmon.jpg" alt="">
     </div>
      <div class="attributes">
        <span class="attribute"><img title="Glutenfree" src='../img/gluteenfree.png'></span>
        <span class="attribute"><img title="Low Carb" src='../img/LowCarb.png'></span>
        <span class="attribute"><img title="Locally produced Ingredience" src='../img/local.png'></span>
      </div>
    </div>
    <div id="meal2" class="secondary-meal meal">
      <div class="meal-text">

      <?php
        if ($lang == 'eng') {
          echo "<h1 class='meal-name'>Vallli littles zucchini carpaccio</h1>";
        } else if ($lang == 'de') {
          echo "<h1 class='meal-name'>Valli kleines Zucchini-Carpaccio</h1>";
        }
       ?>
       <?php
         if ($lang == 'eng') {
           echo "<p>Capaccio, yes, quite a healty meal. Not a reason why it can't Taste well. <br>At least not anymore.<br>This Capaccio realy is a banger in our collection, it not just tastes well and is healty, it also is completely localy produced and vegan.</p>";
         } else if ($lang == 'de') {
           echo "<p>Carpaccio, ja, wirklich ein gesundes Essen. Doch das ist kein Grund das es nicht gut schmecken darf.<br>Zumindest jetzt nicht mehr.<br>Dieses Carpaccio ist wirklich eine kleine Besonderheit in unserer Auswahl, es schmeckt nicht nur gut und ist Gesund, nein, es ist auch komplett local produziert und vegan.</p>";
         }
        ?>
     </div>
       <div class="meal-img">
         <img src="../img/valli-littles-zucchini-carpaccio.jpg" alt="">
       </div>
      <div class="attributes">
        <span class="attribute"><img title="Low Carb" src='../img/LowCarb.png'></span>
        <span class="attribute"><img title="Hormon free" src='../img/hormonfree.png'></span>
        <span class="attribute"><img title="Glutenfree" src='../img/gluteenfree.png'></span>
        <span class="attribute"><img title="Vegan" src='../img/vegan.png'></span>
        <span class="attribute"><img title="Locally produced Ingredience" src='../img/local.png'></span>
      </div>
    </div>
    <div id="meal3" class="meal">
      <div class="meal-text">
        <?php
          if ($lang == 'eng') {
            echo "<h1 class='meal-name'>Taleggio sourdough salad with simple salsa verde</h1>";
          } else if ($lang == 'de') {
            echo "<h1 class='meal-name'>Tallegiosalat mit einfacher salsa verde</h1>";
          }
         ?>
      <?php
        if ($lang == 'eng') {
          echo "<p>This tasty Taleggio is a very great meal to eat at our Restaurante, because is always fresh made an warm. <br>The salsa dip can be made extra hot for those of you who like the kick. <br>The traditional recepie got very great reviews and I doupt it would be great to try</p>";
        } else if ($lang == 'de') {
          echo "<p>Dieses Taleggio ist ein wunderbares Gericht, um bei uns in Restaurante gegessen zu weden, weil es immer frisch zubereitet und warm ist. <br>Der Salsa dip kann extra scharf gemacht werden für die jenigen unter euch die den Kick brauchen. <br>Das traditionelle Rezept hat sehr gutes feedback bekommen und Wir glauben es währe gut es mal zu probieren.</p>";
        }
       ?>
     </div>
     <div class="meal-img">
       <img src="../img/taleggio-sourdough-daalad-with-simple-salsa-verde.jpg">
     </div>
      <div class="attributes">
        <span class="attribute"><img title="Low Carb" src='../img/LowCarb.png'></span>
        <span class="attribute"><img title="Glutenfree" src='../img/gluteenfree.png'></span>
        <span class="attribute"><img title="Locally produced Ingredience" src='../img/local.png'></span>
      </div>
    </div>
    <div id="meal4" class="secondary-meal meal">
      <div class="meal-text">

      <?php
        if ($lang == 'eng') {
          echo "<h1 class='meal-name'>Hormone free silverbeet fatteh</h1>";
        } else if ($lang == 'de') {
          echo "<h1 class='meal-name'>Silberrübenfett mit Sumachjoghurt und Kichererbsen</h1>";
        }
       ?>
       <?php
         if ($lang == 'eng') {
           echo "<p>This silverboot fatteh with chickpeas is a great meal for cancer related people, because the're no cancer supporting hormones in this meal although there is some fish in here. <br>The fresh mix with yoghurt is really special. <br>You can even imagin how good it tastes. This is a meal you HAVE to try.</p>";
         } else if ($lang == 'de') {
           echo "<p>Dieses Silberrübenfett mit Sumachjoghurt ist ein sehr gutes essen für an Krebs erkrankte Personen, da in diesem Gericht keine Krebs fördernden Hormone enthalten sind, obwohl fish enthalten ist. <br> Der frische Mix mit yoghurt ist wirklich spezial. <br>Man kann sich nicht vorstellen wie gut dieses Essen schmeckt. Wenn du mal bei uns vorbeistollperst MUSST du es probieren</p>";
         }
        ?>
     </div>
       <div class="meal-img">
         <img src="../img/silverbeet-fatteh-with-sumac-yoghurt-and-chickpeas.jpg" alt="">
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
