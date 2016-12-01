<?php

	include('../parts/config.php');

	if( isset($_GET['l']) && isset($_GET['i'])){
		//inserisco...
		$likes = $_GET['l']-1;
		$id = $_GET['i'];
		$author = $_SERVER['REMOTE_ADDR']; //user ip
		$query = "UPDATE `chicosafa`.`chi` SET `likes` = '".$likes."' WHERE `chi`.`id` = ".$id.";";	
		mysqli_query($conn, $query) or die( mysqli_error($conn) );
	}

?>
