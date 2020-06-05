<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quotable Quotes</title>
    <!--for google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Creepster|Sat\
isfy&display=swap" rel="stylesheet">
    <!--CSS modifications-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="quotes.css">
  </head>

  <body class="marginLeftRight">
    <!--webpage header-->
    <hr><header>
    <div class="container bg-dark" id="header">
        Quotable Quotes
    </div>
    </header><hr>
    <!--JumboTron-->
    <div id="carouselExampleInterval" class="carousel slide img imgCenter" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
          <img src="Albert-Einstein (2).jpg" class="d-block w-100" alt="Albert Einstein">
          <div class="carousel-caption d-md-block boldOrange">
            <p>The only thing that interferes with my learning is my education.</p>
            <h5 class="h5font">-Albert Einstein</h5>
          </div>
        </div>
        <div class="carousel-item" data-interval="4000">
          <img src="xEleanor-Roosevelt.jpg.pagespeed.ic.lh5etb1YhH (2).jpg" class="d-block w-100" alt="Eleanor Roosevelt">
          <div class="carousel-caption d-md-block boldOrange">
            <p>No one can make you feel inferior without your consent.</p>
            <h5 class="h5font">-Eleanor Roosevelt</h5>
          </div>
        </div>
        <div class="carousel-item" data-interval="4000">
          <img src="LincolnAbraham300px (2).jpg" class="d-block w-100" alt="Abraham Lincoln">
          <div class="carousel-caption d-md-block boldOrange">
            <p>The best way to get a bad law repealed is to enforce it strictly.</p>
            <h5 class="h5font">-Abraham Lincoln</h5>
          </div>
        </div>
        <div class="carousel-item" data-interval="4000">
          <img src="first-lady-michelle-obama-wayne-pascall (2).jpg" class="d-block w-100" alt="Michelle Obama">
          <div class="carousel-caption d-md-block boldOrange">
            <p>When they go low, we go high.</p>
            <h5 class="h5font">-Michelle Obama</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Mark-Twain-400x565 (2).png" class="d-block w-100" alt="Mark Twain">
          <div class="carousel-caption d-md-block boldOrange">
            <p>Get your facts first, then you can distort them as you please.</p>
            <h5 class="h5font">-Mark Twain</h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><hr>
    <!--start forms-->
    <form action="quotes.php" method="POST">
    <div class="center blue buttonPadding">
        <button type="submit" class="btn btn-outline-success bold" name="randomQ">Random Quote</button>
    </div>
    </form><hr>

    <div class="container dText blue boldWhite">
      <?php 
        require_once('DBconnect.php');
        foreach($db->query('SELECT COUNT(*) FROM quote') as $row) {
          $random= rand(1, $row['count']);
        }
        foreach($db->query("SELECT id, quotee, content FROM quote q WHERE q.id=$random") as $row)
        {
          if (isset($_POST['randomQ'])) {
            echo '' . $row['content'];
            echo '<br/>';
            echo '-' . $row['quotee'];
            echo '<hr>';
          }
        }
      ?>
    </div>

    <form class="center padding green boldOrange" action="quotes.php" method="POST">Quote from Category
      <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1" name="dCat">
          <option>Humor</option>
          <option>Inspirational</option>
          <option>Religious</option>
          <option>Historical</option>
          <option>Educational</option>
        </select>
        <button class="btn btn-outline-primary marginTop bold" type="submit" name="list">List</button>
        <button class="btn btn-outline-info marginTop bold" type="submit" name="rCat">Random from Category</button>
      </div>
    </form><hr>

    <div class="container dText green boldWhite">
      <?php
        foreach ($db->query('SELECT category_name, quotee, content FROM category c JOIN quote q ON c.id=q.category_id') as $row) 
        {
          if (isset($_POST['list']) && $row['category_name'] == $_POST['dCat']) {
            echo '' . $row['content'];
            echo '<br/>';
            echo '-' . $row['quotee'];
            echo '<hr>';
          }
        }
        if (isset($_POST['rCat'])){
          $category = $_POST['dCat'];
        
          foreach($db->query("SELECT COUNT(*) FROM category c JOIN quote q ON c.id=q.category_id WHERE c.category_name='$category'") as $row){
            $rand2= rand(1, $row['count']);
          }
          foreach($db->query("SELECT q.category_quoteId, category_name, quotee, content FROM category c JOIN quote q ON c.id=q.category_id WHERE c.category_name='$category' AND q.category_quoteId=$rand2") as $row)
          {
            if (isset($_POST['rCat']) && $row['category_name'] == $_POST['dCat']) {
              echo '' . $row['content'];
              echo '<br/>';
              echo '-' . $row['quotee'];
              echo '<hr>';
            }
          }
        }
      ?>
    </div>

    <form class="padding center blue" action="quotes.php" method="POST">
      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="center boldOrange">Submit a Quote</label><hr>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Quote" name="quote" rows="3"></textarea>
        <input class="form-control" type="text" placeholder="Quotee" name="quotee">
        <label for="exampleFormControlSelect1" class="center boldOrange">Category</label>
        <select class="form-control" id="exampleFormControlSelect1" name="wCat">
          <option>Humor</option>
          <option>Inspirational</option>
          <option>Religious</option>
          <option>Historical</option>
          <option>Educational</option>
        </select>
        <button type="submit" class="btn btn-outline-secondary marginTop bold" name="wQuote">Submit Quote</button>
      </div>
    </form>

    <div class="container dText blue boldWhite">
      <?php
        if (isset($_POST['wQuote'])){
          if ($_POST['wCat'] == 'Humor')
            $wCat = 1;
          if ($_POST['wCat'] == 'Inspirational')
            $wCat = 2;
          if ($_POST['wCat'] == 'Religious')
            $wCat = 3;
          if ($_POST['wCat'] == 'Historical')
            $wCat = 4;
          if ($_POST['wCat'] == 'Educational')
            $wCat = 5;
          $wCategory = $_POST['wCat'];
          foreach($db->query("SELECT COUNT(*) FROM category c JOIN quote q ON c.id=q.category_id WHERE c.category_name='$wCategory'") as $row){
            $cqId = $row['count'] + 1;
          }  
          $quotee = htmlspecialchars($_POST['quotee']);
          $quote = htmlspecialchars($_POST['quote']);

          $stmt = $db->prepare('INSERT INTO quote (category_id, category_quoteId, quotee, content) VALUES (:category_id, :category_quoteId, :quotee, :content);');
          $stmt->bindValue(':category_id', $wCat, PDO::PARAM_INT);
          $stmt->bindValue(':category_quoteId', $cqId, PDO::PARAM_INT);
          $stmt->bindValue(':quotee', $quotee, PDO::PARAM_STR);
          $stmt->bindValue(':content', $quote, PDO::PARAM_STR);
          $stmt->execute();

          echo '<hr>' . $quote . '<br>';
          echo '-' . $quotee . '<br>';
          echo 'Submitted to the ' . $wCategory . ' category.<hr>';
        }
      ?>
    </div>
    <!--end forms-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="quotes.js"></script>
  </body>
</html>
