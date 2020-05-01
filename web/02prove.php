<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <title>Brian's Magic: The Gathering Homepage</title>
    <!--for google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Frijole|Comfortaa|Creepster|Satisfy&display=swap" rel="stylesheet">
    <!--CSS modifications-->
    <link rel="stylesheet" type="text/css" href="02prove.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>

  <body>
    <header>
      <div id="header">
        <img id="WMlogo" src="https://i.pinimg.com/originals/68/df/3d/68df3d7f7fe51cb099b3874a53599191.png">
        <h1 id="slogan">Brian's Homepage</h1>
        <img id="WMlogo" src="https://logodix.com/logo/2086275.png" alt="WM Logo">
      </div>
      <ul id="menuBar">
        <li class="mb"><a href="02prove.html">Home</a></li>
        <li class="mb"><a href="02prove_2.html">Index</a></li>
      </ul> <!-- end menuBar -->
    </header>
    <?php
      $t=time();
      echo(date("Y-m-d H:i:s",$t));
    ?>
    <h1 id="header1">Favorite Combos</h1>
    
    <div id="combo1">
      <div id="showNumber"><h2>+3</h2></div>
      <img class="card" src="https://mlpnk72yciwc.i.optimole.com/cqhiHLc-rgIz95eG/w:auto/h:auto/q:90/https://bleedingcool.com/wp-content/uploads/2020/04/07-ominous-seas-mtg-card.jpg">
      <img class="card" src="https://res.cloudinary.com/csicdn/image/upload/fl_lossy,q_auto/v1/Images/Products/mtg%20art/Theros%20Beyond%20Death%20Variants/full/ThassaDeepDwelling261.jpg">
      <img id="hoverhide" class="card" src="https://crystalcommerce-assets.s3.amazonaws.com/photos/6517474/large/en_Cd5uzXkL9b.png?1561481210">
    </div>
    <div id="caption">Use Thassa's abiltiy to exile Cavalier of Gales (hover mouse over image), bring it back, and add 3 counters to Ominous Seas.</div>
    <div id="combo2">
      <img class="card" src="https://img.scryfall.com/cards/large/front/8/2/82389aaa-9f32-4169-a71c-1aea5af9e935.jpg?1563899712">
      <img class="card" src="https://www.cardkingdom.com/images/magic-the-gathering/theros-beyond-death/nyxbloom-ancient-36268-medium.jpg">
      <img class="card" src="https://media-dominaria.cursecdn.com/avatars/thumbnails/272/82/200/283/636822159446241767.jpeg">
    </div>
    <div id="caption">Play Risen Reef to put lands in play and cards in your hand when you play an Elemental, then drop a Nyxbloom Ancient to produce three times more mana, then use Electrodominance to finish off your opponent.</div>
    <div id="combo3">
      <img class="card" src="https://img.scryfall.com/cards/large/front/8/a/8a81e889-490b-4aeb-8e84-ea9a390bb8fe.jpg?1584830817">
      <img class="card" src="https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=473109&type=card">
      <img class="card" src="https://img.scryfall.com/cards/large/front/d/c/dccbe031-1547-4fa5-ba9a-caa1b1f5eb5d.jpg?1563899311">
    </div>
    <div id="caption">Cavalcade of Calamity deals an extra damage when a creature with 1 power attacks, Torban's ability increases this damage by two and if three 1/1 creatures attack, it could cause up to 18 damage.</div>
    <script src="02prove.js"></script>

  </body>
</html>
  