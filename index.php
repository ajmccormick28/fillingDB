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
      include "insertDB.php";
    ?>
    <div class="parent">
			<!-- Row 1 -->
			<div class="brickStyle brickR1C1" id="a001" onclick="brickClicked('a001')"></div>
			<div class="brickStyle brickR1C2" id="a002" onclick="brickClicked('a002')"></div>
			<div class="brickStyle brickR1C3" id="a003" onclick="brickClicked('a003')"></div>
			<!-- Row 2 -->
			<div class="brickStyle brickR2C1" id="b001" onclick="brickClicked('b001')"></div>
			<div class="brickStyle brickR2C2" id="b002" onclick="brickClicked('b002')"></div>
			<div class="brickStyle brickR2C3" id="b003" onclick="brickClicked('b003')"></div>
			<!-- Row 3 -->
			<div class="brickStyle brickR3C1" id="c001" onclick="brickClicked('c001')"></div>
			<div class="brickStyle brickR3C2" id="c002" onclick="brickClicked('c002')"></div>
			<div class="brickStyle brickR3C3" id="c003" onclick="brickClicked('c003')"></div>
	   </div>
	   <br/>
     


  </body>
 </html>


