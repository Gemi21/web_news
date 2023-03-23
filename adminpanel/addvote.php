<?php
if(isset($_POST['add'])){
    if(isset($_POST['vq']) && $_POST['vq'] !="" &&
      isset($_POST['vch1']) && $_POST['vch1'] !="" && 
      isset($_POST['vch2']) && $_POST['vch2'] !="" &&
      isset($_POST['vch3']) && $_POST['vch3'] !="" &&
      isset($_POST['vch4']) && $_POST['vch4'] !=""){
        
       $retval= addVoteQuestion($_POST['vq']);
        if($retval ==1){
            addVoteChoice($_POST['vch1'],getMaxVoteId());
            addVoteChoice($_POST['vch2'],getMaxVoteId());
            addVoteChoice($_POST['vch3'],getMaxVoteId());
            addVoteChoice($_POST['vch4'],getMaxVoteId());
            
            $message="vote added succssefully";
        }else{
            $message="question can not add";
        }
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
<h3 class="page-header"><i class="fa fa-laptop"></i> vote</h3>
<ol class="breadcrumb">
<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
<li><i class="fa fa-laptop"></i>Add Vote</li>						  	
</ol>
</div>
</div>
<br><br>

<div class="row">
<div class="col-md-12 portlets">
<div class="panel panel-default">
<div class="panel-heading">
<div class="pull-left">Add Vote</div>  
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
<form class="form-horizontal" method="post" action="">
<!-- Vote Question -->
<div class="form-group">
<label class="control-label col-lg-2" for="vote_question">Question</label>
<div class="col-lg-10"> 
<input type="text" class="form-control" id="vq" name="vq">
</div>
</div> 
<!-- Vote Choices -->
<div class="form-group">
<label class="control-label col-lg-2" for="vote_question">Choices</label>
<div class="col-lg-10" style="margin-bottom: 5px"> 
<input type="text" class="form-control" id="vch1" name="vch1">
</div>
<div class=" col-lg-offset-2 col-lg-10" style="margin-bottom: 5px"> 
<input type="text" class="form-control" id="vch2" name="vch2">
</div>
<div class="col-lg-offset-2 col-lg-10" style="margin-bottom: 5px"> 
<input type="text" class="form-control" id="vch3" name="vch3">
</div>
<div class="col-lg-offset-2 col-lg-10" style="margin-bottom: 5px"> 
<input type="text" class="form-control"
id="vch4" name="vch4">
</div>
</div>                             

<!-- Buttons -->
<div class="form-group">
<!-- Buttons -->
         <div class="col-lg-offset-2 col-lg-9">
            <button type="submit" class="btn btn-primary"
            id="add" name="add">Publish</button>
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