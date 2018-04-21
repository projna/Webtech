<?php
    if ( !isset($_SESSION) )
    { session_start(); }
    if(isset($_SESSION["username"])==FALSE)
    {
        include_once("airlinelogin.php");  
    }
    else 
    {
      include_once("airLineLogout.php");  
    }
?>