<?php

	include('../parts/config.php');

	if( isset($_POST['content'])){
		//inserisco...
		$tag= ($_POST['tag'] == "")? "none" : $_POST['tag'];
		$content =  mysqli_real_escape_string($conn, $_POST['content']);
		$author = $_SERVER['REMOTE_ADDR']; //user ip
		$query = "INSERT INTO `chicosafa`.`chi` (`id`, `content`, `author`, `tag`) VALUES (NULL, '".$content."', '".$author."', '".$tag."');";	
		mysqli_query($conn, $query) or die( mysqli_error($conn) );
	}

?>
<script type="text/javascript">
	window.location.replace("../index.php");
</script>