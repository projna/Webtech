<?php require_once "../DataService/Booking_service.php";?>
<?php
    if ( !isset($_SESSION) )
    { session_start(); } 
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
    else
    {
        foreach ($_SESSION["Flight"] as $list) 
        {
            $userid=$_SESSION["username"];
            $issuedate=date("Y-m-d");
            $date=new DateTime('+2 day');
            $expiredate= $date->format('Y-m-d');
            $flightid=$list["flight id"];
            $companyname=$list["ComapanyName"];
            $passEnger=$list["Noofpassenger"];
            $booking=array();
            $booking["fid"]=$flightid;
            $booking["cname"]=$companyname;
            $booking["pid"]=$userid;
            $booking["isdate"]=$issuedate;
            $booking["exdate"]=$expiredate;
            $booking["psnger"]=$passEnger;
            $result= addbooking($booking);
            if($result==TRUE)
            {
                
                 header("location:bookingconfirm.php");
            }
                else {
                    header("location:cart.php");
                }
        }
        
        
    }
?>

