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
  <body onload="searchNameClicked()">
  <?php
	    //include 'searchVar.php';
	    include 'searchDB.php';

	  ?>
	  <form class="form-inline" action="">
	    <input class="form-control mr-sm-2" id="searchbar" type="text" placeholder="Search" onkeyup="searchBar(this.value)">
	    <button class="btn btn-success" type="submit">Search</button>
	    <br/>
	    <span id="tem2"></span>
	    <br/>
	    <!-- State -->
			<label for="searchFilter" class="font">Filter Search:</label>
			<br/>
			<select name="searchFilter" onchange="filter(this.value)" id="searchFilter">
		        <option value="firstname">First Name</option>
		        <option value="lastname">Last Name</option>
		        <option value="age">Age</option>
		  </select>
		  <br/>
		  <span id="tem"></span>
			<br/>
			<?php
				echo "<p>First Name: " . $firstNameFromDB . "</p>";
				echo "<p>Last Name: " . $lastNameFromDB . "</p>";
				echo "<p>Age: " . $ageFromDB . "</p>";
			?>
			<br/>
	  </form>
    <?php
      include "insertDB.php";
    ?>
		<iframe src="whatever.html" id="ba">
        </iframe>
	   <br/>
     


  </body>
 </html>


