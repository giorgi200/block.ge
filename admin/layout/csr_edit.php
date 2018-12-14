<?php

    require_once("../../connect.php");
    $title_ka = $_POST['title_ka'];
    $title_en = $_POST['title_en'];
    $short_ka = $_POST['short_ka'];
    $short_en = $_POST['short_en'];
    $text_ka = $_POST['text_ka'];
    $text_en = $_POST['text_en'];
    $errors = [];



    if($_FILES['img']['size'] != ""){
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $articles_query = "SELECT * FROM `csr` WHERE id = 1";
        $articles_request = $pdo -> query($articles_query)->fetch();

        $file_ext = strtolower(end(explode('.',$_FILES['img']['name'])));
        $expensions = array("jpeg", "jpg", "gif", "png");
        $image_name = date("Y-m-d-H-i-s") . "-csr.$file_ext";

        if(in_array($file_ext, $expensions) === false){
            array_push($errors, "მთავარი სურათის ფორმატი მიუღებელია მხოლოდ jpeg, jpg, gif, png");
        }
        
        if($file_size > 209715200){
            array_push($errors, 'მთავარი სურათი ძალიან დიდია მაქსიმალური ზომა 200 MB');
        }
        move_uploaded_file($file_tmp, "../../assets/img/" . $image_name);
        unlink("../../assets/img/" . $articles_request["img"]);
    }

    // ID description  title img image_type

    if(empty($errors)){

        $query = $_FILES['img']['size'] != "" ?  "UPDATE `csr` SET `title_en` = '$title_en', `title_ka` = '$title_ka', `text_en` = '$text_en', `text_ka` = '$text_ka', `img` = '$image_name' WHERE `csr`.`ID` =  1;"
        : 
        "UPDATE `csr` SET `title_en` = '$title_en', `title_ka` = '$title_ka',  `short_ka` = '$short_ka', `short_en` = '$short_en', `text_en` = '$text_en', `text_ka` = '$text_ka' WHERE `csr`.`ID` = 1;";
        $pdo -> query($query);

        
    } else {
        echo json_encode($errors, JSON_UNESCAPED_UNICODE);
    }

    $pdo = null;
?>