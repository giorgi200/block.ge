<?php
    require_once('./connect.php');
    $get_id = $_GET['id'];
    $curent_const = "SELECT * FROM constructions WHERE ID =" . $get_id;
    $curent_req = $pdo -> query($curent_const)->fetch();
    $label = $curent_req['label'];
    $img = $curent_req['img'];
    $value = $curent_req['value'];
    $location = $curent_req['location'];
    

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
                <div style="background-image: url('./assets/img/Investments/Kazbegi Towers/23-.jpg')" ></div>
                <div style="background-image: url('./assets/img/Investments/Kazbegi Towers/34.jpg')" ></div>
                <div style="background-image: url('./assets/img/Investments/Kazbegi Towers/8995.jpg')"></div>
            </div>
            <div class="bgslider_controller">
                <div class="selected_bgsliders">
                    <div class="bgsliders_block active" data-index="0">
                        <div></div>
                    </div>
                    <div class="bgsliders_block " data-index="1">
                        <div></div>
                    </div>
                    <div class="bgsliders_block " data-index="2">
                        <div></div>
                    </div>
                </div>
                <img src="./assets/svg/slider_arrows_gray.svg" alt="Block slider arrow" >
                <img src="./assets/svg/slider_arrows_gray.svg" alt="Block slider arrow">
            </div>
          <div class="sinble_blocks">
            <div class="singleBlock">
              <div class="singleHeader">
                <h1>
                    GOLDEN TULIP
                    <br>
                    DESIGN HOTEL
                    <br>
                    TBILISI
                </h1>
                <p>www.goldenttulip.com</p>
              </div>
              <div class="singleText">
                    <div class="row justify-content-between">
                        <p class="single_val_label col-6 wtobc">Shareholding</p>
                        <p class="single_val_label col-6 wtobc">Value</p>
                    </div>
                    <div class="row justify-content-between">
                        <h2 class="single_val col-6 wtobc">40%</h2>
                        <h2 class="single_val col-6 wtobc">$40 million</h2>
                    </div>
             </div>
            </div>
            
            <!-- Red Block -->
            <div class="singleBlock red">
                <div class="singleHeader">
                    <p>
                        In their 4-star venues featuring modern facilities and customized services,  Golden Tulip hotels offer outstanding stays. What is special about them is how they provide travelers with comfort and excellent amenities inside a setting which is different every time, and in keeping with each region’s ambience and individual features.
                        <br>
                        Since 1962, Golden Tulip has been running hotels in 35 countries, every one of them standing at a key location: city centers or strategic places.
                        <br>
                        We are more than glad to welcome Golden Tulip brand in Tbilisi. Hotel will offer 78 rooms in the city center of Tbilisi, with international dinning and unique views on old Tbilisi. 
                        <br>
                        Hotel will be operated by Louvre Hotel Group.
                    </p>
                </div>
                <div class="singleText">
                    <img src="./assets/img/" alt="Evex logo block">
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