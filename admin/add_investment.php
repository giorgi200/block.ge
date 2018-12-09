<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Layouts Design - Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="./lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="./lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="./lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="./lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="./lib/highlightjs/github.css" rel="stylesheet">
    <link href="./lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="./lib/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="./lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="./css/bracket.css">
  </head>

  <body>
    <?php require_once("./layout/sidebar.php") ?>
    <?php require_once("./layout/header.php") ?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-gear-outline"></i>
        <div>
          <h4>ინვესტიციის დამატება</h4>
          <!-- <p class="mg-b-0">Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p> -->
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
                <input class="form-control" type="text" name="label_ka" required>
              </div>
            </div>
            
            <!-- სათაური(ENG) ['label_en'] -->
            <div class="row no-gutters">
              <div class="col-4 col-sm-4">
                სათაური(ENG):
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="label_en" >
              </div>
            </div>
            
            <!-- კატეგორია ['category'] -->
            <div class="row no-gutters">
              <div class="col-4 col-sm-4">
                კატეგორია
              </div>
              <div class="col-7 col-sm-8 pd-0-force mg-b-0 ">
                <select class="form-control select2 " data-placeholder="აირჩიე კატეგორია" name="category" required>
                    <option label="Choose one"></option>
                    <option value="Firefox">Firefox</option>
                    <option value="Chrome">Chrome</option>
                    <option value="Safari">Safari</option>
                    <option value="Opera">Opera</option>
                    <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div>
            </div>

            <!-- შესახებ(KA) ['about_ka'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                შესახებ(KA)
              </div>
              <div class="col-7 col-sm-8">
                <textarea rows="4" class="form-control" name="about_ka" placeholder="ჩაწერე ტექსტი ქართულად"></textarea>
              </div>
            </div>
            
            <!-- შესახებ(ENG) ['about_en'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                შესახებ(ENG)
              </div>
              <div class="col-7 col-sm-8">
                <textarea rows="4" class="form-control" name="about_en" placeholder="ჩაწერე ტექსტი ინგლისურად"></textarea>
              </div>
            </div>

            <!-- ლოკაცია(KA) ['location_ka'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                ლოკაცია(KA)
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="location_ka" >
              </div>
            </div>
            
            <!-- ლოკაცია(EN) ['location_en'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                ლოკაცია(EN)
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="location_en" >
              </div>
            </div>
            
            <!-- საიტის სათაური ['web_title'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
              საიტის სათაური
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="web_title" >
              </div>
            </div>
            
            <!-- საიტის ლინკი ['web_link'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
              საიტის ლინკი
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="web_link" >
              </div>
            </div>
            
            <!-- შემოსავალი ['value'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                შემოსავალი
              </div>
              <div class="col-7 col-sm-8">
                <input class="form-control" type="text" name="value" >
              </div>
            </div>
            
            <!-- აქციები ['Shareholding'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                აქციები(%)
              </div>
              <div class="col-7 col-sm-8">
                <input type="text" id="rangeslider1" name="Shareholding" value="0" />
              </div>
            </div>

            <!-- შესრულებულია ['complete'] -->
            <div class="row no-gutters">
              <div class="col-4 ">
                მდგომარეობა
              </div>
              <div class="col-8 align-items-center d-flex">
                <div class="col-lg-3 ">
                  <label class="rdiobox d-flex">
                    <input name="complete" type="radio">
                    <span>მიმდინარე</span>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label class="rdiobox d-flex">
                    <input name="complete" type="radio">
                    <span>შესრულებული</span>
                  </label>
                </div>
              </div>
            </div>
            
            <!-- სლაიდერის სურათები ['slider_imgs'] -->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                სლაიდერის სურათები
              </div>
              <div class="col-7 col-sm-8">
                <input type="file" name="slider_imgs[]" id="file-1" class="inputfile" data-multiple-caption="{count} სურათი არის არჩეული" multiple>
                <label for="file-1" class="if-outline if-outline-info">
                  <i class="icon ion-ios-upload-outline tx-24"></i>
                  <span>ატვირთვა..</span>
                </label>
              </div>
            </div>
            
            <!-- ლოგო ['logo']-->
            <div class="row no-gutters">
              <div class="col-5 col-sm-4">
                ლოგო
              </div>
              <div class="col-7 col-sm-8">
                <input type="file" name="logo" id="file-2" class="inputfile">
                <label for="file-2" class="if-outline if-outline-info">
                  <i class="icon ion-ios-upload-outline tx-24"></i>
                  <span>ატვირთვა..</span>
                </label>
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


    <script src="./lib/jquery/jquery.js"></script>
    <script src="./lib/popper.js/popper.js"></script>
    <script src="./lib/bootstrap/bootstrap.js"></script>
    <script src="./lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="./lib/moment/moment.js"></script>
    <script src="./lib/jquery-ui/jquery-ui.js"></script>
    <script src="./lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="./lib/peity/jquery.peity.js"></script>
    <script src="./lib/highlightjs/highlight.pack.js"></script>
    <script src="./lib/select2/js/select2.min.js"></script>
    <script src="./js/bracket.js"></script>
    <script src="./lib/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="./lib/parsleyjs/parsley.js"></script>
    <script>
      $(function(){
        
        'use strict';
        $('#rangeslider1').ionRangeSlider({
              min: 0,
              max: 100,
              from: 50,
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
            url: "test.php", 
            type: "POST",             
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
              // $('#loading').hide();
              console.log(data);
            }
          });
        }))
      });
    </script>
  </body>
</html>