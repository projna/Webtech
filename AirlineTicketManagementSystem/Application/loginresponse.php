<?php require_once "../DataService/person_service.php"; ?> 
<?php
if(empty($_POST))
{
    header("location:UserLoginPage.php");
}
else
{
if ( !isset($_SESSION) )
    { session_start(); }
$name= $_POST["Username"];
$guest= $_POST["GuestEmail"];
$perSondetails= getPersonById($name);
$_SESSION["username"]=$perSondetails["id"];
$_SESSION["Name"]=$perSondetails["name"];
$_SESSION["Address"]=$perSondetails["address"];
$_SESSION["dob"]=$perSondetails["DOB"];
$_SESSION["Email"]=$perSondetails["email"];
$_SESSION["Phone"]=$perSondetails["phn"];
$_SESSION["persontype"]=$perSondetails["persontypeid"];

if(empty($_POST["check"])==FALSE)
{
   $name= $_POST["Username"];
   $Cookie_name="USERNAME";
   setcookie($Cookie_name, $name, time()+60);
}
header("location:AirTicketOnline.php");
}
?>

