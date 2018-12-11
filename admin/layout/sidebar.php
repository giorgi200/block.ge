    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>ADMIN <i>BLOCK</i><span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">ნავიგაცია</label>
      <ul class="br-sideleft-menu">
        
        <!-- მთავარი -->
        <li class="br-menu-item">
          <a href="index.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">მთავარი</span>
          </a>
        </li>

        <!-- ინვესტიციები -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub <?php echo $inv ?>">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">ინვესტიციები</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item">
              <a href="./investment_table.php" class="sub-link <?php echo $inv_nav ?>">ინვესტიციები</a>
            </li>
            <li class="sub-item">
              <a href="./add_investment.php" class="sub-link <?php echo $inv_add ?>">დამატება</a>
            </li>
          </ul>
        </li>
        
        <!-- კონსტრუქციები -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub <?php echo $const ?>">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">კონსტრუქციები</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item">
              <a href="card-dashboard.html" class="sub-link <?php echo $const_nav ?>">კონსტრუქციები</a>
            </li>
            <li class="sub-item">
              <a href="./add_construction.php" class="sub-link <?php echo $const_add ?>">დამატება</a>
            </li>
          </ul>
        </li>
        
        <!-- მთავარი ტექსტები -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">მთავარი ტექსტები</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="accordion.html" class="sub-link">მთავარი</a></li>
            <li class="sub-item"><a href="alerts.html" class="sub-link">ინვესტიციები</a></li>
            <li class="sub-item"><a href="buttons.html" class="sub-link">კონსტრუქციები</a></li>
          </ul>
        </li>

        <!-- კონტაქტი -->
        <li class="br-menu-item">
          <a href="pages.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-redo-outline tx-22"></i>
            <span class="menu-item-label">კონტაქტი</span>
          </a>
        </li>

        <!-- CSR -->
        <li class="br-menu-item">
          <a href="pages.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">CSR</span>
          </a><!-- br-menu-link -->
        </li>
        
        <!-- SEO -->
        <li class="br-menu-item">
          <a href="pages.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-analytics tx-22"></i>
            <span class="menu-item-label">SEO</span>
          </a><!-- br-menu-link -->
        </li>
      </ul>
    </div>
    <!-- ########## END: LEFT PANEL ########## -->