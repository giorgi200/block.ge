<?php
    require_once('./connect.php');
    $hero_articles = $pdo -> query("SELECT * FROM hero_articles WHERE ID = 3") -> fetch();
    // SQL Queries
    $constructions = "SELECT * FROM constructions";
    $investments = "SELECT * FROM investments";
    // Query pdo
    $constructions_count = $pdo -> query("SELECT COUNT(*) FROM `constructions`") -> fetch()[0];
    $investments_count = $pdo -> query("SELECT COUNT(*) FROM `investments`") -> fetch()[0];
    // Query php
    $constructions_req = $pdo -> query($constructions);
    $investments_req = $pdo -> query($investments);  
    $seo_id = 1;
?>
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
            <article class="main_hero_article ">
                <h1><?php echo $ka ? $hero_articles["title_ka"] : $hero_articles["title"]; ?></h1>
                <p>
                    <?php echo nl2br($ka ? $hero_articles["text_ka"] : $hero_articles["text"]) ?>
                </p>
           </article>
        </section>
        <!-- END HERO -->
        <!-- CURRENT INVESTMENTS -->
        <section class="current_const ">
            <div class="const_header mx-auto d-flex justify-content-between">
                <h1><?php echo  $ka ? "ინვვესტიციები" : "INVESTMENTS" ?></h1>
                <div class="const_slider_arrows <?php  if($investments_count > 3){ echo "d-flex"; }?> left" id="sliderBtn">
                    <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                    <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                </div>
            </div>
            <div class="Current_slider_outer">
                <div class="Current_slider_inner d-flex " id="mainSlider">
                <?php
                    while($investments_slider = $investments_req -> fetch()){
                        $investments_id = $investments_slider['ID'];
                        $investments_label = $investments_slider['label'];
                        $investments_label_ka = $investments_slider['label_ka'];
                        $investments_img = $investments_slider['img'];
                        $investments_value = $investments_slider['value'];
                        $investments_location = $investments_slider['location'];
                        $investments_location_ka = $investments_slider['location_ka'];
                        $investments_Shareholding = $investments_slider['Shareholding'];
                        $investments_category_query = $pdo->query("SELECT * FROM categories WHERE ID =" . $investments_slider['category_id']);
                        $investments_category = $investments_category_query->fetch();
                        ?>
                    <div class="Current_slide_object">
                        <div class="slide_header Blue">   
                            <div class="slide_header_line"></div>
                            <h1><?php echo $ka ?  $investments_category['category_name_ka'] : $investments_category['category_name_en']?></h1>
                        </div>
                        <h1 class="reward"><?php echo $ka ? $investments_label_ka : $investments_label ?></h1>
                        <div class="Current_image">
                            <img src="./assets/img/<?php echo $investments_img ?>" alt="<?php echo $investments_label ?>">
                        </div>
                        <div class="objectDetails Blue">
                            <div class="d-flex justify-content-between">
                                <p class="obj_val_label ">Shareholding</p>
                                <p class="obj_val_label ">Value</p>
                            </div>
                            <div class="row justify-content-between">
                                <h2 class="obj_val "><?php echo $investments_Shareholding ?>%</h2>
                                <h2 class="obj_val "><?php echo $investments_value ?></h2>
                            </div>
                            <div class="line_loc d-flex justify-content-between">
                                <p class="loc "><?php echo $ka ? $investments_location_ka : $investments_location ?></p>        
                                <a href="./investment.php?id=<?php echo $investments_id; ?>">
                                    <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                </a>                        
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- COMPLETED INVESTMENTS -->
        <section class="current_const ">
            <div class="const_header mx-auto d-flex justify-content-between">
                <h1><?php echo  $ka ?  "კონსტრუქციები" : "CONSTRUCTION"?></h1>
                <div class="const_slider_arrows  <?php  if($constructions_count > 3){ echo "d-flex"; } ?> left" id="sliderBtn1">
                    <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                    <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                </div>
            
            </div>
            <div class="Current_slider_outer">
                <div class="Current_slider_inner d-flex " id="CompleteSlider">
                    <?php
                        while($constructions_slider = $constructions_req -> fetch()){
                            $id = $constructions_slider['ID'];
                            $label = $constructions_slider['label'];
                            $label_ka = $constructions_slider['label_ka'];
                            $img = $constructions_slider['img'];
                            $value = $constructions_slider['value'];
                            $location = $constructions_slider['location'];
                            $location_ka = $constructions_slider['location_ka'];
                            $category_query = $pdo->query("SELECT * FROM categories WHERE ID =" . $constructions_slider['category_id']);
                            $category = $category_query->fetch();
                    ?>
                    <div class="Current_slide_object">
                        <div class="slide_header">   
                            <div class="slide_header_line"></div>
                            <h1><?php echo $ka ? $category['category_name_ka'] : $category['category_name_en'] ?></h1>
                        </div>
                        <h1 class="reward"><?php echo $ka ? $label_ka : $label  ?></h1>
                        <div class="Current_image">
                            <img src="./assets/img/<?php echo $img ?>" alt="<?php echo $label  ?>">
                        </div>
                        <div class="objectDetails">
                            <p class="obj_val_label">Value</p>
                            <h2 class="obj_val"><?php echo $value  ?></h2>
                            <div class="line_loc d-flex justify-content-between">
                                <p class="loc"><?php echo $ka ? $location_ka : $location  ?></p>        
                                <a href="./construction.php?id=<?php echo $id ?>">
                                    <img src="./assets/svg/object_arrow.svg" alt="arrow left block">
                                </a>                        
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </section> 
    </main>
    <?php require_once('./layout/footer.php') ?>
    <!-- END CONTENT -->
    <script src="./assets/js/slider.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>
<?php $dbh = null; ?>