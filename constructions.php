<?php
    require_once('./connect.php');
    $get_id = $_GET['id'];
    $curent_const = "SELECT * FROM constructions WHERE ID = " . $get_id;
    $curent_req = $pdo -> query($curent_const)->fetch();

    $label = $curent_req['label'];
    $img = $curent_req['img'];
    $value = $curent_req['value'];
    $location = $curent_req['location'];
    $about_en = $curent_req['about_en'];
    $about_ka = $curent_req['about_ka'];
    $web_link = $curent_req['web_link'];
    $web_name = $curent_req['web_name'];
    $icon = $curent_req['icon'];
    $slide_imgs = $curent_req['slide_imgs'];
    $decoded_imgs = json_decode($slide_imgs);
    


?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <a href="">ABOUT US</a>
                </li>

                <li class="navItems">
                    <a href="./investments.html">INVESTMENTS</a>
                </li>

                <li class="navItems">
                    <a href="./index.html">CONSTRUCTION</a>
                </li>

                <li class="navItems">
                    <a href="http://">PARTNERS</a>
                </li>

                <li class="navItems">
                    <a href="#" class="active">CSR</a>
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
        <section class="mainHero" >
            <div class="bgslider_images">
                <?php   
                    foreach($decoded_imgs as $obj){
                ?>
                    <div style="background-image: url('./assets/img/<?php   echo $obj->img; ?>')"></div>
                <?php }?>
            </div>
            <div class="bgslider_controller">
                <div class="selected_bgsliders">
                    <?php
                        $i = 0;
                        foreach($decoded_imgsl as $objl){ 
                    ?>
                        <div class="bgsliders_block active" data-index="0">
                            <div></div>
                        </div>
                    <?php } ?>
                </div>
                <img src="./assets/svg/slider_arrows_gray.svg" alt="Block slider arrow" >
                <img src="./assets/svg/slider_arrows_gray.svg" alt="Block slider arrow">
            </div>
          <div class="sinble_blocks">
            <div class="singleBlock">
              <div class="singleHeader">
                <h1>
                   <?php echo $label ?>
                </h1>
                <p><?php echo $web_name ?></p>
              </div>
              <div class="singleText">
                    <div class="row justify-content-between">
                        <p class="single_val_label col-6 wtobc">Value</p>
                    </div>
                    <div class="row justify-content-between">
                        <h2 class="single_val col-6 wtobc"><?php echo $value ?></h2>
                    </div>
             </div>
            </div>
            
            <!-- Red Block -->
            <div class="singleBlock red">
                <div class="singleHeader">
                    <p>
                        <?php echo $about_en ?>
                    </p>
                </div>
                <div class="singleText">
                    <img src="./assets/img/<?php echo $icon ?>" alt="Evex logo block">
               </div>
            </div>
          </div>
        </section>
    </main>
    <!-- END CONTENT -->
    <footer class=" justify-content-between align-items-center d-flex paFooter">
            <div class="footerContacts justify-content-between d-flex">
                <p>V.Beridze. #6, Tbilisi, Georgia 0108</p>

                <p>+995 598 399 388</p>
                    
                <p>info@block.ge</p>        
            </div>
            
            <p class="footerSocial">facebook</p>
    </footer>
    <script src="./assets/js/sliderController.js"></script>
    <!-- <script src="./assets/js/script.js"></script> -->
</body>
</html>