<?php
session_start();
require_once('db_config.php'); 
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>OSDG : GSoC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="./css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="./css/flat-ui.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <link href="./css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="top-header"><span style="color: gray">OSDG, IIIT - Hyderabad: </span> GSoC stats</div>
    <div class="container">
     <h3> 
GSoC project details
</h3>
<form action="thanks.php" method="POST" role="form">
  
  <center><input type="submit" name="submit" value="Done!" class="btn btn-inverse" /></center>
</form>
<div id="errorbox"></div>


    </div>
    <div class="bottom-footer">Designed by <a href="http://mrinaldhar.com">Mrinal Dhar</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; All Rights Reserved.</div>

    <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="./js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/vendor/video.js"></script>
    <script src="./js/flat-ui.min.js"></script>
    <script src="./js/application.js"></script>
<script src="./js/validate.js"></script>
    <script>
    function show(what) {
        $('.'+what.split('--')[0]+'--'+(parseInt(what.split('--')[1])+1)%2).addClass("hidinit");

$('.'+what.split('--')[0]+'--'+(parseInt(what.split('--')[1])+1)%2).slideUp(function() {
   $('.'+what).slideDown();
   
      $('.'+what).removeClass('hidinit');
});
      console.log((parseInt(what.split('--')[1])+1)%2);
      
    }
    $('form').validate({
  focusCleanup: true,
  showErrors: function(errorMap, errorList) {
    $("#errorbox").html("Your form contains "
      + this.numberOfInvalids()
      + " empty inputs. Please enter all details on this form.");
  }
    });
    function dothis() {
      $('.hidinit').remove();
    }
    </script>

  </body>
</html>
