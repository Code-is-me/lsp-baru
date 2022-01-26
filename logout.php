<?php
// start session
session_start();

// Destroy session
if (session_destroy())
    // redirect to login Page
    header("location: login.php");
    exit;


