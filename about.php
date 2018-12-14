<?php
    require_once('./connect.php');
    
    $curent_const = "SELECT * FROM `about`";
    $curent_req = $pdo -> query($curent_const);
    $curent_req2 = $pdo -> query($curent_const);
    $curent_req3 = $pdo -> query($curent_const);
    $paFooter = "paFooter";
    $link_about = "active";
    $seo_id = 5;
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
        <section class="about-us">
            <div class="about_us_inner d-flex">
                <div class="about_slider">
                    <!-- Object 1 -->
                    <article class="about_slider_objs">
                        <div class="arrow_remote">
                            <img src="./assets/svg/about_arrow.svg" alt="block about arrow">
                            <?php
                                while($complete_slider = $curent_req -> fetch()){
                                    $title_ka = $complete_slider['title_ka'];
                                    $title_en = $complete_slider['title_en'];
                            ?>
                            <h1><?php echo $ka ? $title_ka : $title_en  ?></h1>
                                <?php } ?>
                            <img src="./assets/svg/about_arrow.svg" class="active" alt="block about arrow">
                        </div>
                            <?php  
                                while($labels = $curent_req2 -> fetch()){
                                    $text_ka = $labels['text_ka'];
                                    $text_en = $labels['text_en'];
                            ?>
                            <p class="aboutSliderText"><?php echo $ka ? $text_ka : $text_en  ?></p>
                                <?php } ?>
                    </article>
                    <!-- Object 1 -->
                </div>
                <div class="img_place">
                    <img src="./assets/svg/logo.svg" alt="block logo">
                </div>
                <div class="about-us-controller ">
                    <div class="about_line"></div>
                    <div class="about_year">
                        <!-- OBJ 1 -->
                        <?php  
                        $i = 0;
                        while($complete_block = $curent_req3 -> fetch()){
                            $title_ka_block = $complete_block['title_ka'];
                            $title_en_block = $complete_block['title_en'];
                        ?>
                            <div class="years_labels " data-index="<?php echo $i++; ?>">
                                <h1><?php echo $ka ? $title_ka_block : $title_en_block ?></h1>
                                <div class="imgblock">
                                    <div></div>
                                </div>
                            </div>
                        <?php } ?>                
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- END CONTENT -->
    <?php require_once('./layout/footer.php') ?>
    <script src="./assets/js/about.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>