<?php
	//include "searchVar.php";

 	$servername = "localhost";
 	$dbname = "database_v4";
 	$uname = "root";
 	$psword = "";
 	//$p = "";
  $ageFromDB = $firstNameFromDB = $lastNameFromDB = "";

	$input = (isset($_REQUEST['input']) ? $_REQUEST['input'] : null);
	$filter = (isset($_REQUEST['filter']) ? $_REQUEST['filter'] : null);

	//echo $p;
	//echo $searchFil;

	if($input !== null)
	{
		try {
		  $conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $uname, $psword);
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // For max SQL injection safety

			$stmt = null;
		  $input .= '%';

			switch($filter)
			{
				case "firstname":
				  $stmt = $conn->prepare("SELECT 'a' as source, brickNum, firstName, lastName, age FROM atable WHERE firstName LIKE ? UNION SELECT 'b' as source, brickNum, firstName, lastName, age FROM btable WHERE firstName LIKE ? UNION SELECT 'c' as source, brickNum, firstName, lastName, age FROM ctable WHERE firstName LIKE ?");
				  $stmt->bindParam(1, $input, PDO::PARAM_STR, 50);
				  $stmt->bindParam(2, $input, PDO::PARAM_STR, 50);
				  $stmt->bindParam(3, $input, PDO::PARAM_STR, 50);
				  $stmt->execute();
				  break;

		    case "lastname":
				  $stmt = $conn->prepare("SELECT 'a' as source, brickNum, firstName, lastName, age FROM atable WHERE firstName LIKE ? UNION SELECT 'b' as source, brickNum, firstName, lastName, age FROM btable WHERE firstName LIKE ? UNION SELECT 'c' as source, brickNum, firstName, lastName, age FROM ctable WHERE firstName LIKE ?");
				  $stmt->bindParam(1, $input, PDO::PARAM_STR, 50);
				  $stmt->bindParam(2, $input, PDO::PARAM_STR, 50);
				  $stmt->bindParam(3, $input, PDO::PARAM_STR, 50);
				  $stmt->execute();
				  break;

		    case "age":
				  $stmt = $conn->prepare("SELECT 'a' as source, brickNum, firstName, lastName, age FROM atable WHERE firstName LIKE ? UNION SELECT 'b' as source, brickNum, firstName, lastName, age FROM btable WHERE firstName LIKE ? UNION SELECT 'c' as source, brickNum, firstName, lastName, age FROM ctable WHERE firstName LIKE ?");
				  $stmt->bindParam(1, $input, PDO::PARAM_STR, 50);
				  $stmt->bindParam(2, $input, PDO::PARAM_STR, 50);
				  $stmt->bindParam(3, $input, PDO::PARAM_STR, 50);
				  $stmt->execute();
			    break;
			}

			 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
			 $result = $stmt->fetchAll();
			 $maxShow = 0;

			 if($result)
			 {
			   echo "<br/>";

			   foreach($result as $assocArray)
			   {
				   $tempString = $assocArray["brickNum"];
				   for($i = strlen($assocArray["brickNum"]); $i < 3; $i++){
					   $tempString = "0" . $tempString; 
				   }
				   $tempString = $assocArray["source"] . $tempString;
				 
				   echo "<div onclick=\"brickClicked('" . $tempString . "')\">". $assocArray["firstName"] . " " . $assocArray["lastName"] . " " . $assocArray["age"] . " Years Old" . "</div>";
				   echo "<br/>";


				   $maxShow++;

				   if($maxShow > 3)
				   {
				     break;
				   }
			   }
			   echo "<br/>";
			 }


		}
		catch(PDOException $e) {
		  echo "Error: " . $e->getMessage();
		}
	}
	$conn = null;
?> 