<?php

    session_start();
    if (!isset($_SESSION['appStarted'])) {
        die(header("Location: index.php"));
    }

    if (isset($_GET['cookiecheck'])) {           
        if (isset($_COOKIE['testcookie'])) {
            print "Cookies are enabled";
        } else {                
            print "Cookies are not enabled";
        }
    } else {
        setcookie('testcookie', "testvalue");
        die(header("Location: " . $_SERVER['PHP_SELF'] .
        "?cookiecheck=1"));
    }
?>
