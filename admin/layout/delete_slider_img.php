<?php
    require_once("../../connect.php");
    $index = $_GET['index'];
    $id = $_GET['id'];
    $array = $_GET['array'];
    
    $del_image = $pdo->query("SELECT slide_imgs FROM `investments` WHERE `investments`.`ID` = " . $_GET['id'])->fetch();
    $decoded_imgs = json_decode($del_image[0]);
    unlink("../../assets/img/" . $decoded_imgs->{"$index"});
    
    $pdo->query("UPDATE `investments` SET `slide_imgs` = '$array' WHERE `investments`.`ID` = " . $_GET['id']);
    $pdo = null;
?>