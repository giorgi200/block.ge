<?php 
    
    require_once('../connect.php'); 
    if (isset($_POST['search'])) {
        $Name = $_POST['search'];
        $Query = "SELECT * FROM constructions WHERE label LIKE '%$Name%' OR label_ka LIKE '%$Name%' LIMIT 3";
        $Query2 = "SELECT * FROM investments WHERE label LIKE '%$Name%' OR label_ka LIKE '%$Name%' LIMIT 3";
        $complete_req = $pdo -> query($Query);
        $complete_req2 = $pdo -> query($Query2);

        while($Result = $complete_req -> fetch()){ 
            $category_query = $pdo -> query("SELECT * FROM categories WHERE ID =" . $Result['category_id']) -> fetch()[0];

?>
            
        <button class="search_item" data-href="./construction.php?id=<?php echo $Result['ID'] ?>">
            <img src="./assets/img/<?php echo $Result['img'] ?>" alt="<?php echo $Result['label'] ?>">
            <div class="item_desc">
                <h2><?php echo $ka ? $Result['label_ka'] : $Result['label'] ?></h2>
            </div>
        </button>
    <?php
        }
      while($Result2 = $complete_req2 -> fetch()){ 
        $category_query2 = $pdo -> query("SELECT * FROM categories WHERE ID =" . $Result2['category_id']) -> fetch();
    ?>
    <button class="search_item" data-href="./investment.php?id=<?php echo $Result2['ID'] ?>">
        <img src="./assets/img/<?php echo $Result2['img'] ?>" alt="<?php echo $Result2['label'] ?>">
        <div class="item_desc">
        
            <h2><?php echo $ka ? $Result2['label_ka'] : $Result2['label']  ?></h2>
        </div>
    </button> 
<?php } } ?>