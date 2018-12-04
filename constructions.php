<?php 
    require_once('./connect.php');
    $link_constructions = "active";
    // SQL Query
    $curent_const = "SELECT * FROM constructions WHERE progress = 0";
    $complete_const = "SELECT * FROM constructions WHERE progress = 1";
    // Query pdo
    $hero_articles = $pdo -> query("SELECT * FROM hero_articles WHERE ID = 2") -> fetch();
    $curent_count = $pdo -> query("SELECT COUNT(*) FROM `constructions` WHERE progress = 0") -> fetch()[0];
    $complete_count = $pdo -> query("SELECT COUNT(*) FROM `constructions` WHERE progress = 1") -> fetch()[0];
    // Query php
    $complete_req = $pdo -> query($complete_const);
    $curent_req = $pdo -> query($curent_const);
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
    <!-- HEADER -->
    <?php require_once('./layout/header.php') ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main>
        <!-- HERO -->
        <section class="mainHero" style="background-image: url(./assets/img/<?php echo $hero_articles["img"]; ?>)">
           <article class="heroText">
                <h1><?php echo $hero_articles['title'] ?></h1>
                <p>
                    <?php echo nl2br($hero_articles['text']) ?>
                </p>
           </article>
        </section>
        <!-- END HERO -->
        <!-- Current Constructions -->
        <section class="current_const ">
            <div class="const_header mx-auto d-flex justify-content-between">
                <h1>CURRENT CONSTRUCTION</h1>
                <div class="const_slider_arrows <?php  if($curent_count > 3){ echo "d-flex"; }?> left" id="sliderBtn">
                    <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                    <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                </div>
            </div>
            <div class="Current_slider_outer">
                <div class="Current_slider_inner d-flex " id="mainSlider">
                    <?php
                        while($current_slider = $curent_req -> fetch()){
                            $id = $current_slider['ID'];
                            $label = $current_slider['label'];
                            $img = $current_slider['img'];
                            $value = $current_slider['value'];
                            $location = $current_slider['location'];
                            $category_query = $pdo->query("SELECT * FROM categories WHERE ID =" . $current_slider['category_id']);
                            $category = $category_query->fetch();
                    ?>
                    <!-- OBJECT 1 -->
                    <div class="Current_slide_object">
                        <div class="slide_header">   
                            <div class="slide_header_line"></div>
                            <h1><?php echo $category['category_name_en'] ?></h1>
                        </div>
                        <h1 class="reward"><?php echo $label ?></h1>
                        <div class="Current_image">
                            <img src="./assets/img/Construction/<?php echo $img ?>" alt="<?php echo $category['category_name_en'] ?>, block">
                        </div>
                        <div class="objectDetails">
                            <p class="obj_val_label">Value</p>
                            <h2 class="obj_val"><?php echo $value ?></h2>
                            <div class="line_loc d-flex justify-content-between">
                                <p class="loc"><?php echo $location ?></p>        
                                <a href="./construction.php?id=<?php echo $id ?>">
                                    <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                </a>                        
                            </div>
                        </div>
                    </div>
                        <?php  } ?>
                </div>
            </div>
        </section>
        <!-- COMPLETED CONSTRUCTION -->
        <section class="current_const black ">
            <div class="const_header mx-auto d-flex justify-content-between">
                <h1 class="btowc">COMPLETED CONSTRUCTION</h1>
                <div class="const_slider_arrows <?php  if($curent_count > 3){ echo "d-flex"; }?> left" id="sliderBtn1">
                    <img src="./assets/svg/slider_arrows_black.svg" alt="block slider arrow">
                    <img src="./assets/svg/slider_arrows_black.svg" alt="block slider arrow">
                </div>
            </div>
            <div class="Current_slider_outer">
                <div class="Current_slider_inner d-flex " id="CompleteSlider">
                    <?php
                        while($complete_slider = $complete_req -> fetch()){
                            $complete_label = $complete_slider['label'];
                            $complete_img = $complete_slider['img'];
                            $complete_value = $complete_slider['value'];
                            $complete_location = $complete_slider['location'];
                            $complete_category_query = $pdo->query("SELECT * FROM categories WHERE ID =" . $complete_slider['category_id']);
                            $complete_category = $complete_category_query->fetch();
                    ?>
                    <!-- OBJECT 1 -->
                    <div class="Current_slide_object">
                        <div class="slide_header" >   
                            <div class="slide_header_line btowbr"></div>
                            <h1 class="btowc color28"><?php echo $complete_category['category_name_en'] ?></h1>
                        </div>
                        <h1 class="reward btowc"><?php echo $complete_label ?></h1>
                        <div class="Current_image">
                            <img src="./assets/img/Construction/<?php echo $complete_img ?>" alt="Golden Tulip">
                        </div>
                        <div class="objectDetails btowb">
                            <p class="obj_val_label wtobc">Value</p>
                            <h2 class="obj_val wtobc"><?php echo $complete_value ?></h2>
                            <div class="line_loc d-flex justify-content-between">
                                <p class="loc wtobc"><?php echo $complete_location ?></p>        
                                <a href="./construction.php">
                                    <img src="./assets/svg/object_arrow_black.svg" alt="arrow left block">
                                </a>                        
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </section>
    </main>
    <!-- END CONTENT -->
    <?php require_once('./layout/footer.php') ?>
    <script src="./assets/js/slider.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>