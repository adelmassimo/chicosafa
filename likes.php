<?php include('parts/header.php'); 
      $page_id = 2;
        
      $question = rand(0, 5);
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
                <img src="img/logo.svg">
            </a> 
        </div>

        <div id="question" class="story" style="background: rgb(250, 250, 250); max-width: none;">
            <h2 style="text-align:center;"> <?php echo $question; ?> ✍ </h2>
            <form action="insert/<?php echo $url; ?>" method="post">
                <input type="text" name="content" style="width:100%;">
                <br>
                <input type="submit" value="Rispondi kosì" style="width:100%;">
            </form>
        </div>

        <div class="content">

                <?php
                    if($filterName == null)
                        $query = "SELECT * FROM stories ORDER BY likes DESC";
                    else{
                        $query = "SELECT * FROM stories WHERE chi='".$filterName."' ORDER BY likes DESC;";
                        displayRemoveFilter();
                    }
                    $result = mysqli_query($conn, $query);
                    $index = 0;
                    $id = 0;
                    while ( $row = mysqli_fetch_array($result) ){
                        $id = $id +1;
                ?>
                    <article id="story_<?php echo $id; ?>">
                        <div class="story" style="background: <?php echo RandomColor(); ?>; padding-top:<?php echo rand(1, 10)*5; ?>px;">
                            <p style="font-size: <?php echo rand(14, 20); ?>px;">
                                <a href="index.php?fn=<?php echo $row['chi'] ?>"> <?php echo $row['chi'] ?> </a><br>  
                                <?php echo $row['cosafa'] ?>   <br> 
                                <?php echo $row['quando'] ?>   <br> 
                                <?php echo $row['dove'] ?>   <br> 
                                <?php echo $row['perche'] ?>  <br> 
                                <?php echo $row['con'] ?> <br>  
                            </p>
                            <div class="display-like">
                                <p class='number-likes'> <?php echo $row['likes']?> </p>
                                <a class="like <?php echo $index?>" id="<?php echo 'l='.$row['likes'].'&i='.$row['id']?>">▲</a>
                                <a class="unlike <?php echo $index?>" id="<?php echo 'l='.$row['likes'].'&i='.$row['id']?>"> ▾</a>
                            </div>
                        </div>
                    </article>
                <?php
                    $index +=1;
                    };
                ?>


        </div>

<?php include('parts/footer.php');?>