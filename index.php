<?php
/**
 * Created by PhpStorm.
 * User: Temporary
 * Date: 6/20/2017
 * Time: 4:27 PM
 */

    session_start();
    $_SESSION['start'] = "Session started successfully";
    echo "<h1>Main index page started loaded</h1> <br> ";

    echo "loading navigation menu:<br>";
    include('mainPageMenu.html');

    echo "<br>confirming session started: ";
    echo $_SESSION['start'];

    echo "<br> Checking if user logged in: ";
    if(isset($_SESSION['username'])){
        echo $_SESSION['username'] . " is logged in.";
    }else{
        echo "false";
    }

