<link rel="stylesheet" type="text/css" href="css/menu.css" />

<ul> <li id="toggle-nav-menu" style="background: <?php echo RandomColor();?>;"> ☰ </li> </ul>
<nav id="left-menu">
	<ul>
		<li style="background: <?php echo RandomColor(); if($page_id==1) echo ';width: 100px;'?>;"> <a href="index.php">home</a></li>

		<li style="background: <?php echo RandomColor(); if($page_id==2) echo ';width: 100px;'?>;"> <a href="likes.php">top rated</a></li>

		<li style="background: <?php echo RandomColor(); if($page_id==5) echo ';width: 100px;'?>;"> <a href="friends.php">Amici</a></li>

		<li style="background: <?php echo RandomColor(); if($page_id==3) echo ';width: 100px;'?>;"> <a href="chisiamo.php">chi siamo</a></li>

		<li style="background: <?php echo RandomColor(); if($page_id==4) echo ';width: 100px;'?>;"> <a href="work.php">lavora con noi</a></li>
	</ul>
</nav>

<div id="cover"></div>
<script src="js/classie.js"></script>
<script>
    var menuLeft = document.getElementById( 'left-menu' )
        li = document.getElementById('toggle-nav-menu')
        coverer = document.getElementById('cover')
        body = document.body;

    li.onclick = function(){
        classie.toggle( menuLeft, 'open' );
        classie.toggle( li , 'active');    
        classie.toggle( body , 'deactive');
        classie.toggle( coverer, 'cover')       
    };
    coverer.onclick = function(){
        classie.toggle( menuLeft, 'open' );
        classie.toggle( li , 'active');    
        classie.toggle( body , 'deactive');
        classie.toggle( coverer, 'cover');   
    }
</script>