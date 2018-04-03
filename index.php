<?php
if($_COOKIE['personnummer']){
header("Location: http://localhost:1337/myhoroscope.php"); 
}
echo "<h1>♌♍Horoskop♒ och Objekt ♑</h1>";
echo "<form style='border:1px solid #42b6f4;width:300;padding:5px;background-color:#42dff4;' action='myhoroscope.php' method='post'>";
echo " Förnamn :<input style='margin-left:50px;margin-bottom:5px;margin-top:5px;' type='text' name='namn' ><br/>";
echo " Efternamn :<input style='margin-left:40px;margin-bottom:5px;' type='text'  name='efternamn' ><br/>";
echo " Personnummer : <input style='margin-left:7px;' type='text' name='personnummer' placeholder='19890416-6793'   pattern='[0-9]{4}[0-1]{1}[0-9]{1}[0-3]{1}[0-9]{1}-[0-9]{4}' required><br/>";
echo " <input style='margin-top:8px;margin-left:220px;margin-bottom:5px;border:none;padding:7px;' type='submit'>"; 
echo " </form>";
?>