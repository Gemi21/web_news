<?php
require 'adminpanel/config/db_function.php';
?>
<header id="header">
<nav class="navbar navbar-inverse">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php"><span>N</span>EW <span>N</span>EWS </a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="index.php">home</a></li>
<?php
   $categoresi= getCategory();
  foreach($categoresi as $onecategory){ 
?>
<li>
<a href="cat.php?id=<?php echo $onecategory['id']; ?>"><?php
      echo $onecategory['name'];
      ?></a>
</li>

<?php
  }
?>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-in"></i></a>
<form class="dropdown-menu">
<div class="form-group">
<label for="InputUsername">Username</label>
<input type="text" class="form-control" id="InputUsername" placeholder="Username">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<button type="submit" class="btn btn-default">Login</button>
</form>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</header>