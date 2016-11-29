<?php

	include('../parts/config.php');

	if( isset($_POST['content'])){
		//inserisco...
		$content =  mysqli_real_escape_string($conn, $_POST['content']);
		$author = $_SERVER['REMOTE_ADDR']; //user ip

		if (0 !== strpos(strtoupper($content), 'PER')){
			$content = "perchè ".$content;
		}

		$query = "INSERT INTO `chicosafa`.`perche` (`id`, `content`, `author`) VALUES (NULL, '".$content."', '".$author."');";	
		mysqli_query($conn, $query) or die( mysqli_error($conn) );
	}

?>
<script type="text/javascript">
	window.location.replace("../index.php");
</script>