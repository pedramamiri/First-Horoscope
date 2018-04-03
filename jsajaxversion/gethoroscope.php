<?php
session_start();
if(!$_COOKIE['vilkor']){
header("Location: ./Disclaimer.php");
}
elseif($_SESSION['horoscope']){
    echo $_SESSION['horoscope'];
}