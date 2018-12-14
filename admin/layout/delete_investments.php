<?php
    require_once("../../connect.php");
    $del_image = $pdo->query("SELECT * FROM `investments` WHERE `investments`.`ID` = " . $_GET['id'])->fetch();
    $icon = $del_image['icon'];
    $img = $del_image['img'];
    $slide_imgs = $del_image['slide_imgs'];
    $decoded_imgs = json_decode($slide_imgs);

    unlink("../../assets/img/$img");
    unlink("../../assets/img/$icon");
    foreach($decoded_imgs as $obj){
        unlink("../../assets/img/$obj");
    }
    
    $pdo -> query("DELETE FROM `investments` WHERE `investments`.`ID` = " . $_GET['id']);
    $pdo = null;
?>
