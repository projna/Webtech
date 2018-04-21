<html>
	<head>
		<title>Update information</title>
	</head>
	<style>
	body
	{
    background-color: #1B2631;
	}
	</style>
	<body>
	<?php
	include("airLineName.php");
	?>
	<fieldset>
	<font face ="Garamond">
	<span style="margin-left:70em"></span>
        <input name="LogOut" value="LogOut" onclick="logout()" type="button"  style="height:40px; width:150px ;color:#BD2316" />
	<hr>
	<font color="#04B5C1">
	<font face ="Garamond">
	<h2>
	<span style="margin-left:22em"></span>
	<b>Personal Details</b>
	</h2>
	<hr>
	<font color="#14BB14">
	<font face ="Garamond">
	<h3>
	<span style="margin-left:30em"></span>
	<b>Client Details</b>
	</h3>
	<hr>
	<font color="#04B5C1">
	<font face ="Garamond">
	<span style="margin-left:32.5em"></span>
	User Name :
	<font color="#929E92">
	<font face ="Garamond">
	<span style="margin-left:0.5em"></span>
	<?=  $_SESSION["Name"] ?>
	<br>
	<font color="#04B5C1">
	<font face ="Garamond">
	<span style="margin-left:32.5em"></span>
	Email Address :
	<font color="#929E92">
	<font face ="Garamond">
	<span style="margin-left:0.5em"></span>
	<?=  $_SESSION["Email"] ?>
	<br>
	<font color="#04B5C1">
	<font face ="Garamond">
	<span style="margin-left:32.5em"></span>
	Mobile Number :
	<font color="#929E92">
	<font face ="Garamond">
	<?=  $_SESSION["Phone"] ?>
	<br>
	<font color="#04B5C1">
	<font face ="Garamond">
	<span style="margin-left:32.5em"></span>
	Address :
	<font color="#929E92">
	<font face ="Garamond">
	<?=  $_SESSION["Address"] ?>
	</fieldset>
</html>
<script>
function logout()
{
    var url="logoutresponse.php";
    window.location.href=url; 
}
</script>