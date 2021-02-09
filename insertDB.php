<?php

	function addBricks($brickGroup, $conn)
	{
		for($i = 1; $i < 10; $i++)
    {
      $sql = $conn->prepare("INSERT INTO filltable (brickGroup, brickNum)
      VALUES (:brickGroup, :brickNum)");
      $sql->bindParam(':brickGroup', $brickGroup);
      $sql->bindParam(':brickNum', $i);
      $sql->execute();
    }
	}

	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $uname, $psword);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$brickGroup = 'a';
		addBricks($brickGroup, $conn);
		$brickGroup = 'b';
    addBricks($brickGroup, $conn);
    $brickGroup = 'c';
    addBricks($brickGroup, $conn);


	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
		$conn = null;

?>