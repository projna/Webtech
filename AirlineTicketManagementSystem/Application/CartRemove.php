<?php
session_start();
$i= $_GET['id'];
unset($_SESSION["Flight"][$i]);
/*for ($j=$i;$i<$_SESSION["Counter"]-1;$j++)
{
    $_SESSION["Flight"][$j]=$_SESSION["Flight"][$j+1];
}
$_SESSION["Counter"]--;*/
header("location:cart.php");
?>

