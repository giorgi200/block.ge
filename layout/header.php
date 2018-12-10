<header>
    <nav class="headerNav d-flex align-items-center">
        <div class="MainLogo">
            <a href="./index.php">
                <img src="./assets/svg/logo.svg" alt="Block Logo">
            </a>
        </div>
        <ul class="MainNav justify-content-between d-flex ">
            <li class="navItems">
                <a href="./about.php" class="<?php echo $link_about ?>">ABOUT US</a>
            </li>

            <li class="navItems">
                <a href="./investments.php" class="<?php echo $link_investments ?>"">INVESTMENTS</a>
            </li>

            <li class="navItems">
                <a href="./constructions.php" class="<?php echo $link_constructions ?>">CONSTRUCTION</a>
            </li>

            <li class="navItems">
                <a href="./index.php" >PARTNERS</a>
            </li>

            <li class="navItems">
                <a href="./csr.php" class="<?php echo $link_csr ?>">CSR</a>
            </li>

        </ul>
        <ul class="MainNavRight d-flex">
            <div class="searchIcon ">
                <input type="text" placeholder="Search" class="searchValue">
                <img src="./assets/svg/search.svg" class="imgest" alt="Block searchIcon">
                <div class="search_results">
                 
                </div>
            </div>
            <div id="language">
                <h4>GEO</h4>
            </div>
        </ul>
    </nav>
</header>