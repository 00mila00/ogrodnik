<?php
    require_once "connect.php";

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_SESSION['ID'])) {
        header('Location: ./pages/rosliny/rosliny.html.php');
        exit;
    } else {
        header('Location: ./pages/index.html');
        exit;
    }
?>