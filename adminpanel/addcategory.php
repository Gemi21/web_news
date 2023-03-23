<?php

    if(isset($_POST['add']) && $_POST['add'] =="update"){
        if(isset($_POST['catname']) && $_POST['catname'] !="" && 
          isset($_POST['catid']) && $_POST['catid'] !=""){
            $retval=updateCategory($_POST['catname'],$_POST['catid']);
            if($retval ==1){
                $message="done";
            }else{
                $message="faile";
            }
        }
    }else if(isset($_POST['add']) && $_POST['add']=="publish"){
        if(isset($_POST['catname']) && $_POST['catname'] !=""){
          $retval=addCategory($_POST['catname'])  ;
            if($retval ==1){
               $message="done"; 
            }else{
              $message="faile";  
            }
        }else{
            $message="please enter category name";
        }
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
<li><i class="fa fa-laptop"></i>Add Category</li>						  	
</ol>
</div>
</div>
<br><br>

<div class="row">
<div class="col-md-12 portlets">
<div class="panel panel-default">
<div class="panel-heading">
<div class="pull-left">Add Category</div>  
<div class="clearfix"></div>
</div>
<div class="panel-body">
<div class="padd">

<div class="form quick-post">
<?php
    if(isset($message) && $message!=""){
echo $message;}
    ?>
<!-- Edit profile form (not working)-->
<form class="form-horizontal" method="post" action="">
<!-- Title -->
<div class="form-group">
<label class="control-label col-lg-2" for="category_name">Name</label>
<div class="col-lg-10"> 

<?php
   if(isset($_GET['id']) && $_GET['id'] !=""){
       
  
    ?>
    
    <input type="hidden" id="catid" name="catid" value="<?php $_GET['id'] ?>" />
    
    <?php
       }
       ?>
<input type="text" class="form-control" id="catname" name="catname" value="<?php if(isset($_GET['name']) && $_GET['name'] !=""){ echo $_GET['name'];} ?>">
</div>
</div>                             

<!-- Buttons -->
<div class="form-group">
<!-- Buttons -->
                 <div class="col-lg-offset-2 col-lg-9">
    
  
    <button type="submit" class="btn btn-primary"
    id="add"
    name="add" value="<?php
          if(isset($_GET['id']) && $_GET['id']!=""){ 
              echo "update";
          }else{
              echo "publish";
          }
        ?>"><?php
          if(isset($_GET['id']) && $_GET['id']!=""){ 
              echo "update";
          }else{
              echo "publish";
          }
        ?></button>
    

    <button type="reset" class="btn btn-default">Reset</button>
                 </div>
</div>
</form>
</div>


</div>
<div class="widget-foot">
<!-- Footer goes here -->
</div>
</div>
</div>

</div>

</div> 
<!-- project team & activity end -->

</section>
</section>