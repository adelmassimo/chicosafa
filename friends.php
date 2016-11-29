<?php include('parts/header.php'); 
      $page_id = 5;

      $question = random_int(0, 5);
        if ($question == 0) {$question = "Chi?"; $url="insertChi.php";}
        elseif ($question == 1) {$question = "Cosa fa?"; $url="insertCosaFa.php";}
        elseif ($question == 2) {$question = "Quando?"; $url="insertQuando.php";}
        elseif ($question == 3) {$question = "Dove?"; $url="insertDove.php";}
        elseif ($question == 4) {$question = "Perchè?"; $url="insertPerche.php";}
        elseif ($question == 5) {$question = "Con chi?"; $url="insertCon.php";}
        $filterName = $_GET['fn']; 
?>
<body>

    <?php include('parts/menu.php'); ?>

    <div id="main">
        <div id="title">
            <a href="index.php">
                <!--<h2>  ChiCosaFa 2.0 </h2>-->
                <img class="logo" src="img/logo.svg">
                <img class="casual_image" src="img/c1.svg" style="width: <?php echo random_int(2, 15); ?>%;">
                <img class="casual_image" src="img/c2.svg" style="width: <?php echo random_int(2, 15); ?>%;"> 
                <img class="casual_image" src="img/c3.svg" style="width: <?php echo random_int(2, 15); ?>%;">
                <img class="casual_image" src="img/c4.svg" style="width: <?php echo random_int(2, 15); ?>%;">
                <img class="casual_image" src="img/c5.svg" style="width: <?php echo random_int(2, 15); ?>%;"> 
                <img class="casual_image" src="img/c6.svg" style="width: <?php echo random_int(2, 15); ?>%;">
            </a> 
        </div>

        <div id="question" class="story" style="background: rgb(250, 250, 250); max-width: none;">
            <h2 style="text-align:center;"> Accedi a un gruppo </h2>
            <form action="#" method="post">
                Nome gruppo: <input type="text" name="content" style="width:100%;" autofocus>
                <br>
                Password: <input type="text" name="content" style="width:100%;">
                <br>
                <input type="submit" value="Accedi" style="width:100%;">
            </form>
        </div>
        <div id="question" class="story" style="background: rgb(250, 250, 250); max-width: none;">
            <h2 style="text-align:center;"> Crea un gruppo </h2>
            <form action="#" method="post">
                Nome gruppo: <input type="text" name="content" style="width:100%;" autofocus>
                <br>
                Password: <input type="text" name="content" style="width:100%;">
                <br>
                <input type="submit" value="Crea" style="width:100%;">
            </form>
        </div>

        <div class="content">

   


        </div>

<?php include('footer.php');?>