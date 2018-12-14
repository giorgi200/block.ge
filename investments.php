<?php 
require_once('./connect.php');
$link_investments = "active";
$curent_const = "SELECT * FROM investments WHERE progress = 1";
$complete_const = "SELECT * FROM investments WHERE progress = 0";
    // Query pdo
$hero_articles = $pdo -> query("SELECT * FROM hero_articles WHERE ID = 1") -> fetch();
$curent_count = $pdo -> query("SELECT COUNT(*) FROM `investments` WHERE progress = 0") -> fetch()[0];
$complete_count = $pdo -> query("SELECT COUNT(*) FROM `investments` WHERE progress = 1") -> fetch()[0];
    // Query php
$complete_req = $pdo -> query($complete_const);
$curent_req = $pdo -> query($curent_const);
$seo_id = 2;

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
            <article class="heroText blue">
                <h1><?php echo  $ka ? $hero_articles["title_ka"] : $hero_articles["title"]; ?></h1>
                <p>
                    <?php echo $ka ? $hero_articles["text_ka"] : $hero_articles["text"];; ?>
                </p>
            </article>
        </section>
        <!-- END HERO -->
        <!-- CURRENT INVESTMENTS -->
        <section class="current_const ">
            <div class="const_header mx-auto d-flex justify-content-between">
                <h1><?php echo $ka ? "მიმდინარე ინვესტიციები" : "CURRENT INVESTMENTS" ?></h1>
                <div class="const_slider_arrows <?php  if($curent_count > 3){ echo "d-flex"; }?> left" id="sliderBtn">
                    <img src="assets/svg/slider_arrows.svg" alt="block slider arrow">
                    <img src="assets/svg/slider_arrows.svg" alt="block slider arrow">
                </div>
            </div>
            <div class="Current_slider_outer">
                <div class="Current_slider_inner d-flex " id="mainSlider">
                    <!-- OBJECT 1 -->
                    <?php
                    while($complete_slider = $complete_req -> fetch()){
                        $complete_id = $complete_slider['ID'];
                        $complete_label = $complete_slider['label'];
                        $complete_label_ka = $complete_slider['label_ka'];
                        $complete_img = $complete_slider['img'];
                        $complete_value = $complete_slider['value'];
                        $complete_location = $complete_slider['location'];
                        $complete_location_ka = $complete_slider['location_ka'];
                        $complete_Shareholding = $complete_slider['Shareholding'];
                        $complete_category_query = $pdo->query("SELECT * FROM categories WHERE ID =" . $complete_slider['category_id']);
                        $complete_category = $complete_category_query->fetch();
                        ?>
                        <div class="Current_slide_object">
                            <div class="slide_header Blue">   
                                <div class="slide_header_line"></div>
                                <h1><?php echo $ka ? $complete_category['category_name_ka'] : $complete_category['category_name_en']?></h1>
                            </div>
                            <h1 class="reward"><?php echo $ka ? $complete_label_ka : $complete_label ?></h1>
                            <div class="Current_image">
                                <img src="assets/img/<?php echo $complete_img ?>" alt="<?php echo $complete_label ?>">
                            </div>
                            
                            <div class="objectDetails Blue">
                                <div class="d-flex justify-content-between">
                                    <p class="obj_val_label ">Shareholding</p>
                                    <p class="obj_val_label ">Value</p>
                                </div>
                                <div class="row justify-content-between">
                                    <h2 class="obj_val "><?php echo $complete_Shareholding ?>%</h2>
                                    <h2 class="obj_val "><?php echo $complete_value ?></h2>
                                </div>
                                <div class="line_loc d-flex justify-content-between">
                                    <p class="loc "><?php echo $ka ? $complete_location_ka : $complete_location ?></p>        
                                    <a href="./investment.php?id=<?php echo $complete_id ?>">
                                        <img src="assets/svg/object_arrow.svg" alt="arrow left block">
                                    </a>                        
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- COMPLETED INVESTMENTS -->
            <section class="current_const black ">
                <div class="const_header mx-auto d-flex justify-content-between">
                    <h1 class="btowc"><?php echo $ka ? "შესრულებული ინვესტიციები" :  "COMPLETED INVESTMENTS"?></h1>
                    <div class="const_slider_arrows <?php  if($curent_count > 3){ echo "d-flex"; }?> left" id="sliderBtn1">
                        <img src="assets/svg/slider_arrows_black.svg" alt="block slider arrow">
                        <img src="assets/svg/slider_arrows_black.svg" alt="block slider arrow">
                    </div>
                </div>
                <div class="Current_slider_outer">
                    <div class="Current_slider_inner d-flex " id="CompleteSlider">
                        <?php
                        $obj_i = 0;
                        while($current_slider = $curent_req -> fetch()){
                            $id = $current_slider['ID'];
                            $label = $current_slider['label'];
                            $label_ka = $current_slider['label_ka'];
                            $img = $current_slider['img'];
                            $value = $current_slider['value'];
                            $location = $current_slider['location'];
                            $location_ka = $current_slider['location_ka'];
                            $Shareholding = $current_slider['Shareholding'];
                            $category_query = $pdo->query("SELECT * FROM categories WHERE ID =" . $current_slider['category_id']);
                            $category = $category_query->fetch(); 
                            ?>
                            <!-- OBJECT <?php echo $obj_i++ ?> -->
                            <div class="Current_slide_object">
                                <div class="slide_header">   
                                    <div class="slide_header_line btowbr"></div>
                                    <h1 class="btowc color28"><?php echo $ka ? $category['category_name_en'] : $category['category_name_en'] ?></h1>
                                </div>
                                <h1 class="reward btowc"><?php echo  $ka ? $label_ka : $label ?></h1>
                                <div class="Current_image">
                                    <img src="assets/img/<?php echo $img ?>" alt="<?php echo $label ?>, block">
                                </div>
                                <div class="objectDetails btowb">
                                    <div class="d-flex justify-content-between">
                                        <p class="obj_val_label wtobc">Shareholding</p>
                                        <p class="obj_val_label wtobc">Value</p>
                                    </div>
                                    <div class="row justify-content-between">
                                        <h2 class="obj_val wtobc"><?php echo $Shareholding ?>%</h2>
                                        <h2 class="obj_val wtobc"><?php echo $value ?></h2>
                                    </div>
                                    <div class="line_loc d-flex justify-content-between">
                                        <p class="loc wtobc"><?php echo $ka ? $location_ka : $location ?></p>        
                                        <a href="./investment.php?id=<?php echo $id ?>">
                                            <img src="assets/svg/object_arrow_black.svg" alt="arrow left block">
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
            <script src="assets/js/script.js"></script>
        </body>
        </html>