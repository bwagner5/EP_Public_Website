<?php
    session_start();
    $_SESSION['loggedIn'] = false;
    $_SESSION['admin'] = false;
    header("Location: ../staff");
    die();
?>
