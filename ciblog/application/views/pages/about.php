 
<!DOCTYPE html>
<html lang="en">
<head>
  <title><h2><?= $title; ?></h2></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../assets/images/redeemed.jpg" alt="church" width="460" height="345">
        <div class="carousel-caption">
          <h3>church of God</h3>
          <p>The power of Prayers.</p>
        </div>
      </div>

      <div class="item">
        <img src="../assets/images/pastor.jpg" alt="Pastor" width="460" height="345">
        <div class="carousel-caption">
          <h3>Pastor</h3>
          <p>Pastor/Bishop George Wambugu and his wife.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="../assets/images/redeemed3.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Worship Time</h3>
          <p>Praising God for the love He has shown us.</p>
        </div>
      </div>

      <div class="item">
        <img src="../assets/images/redeemed4.jpg	" alt="Youth" width="460" height="345">
        <div class="carousel-caption">
          <h3>Youth team</h3>
          <p>Time for the youth team to praise the Lord</p>
        </div>
      </div>

      <div class="item">
        <img src="../assets/images/redeemed5.jpg	" alt="Youth team" width="460" height="345">
        <div class="carousel-caption">
          <h3>Praise God</h3>
          <p>Time for the youth team to praise the Lord.</p>
        </div>
      </div>
  
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>