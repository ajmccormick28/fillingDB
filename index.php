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
			<div class="brickStyle brickR1C1" id="a1" onclick="brickClicked('a1')"></div>
			<div class="brickStyle brickR1C2" id="a2" onclick="brickClicked('a2')"></div>
			<div class="brickStyle brickR1C3" id="a3" onclick="brickClicked('a3')"></div>
			<!-- Row 2 -->
			<div class="brickStyle brickR2C1" id="b1" onclick="brickClicked('b1')"></div>
			<div class="brickStyle brickR2C2" id="b2" onclick="brickClicked('b2')"></div>
			<div class="brickStyle brickR2C3" id="b3" onclick="brickClicked('b3')"></div>
			<!-- Row 3 -->
			<div class="brickStyle brickR3C1" id="c1" onclick="brickClicked('c1')"></div>
			<div class="brickStyle brickR3C2" id="c2" onclick="brickClicked('c2')"></div>
			<div class="brickStyle brickR3C3" id="c3" onclick="brickClicked('c3')"></div>
      <p>Hello There!</p>
	   </div>
	   <br/>
     


  </body>
 </html>


