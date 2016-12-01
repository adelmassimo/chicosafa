<?php

	include('header.php');

	print_r($_POST);

	if( isset($_POST['content'])){
		//inserisco...
		$content =  mysqli_real_escape_string($conn, $_POST['content']);
		$author = "culocane"; //user ip
		$query = "INSERT INTO `chicosafa`.`chi` (`id`, `content`, `author`) VALUES (NULL, '".$content."', '".$author."');";	
		mysqli_query($conn, $query) or die( mysqli_error($conn) );
	}

?>

<a href="index.php"> BACK TO THE FUTURE </a>

<?php

	include('footer.php');

?>