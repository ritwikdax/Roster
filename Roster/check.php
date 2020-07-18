<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header("HTTP/1.0 401 Unauthorized");
    exit;
}
?>
