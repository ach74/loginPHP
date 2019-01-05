<?php

if (isset($_SESSION['type']) && $_SESSION['type'] == "Admin") {
    header("Location: {$home_url}admin/index.php?action=logged_in_as_admin");
}
else if(isset($require_login) && $require_login==true){
    if(!isset($_SESSION['type'])){
        header("Location: {$home_url}login.php?action=please_login");
    }
}
else if(isset($page_title) && ($page_title=="Login" || $page_title=="Sign Up")){
    if(isset($_SESSION['type']) && $_SESSION['type']=="user"){
        header("Location: {$home_url}index.php?action=already_logged_in");
    }
}