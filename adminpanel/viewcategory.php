<?php
    if(isset($_GET['id']) && $_GET['id']!=""){
        deleteCategory($_GET['id']);
    }
?>


<section id="main-content">
<section class="wrapper">            
<!--overview start-->
<div class="row">
<div class="col-lg-12">
<h3 class="page-header"><i class="fa fa-laptop"></i> Category</h3>
<ol class="breadcrumb">
<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
<li><i class="fa fa-laptop"></i>View Category</li>						  	
</ol>
</div>
</div>
<br><br>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">
All Category
</header>

<table class="table table-striped table-advance table-hover">
<tbody>
<tr>
<th><i class="icon_profile"></i> Name</th>
<th><i class="icon_calendar"></i> Date</th>
<th><i class="icon_cogs"></i> Action</th>
</tr>

<?php
   $categoresi= getCategory();
  foreach($categoresi as $onecategory){ 
?>
<tr>
<td><?php echo $onecategory['name']; ?></td>
<td><?php echo $onecategory['date']; ?></td>
<td>
<div class="btn-group">
  <a class="btn btn-primary" href="?p=addcategory&id=<?php echo $onecategory['id']; ?>&name=<?php echo $onecategory['name']; ?>"><i class="fa fa-edit"></i></a>
  <a class="btn btn-danger" href="?p=viewcategory&id=<?php echo $onecategory['id']; ?>"><i class="fa fa-times"></i></a>
</div>
</td>
</tr>
<?php
  }
 
 ?>

</tbody>
</table>
</section>
</div>
</div>
</section>
</section>