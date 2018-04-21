<?php
    if ( !isset($_SESSION) )
    { session_start(); } 
    $_SESSION["paytype"]="bKASH";
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
else {?>
<html>
    <head>
    <title>
        bKash Payment    
    </title>
    </head>
    <body>
        <?php include("airLineName.php");?>
        <?php include("paymentOption.php");?>
        <fieldset>
             <font color="#E0973B"/>
	<font face ="Garamond"/>
	<h3>
	<span style="margin-left:30em"></span>
	<b>bKash Payment</b>
        </h3>

        <hr>
         <font color="#D0C829 "/>
        <br>
        </br>
	<font face ="Garamond"/><span style="margin-left:32em"></span>
         our bKash Accout Number
        <br>
        <span style="margin-left:32em"></span>
        <input name="ACCOUNTnumber" value="01748555106" disabled  type="textbox"  style="height:40px; width:250px ; color:#474B4C"/>
     
        <br>
        </br>
	<font face ="Garamond"/><span style="margin-left:32em"></span>
        bKash payment code
        <br>
        <span style="margin-left:32em"></span>
        <input name="AccountPinNumber"   type="textbox"  style="height:40px; width:250px ; color:#474B4C"/>
         <br>
         </br>
        <span style="margin-left:32em"></span>
        <input name="Go" value="GO "  onclick="go()" type="Button"  style="height:40px; width:250px ; color:#1A682E"/>
         
        </fieldset>
    </body>
</html>
 <?php    } ?>
<script>
  function go()
{
    
    if( isEmpty(document.getElementsByName("AccountPinNumber")[0].value)==false )
    {
        if( isLetter(document.getElementsByName("AccountPinNumber")[0].value)==false )
        {
            var url="Salereport.php";
           window.location.href=url;
        }
        else
        {
            alert("Only number are allowed");
        }
    }
    else
        {
            alert("Must be filled");
        }
}  
 function isEmpty(str)
       {
       return (!str || 0 === str.length);
        }
        function isLetter(c) 
       {
        return c.toLowerCase() != c.toUpperCase();
       }
</script>

