<?php
    if(isset($_COOKIE['lang'])) {
        if($_COOKIE['lang'] == "ka"){
            setcookie("lang", "",  time() + 3600, '/');
        } else{
            setcookie("lang", "ka",  time() + 3600, '/');
        }
    } else {
        setcookie("lang", "ka",  time() + 3600, '/');
    }