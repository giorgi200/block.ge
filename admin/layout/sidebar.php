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
        
        <!-- SEO -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub <?php echo $seo ?>">
            <i class="menu-item-icon icon ion-ios-analytics tx-22"></i>
            <span class="menu-item-label">SEO</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item">
              <a href="./edit_seo.php?id=1" class="sub-link <?php echo $seo_main ?>">მთავარი</a>
            </li>
            <li class="sub-item">
              <a href="./edit_seo.php?id=2" class="sub-link <?php echo $seo_inv ?>">ინვესტიციები</a>
            </li>
            <li class="sub-item">
              <a href="./edit_seo.php?id=3" class="sub-link <?php echo $seo_const ?>">კონსტრუქციები</a>
            </li>
            <li class="sub-item">
              <a href="./edit_seo.php?id=4" class="sub-link <?php echo $seo_csr ?>">CSR</a>
            </li>
            <li class="sub-item">
              <a href="./edit_seo.php?id=5" class="sub-link <?php echo $seo_about ?>">ჩვენ შესახებ</a>
            </li>
          </ul>
        </li>
        <!-- მთავარი ტექსტები -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub <?php echo $articles ?>">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">მთავარი ტექსტები</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="./main_articles.php?id=3" class="sub-link <?php echo $articles_main ?>">მთავარი</a></li>
            <li class="sub-item"><a href="./main_articles.php?id=1" class="sub-link <?php echo $articles_inv ?>">ინვესტიციები</a></li>
            <li class="sub-item"><a href="./main_articles.php?id=2" class="sub-link <?php echo $articles_const ?>">კონსტრუქციები</a></li>
          </ul>
        </li>

        <!-- კონტაქტი -->
        <li class="br-menu-item ">
          <a href="./edit_contact.php" class="br-menu-link <?php echo $contact; ?>">
            <i class="menu-item-icon icon ion-ios-redo-outline tx-22"></i>
            <span class="menu-item-label">კონტაქტი</span>
          </a>
        </li>

        <!-- CSR -->
        <li class="br-menu-item">
          <a href="./edit_csr.php" class="br-menu-link <?php echo $csr; ?>">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">CSR</span>
          </a><!-- br-menu-link -->
        </li>
      
      </ul>
    </div>
    <!-- ########## END: LEFT PANEL ########## -->