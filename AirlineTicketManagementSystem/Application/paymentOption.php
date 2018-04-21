<?php
    if ( !isset($_SESSION) )
    { session_start(); } 
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
else {?>
<html>
    
 <head>
	<title> Signing Up </title>
 </head>
 <body>
     <form method="post" id="Form" >
     
	<?php include("airLineName.php");?>
	<fieldset>
            
				<font color="#72D128">
				<span style="margin-left:32em"></span>
                                <font face ="Garamond"/>
				<input name= "PaymentChoice" type ="radio" onclick="Card()" value="Card" /> Card
                                <font color="#72D128">
                                <font face ="Garamond"/>
				<span style="margin-left:5em"></span> 
                                <input name= "PaymentChoice" type ="radio" onclick="bkash()" value="bKash"/> bKash
	
        </fieldset>
</html>
<script>
    function bkash()
    {
        var url="bkash.php";
        window.location.href=url
    }
    function Card()
    {
        var url="card.php";
        window.location.href=url
    }
</script>
 <?php    } ?>