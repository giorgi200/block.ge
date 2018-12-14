<!DOCTYPE html>
<?php
    require_once("../connect.php");
    $contact = "active";
    $contacts_request = $pdo -> query("SELECT * FROM `contact`")->fetch();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>კოონტაქტის - რედაქტირება </title>

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
      require_once("./layout/sidebar.php"); 
      require_once("./layout/header.php"); 
    ?>
    <!-- ########## START: MAIN PANEL ########## -->

    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-redo-outline"></i>
        <div>
          <h4>კონტაქტის რედაქტირება</h4>
          <div id="bugs"></div>
        </div>
      </div><!-- d-flex -->
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="form-layout form-layout-7">
           <form id="add_form" data-parsley-validate >

            <!-- სათაური ['adress_ka'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                  
                მისამართი (KA)
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" value="<?php echo $contacts_request['adress_ka'] ?>" name="adress_ka" required>
              </div>
            </div>

            <!-- სათაური ['adress_en'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                მისამართი (EN)
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" value="<?php echo $contacts_request['adress_en'] ?>" name="adress_en" required>
              </div>
            </div>

            <!-- ტექსტი ['number'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                ნომერი
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" value="<?php echo $contacts_request['number'] ?>" name="number" required>
              </div>
            </div>

            <!-- ტექსტი ['email'] -->
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    ელ.ფოსტა
                </div>
                <div class="col-7 col-sm-8">
                    <input class="form-control" type="text" value="<?php echo $contacts_request['email'] ?>" name="email" required>
                </div>
            </div>
            
            <!-- Facebook ['facebook_link'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                Facebook
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" value="<?php echo $contacts_request['facebook_link'] ?>" name="facebook_link" required>
              </div>
            </div>

            <!-- დამატება -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
              <button class="btn btn-info"> შენახვა</button>
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
    <script src="./assets/js/bracket.js"></script>
    <script src="./assets/lib/parsleyjs/parsley.js"></script>
    <script>
      $(function(){
        
        'use strict';
        const bugs = document.querySelector("#bugs");
            
        $('#add_form').parsley();


        $("#add_form").on('submit',(function(e) {

          e.preventDefault();
          $.ajax({
            url: "./layout/contact_edit.php", 
            type: "POST",             
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
                bugs.innerHTML += `<p class="mg-b-0 tx-success">წარმატებით შესრულდა</p>`
            },
            error: () => {
                bugs.innerHTML += `<p class="mg-b-0 tx-danger">არ შესრულდა</p>`
            }
          });
        }))

      });
    </script>
  </body>
</html>
