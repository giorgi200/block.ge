
<?php
session_start();

    if(!isset($_SESSION["lang"])){
        if($_SESSION["lang"] == "ka"){
            $_SESSION["lang"] = "en";
                
        } else {
            
            $_SESSION["lang"] = "ka";
        
        }
    } else{
        
        $_SESSION["lang"] = "en";
    
    }
?>