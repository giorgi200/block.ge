<?php
    $label_ka = $_POST['label_ka'];
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
    // images
    $slider_imgs = $_POST['slider_imgs'];
    $img = $_POST['img'];
    $logo = $_POST['logo'];




    $target_dir = "images/";
    $target_file = $target_dir . basename(date("Y-m-d-H-i-s"));
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

    $query = "INSERT INTO `investments` (`category_id`, `label`, `label_ka`, `img`, `progress`, `value`, `location`, `location_ka`, `about_ka`, `about_en`, `web_link`, `web_name`, `icon`, `slide_imgs`, `Shareholding`) VALUES 
    ('$category', '$label_en', '$', '$label_ka', '$img', '$complete', '$value', '$location_en', '$location_ka', '$about_ka', '$about_en', '$web_link', '$web_title', '' '[{}]', '$Shareholding' )";
?>