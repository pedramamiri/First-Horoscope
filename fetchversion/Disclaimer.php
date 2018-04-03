<?php
if($_POST['vilkor']){
    $_COOKIE['vilkor']=$_POST['vilkor'];
    setcookie('vilkor', $_POST['vilkor'],time() + (60*60));
    header("Location: ./index.php");
}

echo '<h1>VILKOR</h1>';
echo '<p>The User registering a Brainville Account on behalf of a Subscriber must have the legal and formal right to represent that Subscriber when registering the Account.<br/>
If there is a dispute of which the legal representative of the Subscriber might be, or which Subscriber that might be the rightful owner of an Account, the Service Provider can request for the claiming party to present formal documentation from the local company registration agency about the legal representatives of the Subscriber before transferring the account to the rightful owner.<br/>
If normal processes for password and/or username recovery cannot be used the Service Provider can request the claiming party to present formal documentation from the local company registration agency about the legal representatives of the Subscriber before such details are presented.<br/>
Any Account that is not verified after registration can be terminated.<br/>
Any Account that is not accessed within 12 months can be terminated.<br/>
The Service Provider reserves the right to deny a User or a Subscriber a Brainville Account at its own discretion.</p>';
echo "<form action='Disclaimer.php' method='post'>";
echo "<input type='checkbox' name='vilkor' value='yes'>"." OK! ";
echo " <input type='submit' value='submit'>";
echo "</form>";
?>