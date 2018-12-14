<?php

    require_once("../../connect.php");
    $title_ka = $_POST['title_ka'];
    $title_en = $_POST['title_en'];
    $text_ka = $_POST['text_ka'];
    $text_en = $_POST['text_en'];
    $id = $_POST['id'];
    $errors = [];
    
    if($_FILES['img']['size'] != ""){
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $articles_query = "SELECT * FROM `Seo_meta` WHERE id = $id";
        $articles_request = $pdo -> query($articles_query)->fetch();

        $file_ext = strtolower(end(explode('.',$_FILES['img']['name'])));
        $expensions = array("jpeg", "jpg", "gif", "png");
        $image_name = date("Y-m-d-H-i-s") . "-article.$file_ext";

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
                                        
        $query = $_FILES['img']['size'] != "" ?  "UPDATE `hero_articles` SET `title` = '$title_en', `title_ka` = '$title_ka', `text` = '$text_en', `text_ka` = '$text_ka', `img` = '$image_name' WHERE `hero_articles`.`ID` = $id;"
        : 
        "UPDATE `hero_articles` SET `title` = '$title_en', `title_ka` = '$title_ka', `text` = '$text_en', `text_ka` = '$text_ka' WHERE `hero_articles`.`ID` = $id;";

        $pdo -> query($query);

        
    } else {
        echo json_encode($errors, JSON_UNESCAPED_UNICODE);
    }

    $pdo = null;
?>