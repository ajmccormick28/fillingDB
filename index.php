<!DOCTYPE html>
<?php
  include 'connectioninfo.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="script.js"></script>
  </head>
  <body>
    <?php
      //include "insertDB.php";
    ?>
    <div class="parent">
			<!-- Row 1 -->
			<div class="brickStyle brickR1C1" id="brickR1C1" onclick="brickClicked('brickR1C1')"></div>
			<div class="brickStyle brickR1C2" id="brickR1C2" onclick="brickClicked('brickR1C2')"></div>
			<div class="brickStyle brickR1C3" id="brickR1C3" onclick="brickClicked('brickR1C3')"></div>
			<!-- Row 2 -->
			<div class="brickStyle brickR2C1" id="brickR2C1" onclick="brickClicked('brickR2C1')"></div>
			<div class="brickStyle brickR2C2" id="brickR2C2" onclick="brickClicked('brickR2C2')"></div>
			<div class="brickStyle brickR2C3" id="brickR2C3" onclick="brickClicked('brickR2C3')"></div>
			<!-- Row 3 -->
			<div class="brickStyle brickR3C1" id="brickR3C1" onclick="brickClicked('brickR3C1')"></div>
			<div class="brickStyle brickR3C2" id="brickR3C2" onclick="brickClicked('brickR3C2')"></div>
			<div class="brickStyle brickR3C3" id="brickR3C3" onclick="brickClicked('brickR3C3')"></div>
	   </div>
	   <br/>


  </body>
 </html>


