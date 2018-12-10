<?php
    require_once('./connect.php');
    
if(isset($_GET['id'])){
    $get_id = $_GET['id'];
    $curent_const = "SELECT * FROM investments WHERE ID = " . $get_id;
    $curent_req = $pdo -> query($curent_const)->fetch();
    $link_investments = "active";
    $paFooter = "paFooter";
    $label = $curent_req['label'];
    $img = $curent_req['img'];
    $value = $curent_req['value'];
    $location = $curent_req['location'];
    $about_en = $curent_req['about_en'];
    $about_ka = $curent_req['about_ka'];
    $web_link = $curent_req['web_link'];
    $web_name = $curent_req['web_name'];
    $Shareholding = $curent_req['Shareholding'];
    $icon = $curent_req['icon'];
    $slide_imgs = $curent_req['slide_imgs'];
    $decoded_imgs = json_decode($slide_imgs);
    
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>BLOCK</title>
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
                        for($i = 0; $i < count($decoded_imgs); $i++){ 
                    ?>
                        <div class="bgsliders_block <?php  if($i == 0){ echo "active"; } ?>" data-index="<?php echo $i; ?>">
                            <div></div>
                        </div>
                    <?php }; ?>
                </div>
                <img src="./assets/svg/slider_arrows_gray.svg" alt="Block slider arrow" >
                <img src="./assets/svg/slider_arrows_gray.svg" alt="Block slider arrow">
            </div>
          <div class="sinble_blocks">
            <div class="singleBlock">
              <div class="singleHeader">
                <h1>
                   <?php echo nl2br($label) ?>
                </h1>
                <p><?php echo $web_name ?></p>
              </div>
              <div class="singleText">
                    <div class="row justify-content-between">
                    <p class="single_val_label col-6 wtobc">Shareholding</p>
                        <p class="single_val_label col-6 wtobc">Value</p>
                    </div>
                    <div class="row justify-content-between">
                    <h2 class="single_val col-6 wtobc"><?php echo $Shareholding ?>%</h2>
                        <h2 class="single_val col-6 wtobc"><?php echo $value ?></h2>
                    </div>
             </div>
            </div>
            
            <!-- Red Block -->
            <div class="singleBlock red">
                <div class="singleHeader">
                    <p>
                        <?php echo nl2br($about_en) ?>
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
    <?php require_once('./layout/footer.php') ?>
    <script src="./assets/js/sliderController.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>
<?php 
} else {
    header("Location: ./404.php");
} ?>