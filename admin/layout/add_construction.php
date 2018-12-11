<?php
    require_once("../../connect.php");
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
    $complete = $_POST['complete'];
    // images
    $slider_img_array = array();
    $errors = [];
    
    if(isset($_FILES['img'])){
        $file_name = $_FILES['img']['name'];
        $file_size =$_FILES['img']['size'];
        $file_tmp =$_FILES['img']['tmp_name'];
        $file_type= $_FILES['img']['type'];
        
        $file_ext = strtolower(end(explode('.',$_FILES['img']['name'])));
        $expensions = array("jpeg","jpg","png");
        
        if(in_array($file_ext, $expensions) === false){
            array_push($errors, "მთავარი სურათის ფორმატი მიუღებელია მხოლოდ jpeg, jpg, png");
        }
        
        if($file_size > 209715200){
            array_push($errors, 'მთავარი სურათი ძალიან დიდია მაქსიმალური ზომა 200 MB');
        }

        $image_name = date("Y-m-d-H-i-s") . "-main.$file_ext";
    }

    if(isset($_FILES['slider_imgs'])){
        $files_name = $_FILES['slider_imgs']['name'];
        $files_size = $_FILES['slider_imgs']['size'];
        $files_tmp = $_FILES['slider_imgs']['tmp_name'];
        $files_type = $_FILES['slider_imgs']['type'];

        for($i = 0; $i <  count($_FILES['slider_imgs']['name']); $i++){

            $file_exts = strtolower(end(explode('.',$_FILES['slider_imgs']['name'][$i])));
            $expension = array("jpeg", "jpg", "png");
            
            if(in_array($file_exts, $expension)=== false){
                array_push($errors, "სლაიდერის ერთერთი სურათი ფორმატი მიუღებელია მხოლოდ jpeg, jpg, png");
            }
            
            if($files_size[$i] > 209715200){
                array_push($errors,  'სლაიდერის ერთერთი სურათი ძალიან დიდია მაქსიმალური ზომა 200 MB');
            }

        }
    }

    if(isset($_FILES['logo'])){
        $logo_file_name = $_FILES['logo']['name'];
        $logo_file_size =$_FILES['logo']['size'];
        $logo_file_tmp =$_FILES['logo']['tmp_name'];
        $logo_file_type= $_FILES['logo']['type'];
        
        $logo_file_ext = strtolower(end(explode('.',$_FILES['logo']['name'])));
        $logo_expensions = array("jpeg","jpg","png", "svg", "ico");
        
        if(in_array($logo_file_ext, $logo_expensions) === false){
            array_push($errors, "ლოგოს ფორმატი მიუღებელია მხოლოდ jpeg, jpg, png, svg, ico");
        }
        
        if($logo_file_size > 20971520){
            array_push($errors, 'მთავარი სურათი ძალიან დიდია მაქსიმალური ზომა 20 MB');
        }
        
        $icon = date("Y-m-d-H-i-s") . "-logo.$logo_file_ext";

    } else {
        $icon = "";
    }

    if(empty($errors)){
        
        for($l = 0; $l <  count($_FILES['slider_imgs']['name']); $l++){
            $file_exts = strtolower(end(explode('.',$_FILES['slider_imgs']['name'][$l])));
            $image_names = date("Y_m_d_H_i_s") . "_slider_$l.$file_exts";
            move_uploaded_file($files_tmp[$l],"../../assets/img/" . $image_names);
            array_push($slider_img_array, $image_names);
        }
        
        
        move_uploaded_file($logo_file_tmp, "../../assets/img/" . $icon);
        move_uploaded_file($file_tmp, "../../assets/img/" . $image_name);
 
        $slider_imgs_decode = json_encode($slider_img_array);

        $query = "INSERT INTO `constructions` (`category_id`, `label`, `label_ka`, `img`, `progress`, `value`, `location`, `location_ka`, `about_ka`, `about_en`, `web_link`, `web_name`, `icon`, `slide_imgs`) VALUES ('$category', '$label_en', '$label_ka', '$image_name', '$complete', '$value', '$location_en', '$location_ka', '$about_ka', '$about_en', '$web_link', '$web_title', '$icon', '$slider_imgs_decode')";
        $pdo -> query($query);
        
        echo json_encode($errors, JSON_UNESCAPED_UNICODE);

    } else {
        echo json_encode($errors, JSON_UNESCAPED_UNICODE);
    }

    $pdo = null;
?>