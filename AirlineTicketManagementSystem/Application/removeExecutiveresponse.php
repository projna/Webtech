<?php require_once "../DataService/person_service.php";?>
<?php require_once "../DataService/Executive_service.php";?>
<?php
    if ( !isset($_SESSION) )
    { session_start(); 
    
    } 
     
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
     
           
        
else 
{
	$i=$_SESSION["persontype"];
	if($i=="03")
    {
     $iid= $_GET['id'];
$result1= updateparsonclient($iid);
$result= removeexecutive($iid);
if($result)
{
    header("location:removeExecutive.php");  
}
	}
	else
	{
		header("location:AirTicketOnline.php");
	}
}