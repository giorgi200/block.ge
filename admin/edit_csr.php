<!DOCTYPE html>
<?php

    require_once("../connect.php");
    $csr = "active";
    $csr_query = "SELECT * FROM `csr` WHERE id = 1";
    $csr_request = $pdo -> query($csr_query)->fetch();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CSR - რედაქტირება</title>

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
        <i class="icon ion-ios-paper-outline"></i>
        <div>
          <h4>CSR - ის  რედაქტირება</h4>
          <div id="bugs">
          </div>
        </div>
      </div><!-- d-flex -->
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="form-layout form-layout-7">
           <form id="add_form" data-parsley-validate >
            <!-- სათაური ['title_ka'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                სათაური (KA)
              </div>
                <div class="col-7 col-sm-8">
                    <textarea rows="3" class="form-control" name="title_ka" required><?php echo $csr_request['title_ka'] ?></textarea>
                </div>
            </div>

            <!-- სათაური ['title_en'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
              სათაური (EN)
              </div>
              <div class="col-7 col-sm-8">
                <textarea rows="3" class="form-control" name="title_en" required><?php echo $csr_request['title_en']; ?></textarea>
              </div>
            </div>

            <!-- მოკლე აღწერა ['short_ka'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                მოკლე აღწერა (KA)
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" value="<?php echo $csr_request['short_ka'] ?>" name="short_ka" required>
              </div>
            </div>

            <!-- მოკლე აღწერა ['short_en'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                მოკლე აღწერა (EN)
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" value="<?php echo $csr_request['short_en'] ?>" name="short_en" required>
              </div>
            </div>

            <!-- ტექსტი ['text_ka'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                ტექსტი (KA)
              </div>
              <div class="col-7 col-sm-8">
                <textarea rows="5" class="form-control" name="text_ka"  placeholder="ჩაწერე ტექსტი ქართულად" required><?php echo $csr_request['text_ka']; ?></textarea>
              </div>
            </div>

            <!-- ტექსტი ['text_en'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                ტექსტი (EN)
              </div>
              <div class="col-7 col-sm-8">
                <textarea rows="5" class="form-control" name="text_en"  placeholder="ჩაწერე ტექსტი ქართულად" required><?php echo $csr_request['text_en']; ?></textarea>
              </div>
            </div>

            <!-- სურათი ['img'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                სურათი
              </div>
              <div class="col-7 col-sm-8">
                <figure class="overlay">
                    <img src="../assets/img/<?php echo $csr_request['img'] ?>" class="img-fluid" id="change_img">
                    <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                        <div class="img-option">
                          <input type="file" name="img" id="file-3" class="inputfile" >
                          <label for="file-3" class="tx-white bg-info">
                              <i class="icon ion-ios-upload-outline tx-24"></i>
                              <span>შეცვლა</span>
                          </label>
                        </div>
                    </figcaption>
                </figure>
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
    <script src="./assets/lib/select2/js/select2.min.js"></script>
    <script src="./assets/js/bracket.js"></script>
    <script src="./assets/lib/parsleyjs/parsley.js"></script>
    <script>
      $(function(){
        
        'use strict';
        const bugs = document.querySelector("#bugs");
        const change_img = document.querySelector("#change_img");
        const main_img = document.querySelector("#file-3");
        
        main_img.addEventListener('change', function(){
            change_img.src = window.URL.createObjectURL(this.files[0]);
        })
        
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
            url: "./layout/csr_edit.php", 
            type: "POST",             
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
                if(data != ""){
                    let MainData = JSON.parse(data);
                    bugs.innerHTML = "";
                    for(let x = 0 ; x < MainData.length; x++){
                        bugs.innerHTML += `<p class="mg-b-0 tx-danger">${MainData[x]}</p>`
                    }
                } else {
                    bugs.innerHTML += `<p class="mg-b-0 tx-success">წარმატებით შესრულდა</p>`
                }
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
