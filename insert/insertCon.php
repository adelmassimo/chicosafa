<?php

	include('../parts/config.php');

	if($_POST['content'] != NULL){
		$content =  mysqli_real_escape_string($conn, $_POST['content']);
		$author = $_SERVER['REMOTE_ADDR']; //user ip

		if (0 !== strpos(strtoupper($content), 'CON')){
			if (0 !== strpos(strtoupper($content), 'INSIEME')){
					$content = "con ".$content;
			}			
		}
		$query = "INSERT INTO `chicosafa`.`con` (`id`, `content`, `author`) VALUES (NULL, '".$content."', '".$author."');";	
		mysqli_query($conn, $query) or die( mysqli_error($conn) );
	}

?>
<script type="text/javascript">
	window.location.replace("../index.php");
</script>