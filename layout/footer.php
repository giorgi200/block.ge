
<?php
      
    $contact_req = $pdo -> query("SELECT * FROM contact WHERE ID = 1")->fetch();
    
?>
<footer class=" justify-content-between align-items-center d-flex <?php echo $paFooter ?>">
    <div class="footerContacts justify-content-between d-flex">
        <p><?php echo  $ka ? $contact_req['adress_ka'] : $contact_req['adress_en']; ?></p>

        <p><?php echo $contact_req['number']; ?></p>
            
        <p><?php echo $contact_req['email']; ?>        
    </div>
    
    <p class="footerSocial">
        <a href="<?php echo $contact_req['facebook_link']; $pdo = null; ?>">Facebook</a>
    </p>
</footer>