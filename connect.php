<?php
session_start();

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=investors", "qomagi", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
} 

$paFooter = "";
$link_about = "";
$link_investments  = "";
$link_constructions  = "";
$link_csr  = "";
// if(isset($_SESSION["lang"])){
//     if($_SESSION["lang"] == "ka"){
//         $ka = true;    
//     } else{
//         $ka = false;    
//     }
// } else {
//     $ka = false;  
// }
