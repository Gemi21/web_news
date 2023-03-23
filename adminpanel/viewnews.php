<?php
    if(isset($_GET['id']) && $_GET['id'] !=""){
       deleteNews($_GET['id']) ;
    }
?>
<section id="main-content">
<section class="wrapper">            
<!--overview start-->
<div class="row">
<div class="col-lg-12">
<h3 class="page-header"><i class="fa fa-laptop"></i> News</h3>
<ol class="breadcrumb">
<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
<li><i class="fa fa-laptop"></i>View News</li>						  	
</ol>
</div>
</div>
<br><br>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">
  All News
</header>

<table class="table table-striped table-advance table-hover">
<tbody>
  <tr>
     <th><i class="icon_profile"></i> Name</th>
     <th><i class="icon_pin_alt"></i> Category</th>
     <th><i class="icon_calendar"></i> Date</th>
     <th><i class="icon_cogs"></i> Action</th>
  </tr>
  
  <?php
   $a= getNews();
    foreach($a as $onenews){
    ?>
  <tr>
     <td><?php echo $onenews['title']; ?></td>
     <td><?php echo getCategoryNameByid($onenews['categoryid'])
        ; ?></td>
     <td><?php echo $onenews['date']; ?></td>
     <td>
      <div class="btn-group">
          <a class="btn btn-primary" href="#"><i class="fa fa-edit"></i></a>
          <a class="btn btn-danger" href="?p=viewnews&id=<?php echo $onenews['id']; ?>"><i class="fa fa-times"></i></a>
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