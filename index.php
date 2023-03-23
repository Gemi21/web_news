
<!DOCTYPE html>
<html lang="en">
<head>
<title>NEW NEWS</title>
<!-- meta tags -->
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">    
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<!-- fontawesome css -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<!-- css fiels -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- .wrap -->
<div id="wrap">
<!-- #header -->
<?php
    include("header.php");
?>
<!-- /#header -->

<!-- #content -->
<main id="content" class="narrowcolumn">
<section id="hero">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-generic" data-slide-to="1"></li>
<li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<div class="item active">
<img src="images/slide1.jpg" alt="...">
<div class="carousel-caption">
<h1><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</a></h1>
</div>
</div>
<div class="item">
<img src="images/slide1.jpg" alt="...">
<div class="carousel-caption">
<h1><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</a></h1>
</div>
</div>
<div class="item">
<img src="images/slide1.jpg" alt="...">
<div class="carousel-caption">
<h1><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</a></h1>
</div>
</div>
</div> <!-- /.carousel-inner -->

<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div> <!-- /.carousel -->
</section>

<div id="main-content" class="container">
<div class="row">
<div class="col-sm-9">
<?php
  
   $categoresi= getCategory();
  foreach($categoresi as $onecategory){ 

?>
<div class="row specialize">
<h2>LATEST <?php echo $onecategory['name']; ?> NEWS</h2>

<?php
  $news=getNewsByCatID($onecategory['id']) ;                                    
  foreach($news as $onenews){ 
?>
<div class="col-sm-4 news-block">
<img src="adminpanel/img/<?php echo $onenews['image'] ?>" class="img-responsive" alt="political">
<a href="single.php?id=<?php echo $onenews['id'] ?>"><?php echo $onenews['title'] ?></a>
</div> <!-- /.news-block -->
<?php
  }
?>

</div> <!-- /.specialize -->
<?php
  }
?>

<div class="comic">
<h2>COMICS TODAY</h2>
<img src="images/comic.jpg" class="img-responsive" alt="comic">
</div> <!-- /.comic -->
</div> <!-- /.col-sm-9 -->
<div class="col-sm-3">
<?php
  include("asid.php");  
?>
</div> <!-- /.col-sm-3 -->
</div> <!-- /.row -->
</div> <!-- /.main-content -->
</main><!-- /#content -->

<!-- #footer -->
<footer id="footer">
<div class="top-footer">
<div class="row">

<div class="col-sm-3">
<h3>Site Map</h3>
<ul class="list-unstyled sitemap">
<li><a href="#">Home</a></li>
<li><a href="#">Political</a></li>
<li><a href="#">Social</a></li>
<li><a href="#">Economic</a></li>
</ul>
</div>
<div class="col-sm-5">
<h3>Popular News</h3>
<ul class="list-unstyled popular">
<li> <img src="images/footer-news.jpg" alt="news"> <a href="#">Lorem ipsum dolor sit amet, consectetur adipis...</a></li>
<li> <img src="images/footer-news.jpg" alt="news"> <a href="#">Lorem ipsum dolor sit amet, consectetur adipis...</a></li>
<li> <img src="images/footer-news.jpg" alt="news"> <a href="#">Lorem ipsum dolor sit amet, consectetur adipis...</a></li>
</ul>
</div>
<div class="col-sm-4">
<h3>Contact Us</h3>
<ul class="list-unstyled list-inline social">
<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
<li><a href="#"><i class="fa  fa-twitter-square fa-2x"></i></a></li>
<li><a href="#"><i class="fa  fa-youtube-square fa-2x"></i></a></li>
<li><a href="#"><i class="fa  fa-instagram fa-2x"></i></a></li>
</ul>
</div>


</div> <!-- /.row -->

</div> <!-- /.top-footer -->
<div class="copyright text-center">
<p>&copy; Copyright reseved to <a href="https://www.facebook.com/mohammed.n.abualqumboz.9">Mohammed Naji</a> 2016</p>
</div>
</footer><!-- /#footer -->
</div><!-- /.wrap -->

<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>