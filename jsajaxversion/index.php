<?php
session_start();
if(!$_COOKIE['vilkor']){
header("Location: ./Disclaimer.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
<title>new horoscop</title>
</head>
<body>
<h1>PHP 💕 JAVASCRIPT  </h1>
<h2> JAVASCRIPT AJAX VERSION</h2>
<h3>please write your person number</h3>
<?php 
echo "<form  method='post'>";
echo "<input style='margin-left:7px;' type='text' id='personnummer'  placeholder='19890416-6793'  >";
echo "<input type='button' value='submit' onclick='senddata()' >";
echo "</form>";
echo "<div style='margin-top:20px;margin-left:5px;' id='showResult'></div>";
?>
   
<script type="text/javascript">
function senddata(){
var xhttp = new XMLHttpRequest();
console.log(xhttp);
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showResult").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "./sethoroscope.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var myx = document.getElementById("personnummer");
  xhttp.send("username="+myx.value);
}
var xhttp = new XMLHttpRequest();
console.log(xhttp);
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showResult").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "./gethoroscope.php", true);
  xhttp.send();
</script>
</body>
</html>