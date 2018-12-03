<?php 
    require_once('./connect.php');
    $curent_const = "SELECT * FROM constructions WHERE progress = 0";
    $curent_req = $pdo -> query($curent_const);

    $complete_const = "SELECT * FROM constructions WHERE progress = 1";
    $curent_count = $pdo -> query("SELECT COUNT(*) FROM `constructions` WHERE progress = 0") -> fetch()[0];
    $complete_count = $pdo -> query("SELECT COUNT(*) FROM `constructions` WHERE progress = 1") -> fetch()[0];
    $complete_req = $pdo -> query($complete_const);

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
    <header>
        <nav class="headerNav d-flex align-items-center">
            <div class="MainLogo">
                <a href="./main.html">
                    <img src="./assets/svg/logo.svg" alt="Block Logo">
                </a>
            </div>
            <ul class="MainNav justify-content-between d-flex ">
                <li class="navItems">
                    <a href="./about_us.html">ABOUT US</a>
                </li>

                <li class="navItems">
                    <a href="./investments.html">INVESTMENTS</a>
                </li>

                <li class="navItems ">
                    <a href="" class="active">CONSTRUCTION</a>
                </li>

                <li class="navItems">
                    <a href="./constructions.php">PARTNERS</a>
                </li>

                <li class="navItems">
                    <a href="./csr.html">CSR</a>
                </li>

            </ul>
            <ul class="MainNavRight d-flex">
                <div class="searchIcon ">
                    <input type="text" placeholder="Search" class="searchValue">
                    <img src="./assets/svg/search.svg" alt="Block searchIcon">
                </div>
                <div id="language">
                    <h4>GEO</h4>
                </div>
            </ul>
        </nav>
    </header>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main>
        <!-- HERO -->
        <section class="mainHero" style="background-image: url(./assets/img/main.png)">
           <article class="heroText">
                <h1>WITH MORE THAN 25 YEARS OF EXPERIENCE</h1>
                <p>
                    Block has realized over 50 construction projects worth more than $200 million, both for public and private sectors. Today Block owns and operates Block Georgia, which is a pure construction company, and BAUM Constructions, which is a construction management company.
                </p>
           </article>
        </section>
        <!-- END HERO -->
        <!-- Current Constructions -->
        <section class="current_const ">
            <div class="const_header mx-auto d-flex justify-content-between">
                <h1>CURRENT CONSTRUCTION</h1>
                <?php  if($curent_count > 3){?>
                
                    <div class="const_slider_arrows d-flex left" id="sliderBtn">
                        <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                        <img src="./assets/svg/slider_arrows.svg" alt="block slider arrow">
                    </div>
                <?php } ?>
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
                            <img src="./assets/img/Construction/<?php echo $img ?>" alt="Golden Tulip">
                        </div>
                        <div class="objectDetails">
                            <p class="obj_val_label">Value</p>
                            <h2 class="obj_val"><?php echo $value ?></h2>
                            <div class="line_loc d-flex justify-content-between">
                                <p class="loc"><?php echo $location ?></p>        
                                <a href="./constructions.php?id=<?php echo $id ?>">
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
                <?php  if($complete_count > 3){?>
                    <div class="const_slider_arrows d-flex left" id="sliderBtn1">
                        <img src="./assets/svg/slider_arrows_black.svg" alt="block slider arrow">
                        <img src="./assets/svg/slider_arrows_black.svg" alt="block slider arrow">
                    </div>
                <?php } ?>
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
                        <div class="slide_header">   
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
                                <a href="./constructions.php">
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
    <footer class=" justify-content-between align-items-center d-flex ">
        <div class="footerContacts justify-content-between d-flex">
            <p>V.Beridze. #6, Tbilisi, Georgia 0108</p>

            <p>+995 598 399 388</p>
                
            <p>info@block.ge</p>        
        </div>
        
        <p class="footerSocial">facebook</p>
    </footer>
    
    <script src="./assets/js/script.js"></script>
</body>
</html>