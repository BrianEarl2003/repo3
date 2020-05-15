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

    <div id="carouselExampleInterval" class="carousel slide img imgCenter" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
          <img src="Albert-Einstein (2).jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block bold">
        <h5>Albert Einstein</h5>
        <p>The only thing that interferes with my learning is my education.</p>
      </div>
        </div>
        <div class="carousel-item" data-interval="2000">
          <img src="LincolnAbraham300px (2).jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block bold">
        <h5>Abraham Lincoln</h5>
        <p>The best way to get a bad law repealed is to enforce it strictly.</p>
      </div>
        </div>
        <div class="carousel-item">
          <img src="Mark-Twain-400x565 (2).png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block bold">
        <h5>Mark Twain</h5>
        <p>Get your facts first, then you can distort them as you please.</p>
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
    <!--start-->
    <div class="center blue buttonPadding">
        <button type="button" class="btn btn-outline-success">Random Quote</button>
    </div><hr>
    <form class="center padding green">Quote from Category
      <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Humor</option>
          <option>Inspirational</option>
          <option>Religious</option>
          <option>Historical</option>
          <option>Educational</option>
        </select>
        <button type="button" class="btn btn-outline-primary marginTop">List</button>
        <button type="button" class="btn btn-outline-info marginTop">Random from Category</button>
      </div>
    </form><hr>

    <form class="padding center blue">
      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="center">Submit a Quote</label><hr>
        <label for="exampleFormControlSelect1" class="center">Category</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>Humor</option>
          <option>Inspirational</option>
          <option>Religious</option>
          <option>Historical</option>
          <option>Educational</option>
        </select>
        <input class="form-control" type="text" placeholder="Quotee">
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Quote" rows="3"></textarea>
        <button type="button" class="btn btn-outline-secondary marginTop">Submit Quote</button>
      </div>
    </form>

    <hr><!--end-->
    <!--footer-->
    <footer>
     
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="quotes.js"></script>
  </body>
</html>
