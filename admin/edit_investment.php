<?php
  require_once('../connect.php');

  $get_id = $_GET['id'];
  $curent_const = "SELECT * FROM investments WHERE ID = " . $get_id;
  $curent_req = $pdo -> query($curent_const)->fetch();
  $label_en = $curent_req['label'];
  $label_ka = $curent_req['label_ka'];
  $img = $curent_req['img'];
  $value = $curent_req['value'];
  $location = $curent_req['location'];
  $location_ka = $curent_req['location_ka'];
  $about_en = $curent_req['about_en'];
  $about_ka = $curent_req['about_ka'];
  $web_link = $curent_req['web_link'];
  $web_name = $curent_req['web_name'];
  $Shareholding = $curent_req['Shareholding'];
  $progress = $curent_req['progress'];
  $icon = $curent_req['icon'];
  $category_id = $curent_req['category_id'];
  $slide_imgs = $curent_req['slide_imgs'];
  $decoded_imgs = json_decode($slide_imgs);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Layouts Design - Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="./assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="./assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="./assets/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="./assets/lib/highlightjs/github.css" rel="stylesheet">
    <link href="./assets/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="./assets/lib/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="./assets/lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="./assets/css/bracket.css">

  </head>

  <body>
    <?php 
      $inv = "active";
      require_once("./layout/sidebar.php") 
    ?>
    <?php require_once("./layout/header.php") ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-gear-outline"></i>
        <div>
          <h4>ინვესტიციის რედაქტირებ</h4>
          <div id="bugs">
          </div>
        </div>
      </div><!-- d-flex -->
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="form-layout form-layout-7">
           <form id="add_form" data-parsley-validate >
            <!-- სათაური(KA) ['label_ka'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                სათაური(KA)
                <span class="tx-danger">*</span>
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control"  value="<?php echo $label_ka ?>" type="text" name="label_ka" required>
              </div>
            </div>
            
            <!-- სათაური(ENG) ['label_en'] -->
            <div class="row no-gutters">
              <div class="col-4 col-sm-4">
                სათაური(ENG)
                <span class="tx-danger">*</span>
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control"  value="<?php echo $label_en ?>" type="text" name="label_en" required>
              </div>
            </div>
            
            <!-- კატეგორია ['category'] -->
            <div class="row no-gutters">
              <div class="col-4 col-sm-4">
                კატეგორია
                <span class="tx-danger">*</span>
              </div>
              <div class="col-7 col-sm-8 pd-0-force mg-b-0 ">
                <select class="form-control select2 " data-placeholder="აირჩიე კატეგორია" name="category" required>
                
                  <?php 
                    $category_query = $pdo->query("SELECT * FROM categories");
                    while($categories = $category_query -> fetch()){ 
                    
                  ?>
                  <option value="<?php echo $categories['ID'];?>" <?php echo $category_id == $categories['ID'] ? "selected"  : ""  ?> ><?php echo $categories['category_name_ka']  ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <!-- შესახებ(KA) ['about_ka'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                შესახებ(KA)
                <span class="tx-danger">*</span>
              </div>
              <div class="col-7 col-sm-8">
                <textarea rows="4" class="form-control" name="about_ka" placeholder="ჩაწერე ტექსტი ქართულად" required><?php echo $about_ka ?> </textarea>
              </div>
            </div>
            
            <!-- შესახებ(ENG) ['about_en'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                შესახებ(ENG)
                <span class="tx-danger">*</span>
              </div>
              <div class="col-7 col-sm-8">
                <textarea rows="4" class="form-control" name="about_en" placeholder="ჩაწერე ტექსტი ინგლისურად" required><?php echo $about_en ?> </textarea>
              </div>
            </div>

            <!-- ლოკაცია(KA) ['location_ka'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                ლოკაცია(KA)
                <span class="tx-danger">*</span>
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control"  value="<?php echo $location_ka ?>" type="text" name="location_ka" required>
              </div>
            </div>
            
            <!-- ლოკაცია(EN) ['location_en'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                ლოკაცია(EN)
                <span class="tx-danger">*</span>
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control"  value="<?php echo $location ?>" type="text" name="location_en" required>
              </div>
            </div>
            
            <!-- საიტის სათაური ['web_title'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                საიტის სათაური
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control"  value="<?php echo $web_name ?>" type="text" name="web_title" >
              </div>
            </div>
            
            <!-- საიტის ლინკი ['web_link'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                საიტის ლინკი
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control"  value="<?php echo $web_link ?>" type="text" name="web_link" >
              </div>
            </div>
            
            <!-- შემოსავალი ['value'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                შემოსავალი
                <span class="tx-danger">*</span>
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control"  value="<?php echo $value ?>" type="text" name="value" required>
              </div>
            </div>
            
            <!-- აქციები ['Shareholding'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                აქციები(%)
              </div>
              <div class="col-7 col-sm-8">
                <input type="text" id="rangeslider1" name="Shareholding" value="<?php echo $Shareholding ?>" />
              </div>
            </div>

            <!-- შესრულებულია ['complete'] -->
            <div class="row no-gutters">
              <div class="col-4 ">
                მდგომარეობა
                <span class="tx-danger">*</span>
              </div>
              <div class="col-8 align-items-center d-flex">
                <div class="col-lg-3 ">
                  <label class="rdiobox d-flex">
                    <input name="complete" type="radio" <?php echo $progress == "0" ?  "checked" : "" ?> value="0" required>
                    <span>მიმდინარე</span>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label class="rdiobox d-flex">
                    <input name="complete" type="radio" <?php echo $progress == "1" ?  "checked" : "" ?> value="1" required>
                    <span>შესრულებული</span>
                  </label>
                </div>
              </div>
            </div>

            <!-- სლაიდერის სურათები -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                  სლაიდერის სურათები
                <span class="tx-danger">*</span>
              </div>
              <div class="col-7 col-sm-8 row no-gutters" >
              <?php   
                    $s_i = 0;
                    foreach($decoded_imgs as $obj){
                ?>
                  <figure class="overlay col-4 bg-secondary for-delete " data-id="<?php echo $s_i ?>" data-img="<?php echo $obj ?>">
                    <img src="../assets/img/<?php echo $obj ?>" class="img-fluid" >
                    <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                      <div class="img-option">
                        <a href="javascript:del_image(<?php echo "$get_id, $s_i"; $s_i++ ?>);" class="btn tx-white btn-danger pd-y-4 ">
                            <i class="icon ion-trash-b tx-white tx-14"></i>
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                  <?php } ?>
              </div>
            </div>

            <!-- სლაიდერის სურათების დამატება ['slider_imgs'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                სლაიდერის სურათების დამატება
              </div>
              <div class="col-7 col-sm-8">
                <input type="file" name="slider_imgs[]" id="file-3" class="inputfile" data-multiple-caption="{count} სურათი არის არჩეული" multiple required>
                <label for="file-3" class="if-outline if-outline-info">
                  <i class="icon ion-ios-upload-outline tx-24"></i>
                  <span>ატვირთვა..</span>
                </label>
              </div>
            </div>

            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                მთავარი სურათი
              </div>
              <div class="col-7 col-sm-8">
                <figure class="overlay col-7">
                    <img src="../assets/img/2018-12-12-22-10-12-main.png" class="img-fluid" id="change_img_1">
                    <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                        <div class="img-option">
                        <input type="file" name="img" id="file-1" class="inputfile" >
                        <label for="file-1" class="tx-white bg-warning ">
                            <i class="icon ion-edit tx-24 m-0"></i>
                        </label>
                        </div>
                    </figcaption>
                </figure>
              </div>
            </div>
            
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                ლოგო
              </div>
              <div class="col-7 col-sm-8">
                <figure class="overlay col-5">
                    <img src="../assets/img/2018-12-12-22-10-53-logo.jpg" class="img-fluid" id="change_img_2">
                    <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                        <div class="img-option">
                        <input type="file" name="img" id="file-2" class="inputfile" >
                        <label for="file-2" class="tx-white bg-warning ">
                            <i class="icon ion-edit tx-24 m-0"></i>
                        </label>
                        </div>
                    </figcaption>
                </figure>
              </div>
            </div>

            <!-- დამატება -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
              <button class="btn btn-info"> დამატება</button>
            </div>
          </form>
        </div><!-- form-layout -->
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <script src="./assets/lib/jquery/jquery.js"></script>
    <script src="./assets/lib/popper.js/popper.js"></script>
    <script src="./assets/lib/bootstrap/bootstrap.js"></script>
    <script src="./assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="./assets/lib/moment/moment.js"></script>
    <script src="./assets/lib/jquery-ui/jquery-ui.js"></script>
    <script src="./assets/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="./assets/lib/peity/jquery.peity.js"></script>
    <script src="./assets/lib/highlightjs/highlight.pack.js"></script>
    <script src="./assets/lib/select2/js/select2.min.js"></script>
    <script src="./assets/js/bracket.js"></script>
    <script src="./assets/lib/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="./assets/lib/parsleyjs/parsley.js"></script>
    <script>
      $(function(){

        'use strict';
        const bugs = document.querySelector("#bugs");
        $('#rangeslider1').ionRangeSlider({
              min: 0,
              max: 100,
              from: $('#rangeslider1').value,
              postfix: '%'
        });
      
        $('#add_form').parsley();
        $( '.inputfile' ).each( function()
        {
          var $input	 = $( this ),
            $label	 = $input.next( 'label' ),
            labelVal = $label.html();

          $input.on( 'change', function( e )
          {
            var fileName = '';

            if( this.files && this.files.length > 1 )
              fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
              fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
              $label.find( 'span' ).html( fileName );
            else
              $label.html( labelVal );
          });

          // Firefox bug fix
          $input
          .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
          .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
        });

        $("#add_form").on('submit',(function(e) {

          e.preventDefault();
          $.ajax({
            url: "./layout/add_investment.php", 
            type: "POST",             
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
              let MainData = JSON.parse(data);
              bugs.innerHTML = "";
              for(let x = 0 ; x < MainData.length; x++){
                bugs.innerHTML += `<p class="mg-b-0 tx-danger">${MainData[x]}</p>`
              }
              
            }
          });
        }))
      });
      const file_1 = document.querySelector("#file-1");
      const file_2 = document.querySelector("#file-2");
      const change_img_2 = document.querySelector("#change_img_2");
      const change_img_1 = document.querySelector("#change_img_1");
      file_1.addEventListener('change', function(){
        change_img_1.src = window.URL.createObjectURL(this.files[0]);
      })
      
      file_2.addEventListener('change', function(){
        change_img_2.src = window.URL.createObjectURL(this.files[0]);
      })

      function del_image(id, index){
        let for_db = [];
        
        document.querySelector(`[data-id="${index}"]`).remove();
        let objects2 = document.querySelectorAll(".for-delete");
        objects2.forEach(element=>{
          for_db.push(element.dataset.img);
        })

        $.ajax({
            url: `./layout/delete_slider_img.php?id=${id}&index=${parseInt(index)}&array=${JSON.stringify(for_db)}`,
            type: "GET",             
            cache: false,             
            contentType: false,       
            processData:false,        
            success: function(data)   
            {
              console.log(data);
            }
          });
      }
    </script>
  </body>
</html>