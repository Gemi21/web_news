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
<?php
 $vote= getLastVote(); 
  $choices=  getchoicesByVoteId($vote['id']);
?>
<div class="vote">
<h5><?php echo $vote['question'] ?></h5>
<form action="doVote.php" method="post">

<?php
    foreach($choices as $onechoice){
    ?>
<input type="radio" name="choicid"  id="choicid" value="<?php echo $onechoice['id']; ?>"> <?php echo $onechoice['choice']; ?> <br>
<?php
    }
        ?>

<input type="submit" value="Vote">
</form>
</div>

</aside>