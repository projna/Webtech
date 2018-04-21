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
            
        <font color="#28D1B5"/>
	<font face ="Garamond"/>
	<h2>
	<span style="margin-left:22em"></span>
	<b>Payment Method</b>
	</h2>
       
      
        </fieldset>
          <?php include("paymentOption.php");?>
         
           </body>
     </html>
 <?php    } ?>