<?php

    require_once("../../connect.php");
    $title = $_POST['title'];
    $card = $_POST['card'];
    $details = $_POST['details'];
    $id = $_POST['id'];
    $errors = [];

    if($_FILES['img']['size'] != ""){
        $file_name = $_FILES['img']['name'];
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_type= $_FILES['img']['type'];
        $seo_query = "SELECT * FROM `Seo_meta` WHERE id = $id";
        $seo_request = $pdo -> query($seo_query)->fetch();

        $file_ext = strtolower(end(explode('.',$_FILES['img']['name'])));
        $expensions = array("jpeg", "jpg", "gif", "png");
        $image_name = date("Y-m-d-H-i-s") . "-seo.$file_ext";

        if(in_array($file_ext, $expensions) === false){
            array_push($errors, "მთავარი სურათის ფორმატი მიუღებელია მხოლოდ jpeg, jpg, gif, png");
        }
        
        if($file_size > 209715200){
            array_push($errors, 'მთავარი სურათი ძალიან დიდია მაქსიმალური ზომა 200 MB');
        }
        move_uploaded_file($file_tmp, "../../assets/img/" . $image_name);
        unlink("../../assets/img/" . $seo_request["img"]);
    }

    // ID description  title img image_type

    if(empty($errors)){
        $query = $_FILES['img']['size'] != "" ?  "UPDATE `Seo_meta` SET `description` = '$details', `Twitter_card` = '$card', `title` = '$title', `image_type` = '$file_type', `img` = '$image_name' WHERE `Seo_meta`.`ID` = $id;"
        : 
        "UPDATE `Seo_meta` SET `description` = '$details', `Twitter_card` = '$card', `title` = '$title' WHERE `Seo_meta`.`ID` = $id;";

        $pdo -> query($query);

        
    } else {
        echo json_encode($errors, JSON_UNESCAPED_UNICODE);
    }

    $pdo = null;
?>