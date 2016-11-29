<link rel="stylesheet" type="text/css" href="css/menu.css" />
<ul>
	<li style="background: <?php echo RandomColor(); if($page_id==1) echo ';width: 100px;'?>;"> <a href="index.php">home</a></li>

	<li style="background: <?php echo RandomColor(); if($page_id==2) echo ';width: 100px;'?>;"> <a href="likes.php">top rated</a></li>

	<li style="background: <?php echo RandomColor(); if($page_id==5) echo ';width: 100px;'?>;"> <a href="friends.php">Amici</a></li>

	<li style="background: <?php echo RandomColor(); if($page_id==3) echo ';width: 100px;'?>;"> <a href="chisiamo.php">chi siamo</a></li>

	<li style="background: <?php echo RandomColor(); if($page_id==4) echo ';width: 100px;'?>;"> <a href="work.php">lavora con noi</a></li>
</ul>