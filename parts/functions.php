<?php
	
	function RandomColor(){
		$result = "rgb(255, 209, 128)";
		switch (random_int(0, 5)) {
			case 0:
				$result = "rgb(255, 255, 141)";
				break;
			case 1:
				$result = "rgb(255, 138, 128)";
				break;				
			case 2:
				$result = "rgb(255, 209, 128)";
				break;
			case 3:
				$result = "rgb(128, 216, 255)";
				break;
			case 4:
				$result = "rgb(167, 255, 235)";
				break;
			case 5:
				$result = "rgb(204, 255, 144)";
				break;
			default:
				$result = "rgb(250, 250, 250)";
				break;
		}

		return $result;
	}


	function displayRemoveFilter(){
		echo "<div id='rm_filters' style=>
				<a href='index.php'> ✘ remove filters</a>
			  </div>



		";
	}


?>




