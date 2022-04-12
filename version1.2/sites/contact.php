<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Food</title>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/contact.css">
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
    <div class="padding-box"></div>
    <div class="contact-content">
      <?php
      if ($_GET['lang'] == 'de') {
        echo "<h1>Karte<h1>
        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14238.611043947682!2d9.994438335111838!3d53.45446131036338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b1919b83e5e6e1%3A0x504f498e2c17d704!2sDr.%20Mein%20Beispiel!5e0!3m2!1sde!2sde!4v1649160884059!5m2!1sde!2sde'></iframe>
        <h1>Oeffnungszeiten<h1>
        <ul>
          <li>Montag: 9.00 - 21.00</li>
          <li>Dienstag: 9.00 - 21.00</li>
          <li>Mittwoch: 9.00 - 21.00</li>
          <li>Donnerstag: 9.00 - 21.00</li>
          <li>Freitag: geschlossen</li>
          <li>Samstag: 9.00 - 21.00</li>
          <li>Sontag:  10.00 - 21.00</li>
          </ul>
          <div class='contact-nav'>
            <a href='tel:1234567890'>Telefon: 1234567890</a>
            <br>
            <a href='mailto:example@example.net'>Mail: example@example.net</a>
            <br>
            <a href='https://www.google.com/maps/place/Dr.+Mein+Beispiel/@53.453903,9.8650829,11z/data=!4m9!1m2!2m1!1sBeispiel!3m5!1s0x47b1919b83e5e6e1:0x504f498e2c17d704!8m2!3d53.453903!4d10.0051586!15sCghCZWlzcGllbJIBD2NvYWNoaW5nX2NlbnRlcg'>Großmoorbogen 42, 21079 Hamburg</a>
            <br>
          </div>
        ";
      }
      if ($_GET['lang'] == 'eng') {
        echo "<h1>Map<h1>
        <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14238.611043947682!2d9.994438335111838!3d53.45446131036338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b1919b83e5e6e1%3A0x504f498e2c17d704!2sDr.%20Mein%20Beispiel!5e0!3m2!1sde!2sde!4v1649160884059!5m2!1sde!2sde'></iframe>
        <h1>Opening hours<h1>
        <ul>
          <li>Monday: 9.00 - 21.00</li>
          <li>Tuesday: 9.00 - 21.00</li>
          <li>Wednesday: 9.00 - 21.00</li>
          <li>Thursday: 9.00 - 21.00</li>
          <li>friday: geschlossen</li>
          <li>Saturday: 9.00 - 21.00</li>
          <li>Sunday:  10.00 - 21.00</li>
          </ul>
          <div class='contact-nav'>
            <a href='tel:1234567890'>Telephone: 1234567890</a>
            <br>
            <a href='mailto:example@example.net'>Mail: example@example.net</a>
            <br>
            <a href='https://www.google.com/maps/place/Dr.+Mein+Beispiel/@53.453903,9.8650829,11z/data=!4m9!1m2!2m1!1sBeispiel!3m5!1s0x47b1919b83e5e6e1:0x504f498e2c17d704!8m2!3d53.453903!4d10.0051586!15sCghCZWlzcGllbJIBD2NvYWNoaW5nX2NlbnRlcg'>Großmoorbogen 42, 21079 Hamburg</a>
            <br>
          </div>
        ";
      }
       ?>
       <div class="contact-nav">
         <a href="tel:1234567890">Telephone: 1234567890</a>
         <br>
         <a href="mailto:example@example.net">Mail: example@example.net</a>
         <br>
         <a href="https://www.google.com/maps/place/Dr.+Mein+Beispiel/@53.453903,9.8650829,11z/data=!4m9!1m2!2m1!1sBeispiel!3m5!1s0x47b1919b83e5e6e1:0x504f498e2c17d704!8m2!3d53.453903!4d10.0051586!15sCghCZWlzcGllbJIBD2NvYWNoaW5nX2NlbnRlcg">Großmoorbogen 42, 21079 Hamburg</a>
         <br>
       </div>
    </div>
    <footer> <p>Moritz Siefke (C) 2022</p> </footer>
    <script src="../scripts/meal.js"></script>
    </body>
  </html>
