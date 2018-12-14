<?php
    $seo_query = "SELECT * FROM `Seo_meta` WHERE id = $seo_id";
    $seo_request = $pdo -> query($seo_query)->fetch();
    // description  title img image_type
?>
<head>

    <!-- Twitter -->
    <meta name="twitter:card" content="<?php echo $seo_request['Twitter_card']; ?>">
    <meta name="twitter:title" content="<?php echo $seo_request['title']; ?>">
    <meta name="twitter:description" content="<?php echo $seo_request['description']; ?>">
    <meta name="twitter:image" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] ."/investors/assets/img/" . $seo_request['img']; ?>">

    <!-- Facebook -->
    <meta property="og:url" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <meta property="og:title" content="<?php echo $seo_request['title']; ?>">
    <meta property="og:description" content="<?php echo $seo_request['description']; ?>">

    <meta property="og:image" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] ."/investors/assets/img/" . $seo_request['img']; ?>">
    <meta property="og:image:type" content="<?php echo $seo_request['image_type']; ?>">

    <!-- Meta -->
    <meta name="description" content="<?php echo $seo_request['description']; ?>">
    <meta name="author" content="Giorgi Qochiashvili">

    <meta charset="utf-8" />

    <title><?php echo $seo_request['title']; ?></title>
    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-ingiri-arial/css/bpg-ingiri-arial.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
    <?php if($ka){ ?>
    <link rel="stylesheet" href="./assets/css/font_change.css">
    <?php } ?>
</head>