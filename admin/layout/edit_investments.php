<?php

    require_once("../../connect.php");
    $label_en = $_POST['label_en'];
    $category = $_POST['category'];
    $about_ka = $_POST['about_ka'];
    $about_en = $_POST['about_en'];
    $location_ka = $_POST['location_ka'];
    $location_en = $_POST['location_en'];
    $web_title = $_POST['web_title'];
    $web_link = $_POST['web_link'];
    $value = $_POST['value'];
    $Shareholding = $_POST['Shareholding'];
    $complete = $_POST['complete'];
    $img = $_POST['img'];
    $slider_imgs = $_POST['slider_imgs'];
    $logo = $_POST['logo'];
    $id = $_POST['id'];
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


        $sql = "UPDATE `investments` SET `category_id`='$category',`label`='$label_en',`label_ka`="$about_ka",`img`=[value-5],`progress`= '$complete',`value`='$value', `location`= '$about_en',`location_ka`='$location_ka',`about_ka`='$about_ka',`about_en`='$about_en',`web_link`='$web_link',`web_name`='$web_title',`icon`='[_______]',`slide_imgs`=[________],`Shareholding`='$Shareholding' WHERE $id";
        
    } else {
        echo json_encode($errors, JSON_UNESCAPED_UNICODE);
    }

    $pdo = null;
?>