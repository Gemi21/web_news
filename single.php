<!DOCTYPE html>
<html lang="en">
<head>
<title>ECONOMIC | NEW NEWS</title>
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

if(isset($_GET['id']) && $_GET['id'] !=""){
$news=getNewsById($_GET['id']);
}
?>
<!-- /#header -->

<!-- #content -->
<main id="content" class="narrowcolumn">
<div id="main-content" class="container">
<div class="row">
<div class="col-sm-9">
<div class="single-news">
<img src="adminpanel/img/<?php echo $news['image']; ?>" class="img-responsive" alt="single news">
<h1><?php echo $news['title']; ?></h1>

<p><?php echo $news['details']; ?></p>


</div>
</div> <!-- /.col-sm-9 -->
<div class="col-sm-3">
<aside>
<h3>Other News</h3>

<div class="aside-item">
    <img src="images/aside.jpg" class="img-responsive" alt="aside">
    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</a>
</div> <!-- /.aside-item -->

<div class="aside-item">
    <img src="images/aside.jpg" class="img-responsive" alt="aside">
    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</a>
</div> <!-- /.aside-item -->

<div class="aside-item">
    <img src="images/aside.jpg" class="img-responsive" alt="aside">
    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</a>
</div> <!-- /.aside-item -->

<div class="aside-item">
    <img src="images/aside.jpg" class="img-responsive" alt="aside">
    <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</a>
</div> <!-- /.aside-item -->

<div class="vote">
    <h5>Are you in favor of reconciliation ?</h5>
    <form action="#">
        <input type="radio" name="vote" value="yes"> Yes <br>
        <input type="radio" name="vote" value="no"> No <br>
        <input type="radio" name="vote" value="dont care"> I Don’t Care <br>
        <input type="submit" value="Vote">
    </form>
</div>

</aside>
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