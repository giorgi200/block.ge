<?php 
  require_once("../connect.php");
  $investments = "SELECT * FROM investments";
  $investments_req = $pdo -> query($investments);
  $inv = "active";
  $inv_nav = "active";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Data Table Design - Bracket Plus Responsive Bootstrap 4 Admin Template</title>
  
  <!-- vendor css -->
  <link href="assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="assets/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
  <link href="assets/lib/highlightjs/github.css" rel="stylesheet">
  <link href="assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
  <link href="assets/lib/select2/css/select2.min.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="./assets/css/bracket.css">
  <link rel="stylesheet" href="./assets/css/my.css">
</head>
<body>
    <?php require_once("./layout/sidebar.php") ?>
    <?php require_once("./layout/header.php") ?>
  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>ინვესტიციები</h4>
          <!-- <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p> -->
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <!-- <h6 class="br-section-label">Basic Responsive DataTable</h6>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p> -->
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">სურათი</th>
                  <th class="wd-10p">სათაური</th>
                  <!-- <th class="wd-10p">კატეგორია</th> -->
                  <!-- <th class="wd-10p">შესრულებულია (%)</th> -->
                  <th class="wd-10p">შემოსავალი</th>
                  <th class="wd-10p">ლოკაცია</th>
                  <th class="wd-10p">შესრულება</th>
                  <th class="wd-10p">რედაქტირება</th>
                  <!-- <th class="wd-10p">ლოგო</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                    while($investments_slider = $investments_req -> fetch()){
                        $investments_id = $investments_slider['ID'];
                        $investments_progress = $investments_slider['progress'];
                        $investments_label = $investments_slider['label'];
                        $investments_img = $investments_slider['img'];
                        $investments_value = $investments_slider['value'];
                        $investments_location = $investments_slider['location'];
                        
                  ?>
                <tr>
                  <td class="sorting_1" style="background-image: url('../assets/img/<?php echo $investments_img; ?>');"></td>
                  <td class="tx-12"><?php echo $investments_label ?></td>
                  <!-- <td class="tx-12">HOSPITALITY AND REAL ESTATE</td> -->
                  <!-- <td>46%</td> -->
                  <td class="tx-12"><?php echo $investments_value ?></td>
                  <td class="tx-12"><?php echo $investments_location ?></td>
                  <td class="<?php if($investments_progress) { echo "tx-success"; } else { echo "tx-danger"; } ?> tx-center">
                    <i class="icon ion-<?php if($investments_progress) { echo "checkmark"; } else { echo "android-remove"; } ?>"></i>
                  </td>
                  <td>
                    <button class="btn btn-warning" data-id="<?php echo $investments_id ?>">
                      <i class="icon ion-edit"></i>
                      რედაქტირება
                    </button>
                    <button class="btn btn-danger" data-id="<?php echo $investments_id ?>">
                      <i class="icon ion-trash-b"></i>
                      წაშლა
                    </button>
                  </td>
                </tr>
                    <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="assets/lib/jquery/jquery.js"></script>
    <script src="assets/lib/popper.js/popper.js"></script>
    <script src="assets/lib/bootstrap/bootstrap.js"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="assets/lib/moment/moment.js"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.js"></script>
    <script src="assets/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="assets/lib/peity/jquery.peity.js"></script>
    <script src="assets/lib/highlightjs/highlight.pack.js"></script>
    <script src="assets/lib/datatables/jquery.dataTables.js"></script>
    <script src="assets/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>

    <script src="./assets/js/bracket.js"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ ინვესტიცია/გვერდი',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
