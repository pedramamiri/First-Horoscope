<?php
session_start();
if(!$_COOKIE['vilkor']){
header("Location: ./Disclaimer.php");
};
if($_POST['username']){
include './inkl/class.php';
$x = (int)substr($_POST['username'],4,4);
$myPerson = new person($x);
$_SESSION['horoscope'] = $myPerson->horoscope();
echo $myPerson->horoscope();
}



?>
