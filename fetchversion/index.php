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
<h1>PHP 💕 JAVASCRIPT </h1>
<h2> FETCH VERSION</h2>
<h3>please write your person number</h3>
<?php 
echo "<form  method='post'>";
echo "<input style='margin-left:7px;' type='text' id='personnummer'  placeholder='19890416-6793'  >";
echo "<input type='button' value='submit' onclick='senddata()' >";
echo "</form>";
echo "<div style='margin-top:20px;margin-left:5px;' id='showResult'></div>";
// start to write javascript code    
echo '<script type="text/javascript">
function senddata(){
    var formData = new FormData();
    var myx = document.getElementById("personnummer");
    var url = "./sethoroscope.php";
    formData.append("username", myx.value);
    fetch(url, {
    method: "POST",
    credentials: "include", 
    body: formData 
    }).then(res => res.json())
    .catch(error => console.error("Error:", error))
    .then(response => 
    document.getElementById("showResult").innerHTML = response
    );   
} 
fetch("./gethoroscope.php", { 
    method: "POST",
    credentials:"include"
}) 
.then((response) => response.json())
.then((json) => {
    document.getElementById("showResult").innerHTML = json;
})
.catch((err) => {
    console.log(err);
}); 
</script>';
?>
</body>
</html>