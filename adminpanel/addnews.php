<?php
    if(isset($_POST['add'])){
        if(isset($_POST['title']) && $_POST['title'] !="" &&
          isset($_POST['catid']) && $_POST['catid'] !="" && 
          isset($_POST['summ']) && $_POST['summ'] !="" && 
          isset($_POST['detail']) && $_POST['detail'] !="" &&
          $_FILES['image']['name'] != ""){
          $imgName=  $_FILES['image']['name'];
            
if(strstr($_FILES["image"]["type"],"image")){
$splitedImageName=explode(".",$imgName);
$type=$splitedImageName[sizeof($splitedImageName)-1];

    $imgName=time().".$type";
    
    move_uploaded_file($_FILES["image"]["tmp_name"],"img/$imgName");
    
    $retva=addNews($_POST['title'],$_POST['catid'],$_POST['summ'],$_POST['detail'],$imgName);
    if($retva ==1){
        $message="news add done";
    }else{
        $message="can not add";
    }
}else{
    $message="please select valid image";
}
            
//     move_uploaded_file ($_FILES['image'] ['tmp_name'],
//"img/{$_FILES['image'] ['name']}");

            
}else{
            $message="please enter all data";
        }
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
<li><i class="fa fa-laptop"></i>Add News</li>						  	
</ol>
</div>
</div>
<br><br>

<div class="row">
<div class="col-md-12 portlets">
<div class="panel panel-default">
<div class="panel-heading">
<div class="pull-left">Add News</div> 

 
<div class="clearfix"></div>
</div>
<div class="panel-body">
<div class="padd">

<div class="form quick-post">

<?php
    
    if(isset($message)){
        echo $message;
    }
    ?>
<!-- Edit profile form (not working)-->
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<!-- Title -->
<div class="form-group">
<label class="control-label col-lg-2" for="title">Title</label>
<div class="col-lg-10"> 
<input type="text" class="form-control" id="title" name="title">
</div>
</div>                             
<!-- Cateogry -->
<div class="form-group">
<label class="control-label col-lg-2">Category</label>
<div class="col-lg-10">                               
<select class="form-control" id="catid" name="catid">
<?php
   $categoresi= getCategory();
  foreach($categoresi as $onecategory){ 
?>
<option value="<?php echo $onecategory['id']; ?>"><?php echo $onecategory['name']; ?></option>

<?php
  }
      ?>
</select>  
</div>
</div> 
<!-- Summery -->
<div class="form-group">
<label class="control-label col-lg-2" for="summery">Summery</label>
<div class="col-lg-10">
<textarea class="form-control ckeditor" id="summ" name="summ"></textarea>
</div>
</div>  
<!-- Content -->
<div class="form-group">
<label class="control-label col-lg-2" for="content">Content</label>
<div class="col-lg-10">
<textarea class="form-control ckeditor" name="detail" id="detail" rows="6"></textarea>
</div>
</div>             
<!-- Tags -->
<div class="form-group">
<label class="control-label col-lg-2" for="image">Image</label>
<div class="col-lg-10">
<input type="file" class="form-control" id="image" name="image">
</div>
</div>

<!-- Buttons -->
<div class="form-group">
<!-- Buttons -->
<div class="col-lg-offset-2 col-lg-9">
<button type="submit" class="btn btn-primary" id="add" name="add">Publish</button>
<button type="submit" class="btn btn-danger">Save Draft</button>
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