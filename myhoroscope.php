<?php 
if($_POST){
  foreach($_POST as $key => $value){
    $_COOKIE[$key]=$value;
    setcookie($key, $value,time() + (60*60));
}
}
if($_COOKIE['personnummer']){
echo "<h1>♌♍Horoskop♒ och Objekt ♑</h1>";
echo "Hej ".$_COOKIE['namn']." ".$_COOKIE['efternamn']."<br/>";
$x = (int)substr($_COOKIE['personnummer'],4,4);
include 'class.php';
 $myPerson = new person($x);
 echo $myPerson->horoscope();


}


?>