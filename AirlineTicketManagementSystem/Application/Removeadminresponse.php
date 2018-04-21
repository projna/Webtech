<?php require_once "../DataService/person_service.php";?>
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
$result= updateparsonclient($iid);
if($result)
{
    header("location:removeAdmin.php");  
}
	}
	else
	{
		header("location:AirTicketOnline.php");
	}
}