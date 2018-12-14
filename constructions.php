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
    $seo_id = 3;
?>
<!DOCTYPE html>
<html lang="<?php echo $ka ? "ka" : "en" ?>">
<?php require_once('./layout/head.php'); ?>
<body>
    <!-- HEADER -->
    <?php require_once('./layout/header.php') ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main>
        <!-- HERO -->
        <section class="mainHero" style="background-image: url(./assets/img/<?php echo $hero_articles["img"]; ?>)">
           <article class="heroText">
                <h1><?php echo $ka ? $hero_articles["title_ka"] : $hero_articles["title"]; ?></h1>
                <p>
                    <?php echo nl2br($ka ? $hero_articles["text_ka"] : $hero_articles["text"]) ?>
                </p>
           </article>
        </section>
        <!-- END HERO -->
        <!-- Current Constructions -->
        <section class="current_const ">
            <div class="const_header mx-auto d-flex justify-content-between">
                <h1><?php echo $ka ? "მიმდინარე კონსტრუქციები" : "CURRENT CONSTRUCTION" ?></h1>
                <div class="const_slider_arrows <?php  if($curent_count > 4){ echo "d-flex"; }?> left" id="sliderBtn">
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
                            $label_ka = $current_slider['label_ka'];
                            $img = $current_slider['img'];
                            $value = $current_slider['value'];
                            $location = $current_slider['location'];
                            $location_ka = $current_slider['location_ka'];
                            $category_query = $pdo->query("SELECT * FROM categories WHERE ID =" . $current_slider['category_id']);
                            $category = $category_query->fetch();
                    ?>
                    <!-- OBJECT 1 -->
                    <div class="Current_slide_object">
                        <div class="slide_header">   
                            <div class="slide_header_line"></div>
                            <h1><?php echo $ka ? $category['category_name_ka'] : $category['category_name_en'] ?></h1>
                        </div>
                        <h1 class="reward"><?php echo $ka ? $label_ka : $label ?></h1>
                        <div class="Current_image">
                            <img src="./assets/img/<?php echo $img ?>" alt="<?php echo $category['category_name_en'] ?>, block">
                        </div>
                        <div class="objectDetails">
                            <p class="obj_val_label">Value</p>
                            <h2 class="obj_val"><?php echo $value ?></h2>
                            <div class="line_loc d-flex justify-content-between">
                                <p class="loc"><?php echo $ka ? $location_ka : $location  ?></p>        
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
                <h1 class="btowc"><?php echo $ka ? "შესრულებული კონსტრუქციები" : "COMPLETED CONSTRUCTION" ?></h1>
                <div class="const_slider_arrows <?php  if($curent_count > 4){ echo "d-flex"; }?> left" id="sliderBtn1">
                    <img src="./assets/svg/slider_arrows_black.svg" alt="block slider arrow">
                    <img src="./assets/svg/slider_arrows_black.svg" alt="block slider arrow">
                </div>
            </div>
            <div class="Current_slider_outer">
                <div class="Current_slider_inner d-flex " id="CompleteSlider">
                    <?php
                        while($complete_slider = $complete_req -> fetch()){
                            $complete_id = $complete_slider['ID'];
                            $complete_label = $complete_slider['label'];
                            $complete_label_ka = $complete_slider['label_ka'];
                            $complete_img = $complete_slider['img'];
                            $complete_value = $complete_slider['value'];
                            $complete_location = $complete_slider['location'];
                            $complete_location_ka = $complete_slider['location_ka'];
                            $complete_category_query = $pdo->query("SELECT * FROM categories WHERE ID =" . $complete_slider['category_id']);
                            $complete_category = $complete_category_query->fetch();
                    ?>
                    <!-- OBJECT 1 -->
                    <div class="Current_slide_object">
                        <div class="slide_header" >   
                            <div class="slide_header_line btowbr"></div>
                            <h1 class="btowc color28"><?php echo $ka ?  $complete_category['category_name_ka'] : $complete_category['category_name_en'] ?></h1>
                        </div>
                        <h1 class="reward btowc"><?php echo $ka ? $complete_label_ka : $complete_label ?></h1>
                        <div class="Current_image">
                            <img src="./assets/img/<?php echo $complete_img ?>" alt="<?php echo $complete_label ?>">
                        </div>
                        <div class="objectDetails btowb">
                            <p class="obj_val_label wtobc">Value</p>
                            <h2 class="obj_val wtobc"><?php echo $complete_value ?></h2>
                            <div class="line_loc d-flex justify-content-between">
                                <p class="loc wtobc"><?php echo $ka ? $complete_location_ka : $complete_location ?></p>        
                                <a href="./construction.php?id=<?php echo $complete_id?>">
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