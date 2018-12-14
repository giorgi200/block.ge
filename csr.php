<?php
    require_once("./connect.php");
    $csr_Query = "SELECT * FROM `csr`";
    $csr_Request = $pdo -> query($csr_Query)->fetch();
    $link_csr = "active";
    $paFooter = "paFooter";
    $seo_id = 4;
?>
<!DOCTYPE html>
    

<html lang="<?php echo $ka ? "ka" : "en" ?>">
<?php require_once('./layout/head.php'); ?>
<body>
    <!-- HEADER -->
    <?php require_once("./layout/header.php"); ?>
    <!-- END HEADER -->
    <!-- CONTENT -->
    <main>
        <section class="mainHero" style="background-image: url(./assets/img/<?php echo $csr_Request['img'] ?>)">
          <div class="csrBlock">
              <div class="csrHeader">
                <h1>
                   <?php echo nl2br($ka ? $csr_Request['title_ka'] : $csr_Request['title_en']) ?>
                </h1>
                <p><?php echo $ka ?  $csr_Request['short_ka'] : $csr_Request['short_en'] ?></p>
              </div>
              <div class="csrText">
                <p>
                    <?php echo nl2br( $ka ? $csr_Request['text_ka'] : $csr_Request['text_en']) ?> 
                </p>
             </div>
          </div>
        </section>
    </main>
    <!-- END CONTENT -->
    <?php require_once("./layout/footer.php"); ?>
    
    <script src="./assets/js/script.js"></script>
</body>
</html>