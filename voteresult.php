<?php
require 'adminpanel/config/db_function.php';
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to Foundation</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  
</head>
<body>

  <div class="row">
    <div class="twelve columns">
      <h2>PHP Course</h2>
      <p>Simple website</p>
      <hr />
    </div>
  </div>

  <div class="row">
    <div class="eight columns">
<table width="100%" border="0">
 <?php
 $vote= getLastVote(); 
  $choices=  getchoicesByVoteId($vote['id']);
    
    $total=0;
    
    foreach($choices as $t){
       $total +=$t['count'];
    }
?>
    <tr>
    <td><?php echo $vote['question']; ?> </td>
  </tr>

  <tr>
    <td><table width="100%" border="0" cellspacing="0">
      <tr>
        <td width="34%" bgcolor="#FF9900">Option</td>
        <td width="14%" bgcolor="#FF9900"># of votes</td>
        <td width="12%" bgcolor="#FF9900">Precentage %</td>
      </tr>
	  
   <?php
        foreach($choices as $one){
        ?>
      <tr>
        <td><?php echo $one['choice']; ?></td>
        <td><?php echo $one['count']; ?></td>
        <td><?php  echo ($one['count']/$total)*100 ?> %</td>
      </tr>
    <?php
        }
    ?>
	  
    </table></td>
  </tr>
</table>


    </div>

   
  </div>

  
  <div class="row"></div>
  
  
  
  <div class="row"></div>
  
  <div id="exampleModal" class="reveal-modal">
    <h2>This is a modal.</h2>
    <p>
      Reveal makes these very easy to summon and dismiss. The close button is simple an anchor with a unicode 
      character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will 
      also dismiss it.
    </p>
    <a class="close-reveal-modal">×</a>
  </div>
  
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>
</body>
</html>
