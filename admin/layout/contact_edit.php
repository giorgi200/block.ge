<?php

    require_once("../../connect.php");
    $adress_ka = $_POST['adress_ka'];
    $adress_en = $_POST['adress_en'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $facebook_link = $_POST['facebook_link'];

    $query = "UPDATE `contact` SET `adress_en` = '$adress_en', `adress_ka` = '$adress_ka', `number` = '$number', `email` = '$email', `facebook_link` = '$facebook_link' WHERE `contact`.`ID` = 1";
    $pdo -> query($query);
    $pdo = null;
    
?>