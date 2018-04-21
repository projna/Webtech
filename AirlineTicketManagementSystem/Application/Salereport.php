<?php require_once "../DataService/Sale_service.php";?>
<?php require_once "../DataService/flight_service.php";?>
<?php
if ( !isset($_SESSION) )
    { session_start(); } 
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
    else
    {
        $grandamount=0;
        foreach ($_SESSION["Flight"] as $list) 
        {
            $userid=$_SESSION["username"];
            $issuedate=date("Y-m-d");
            $date=new DateTime('+2 day');
            $expiredate= $date->format('Y-m-d');
            $flightid=$list["flight id"];
            $companyname=$list["ComapanyName"];
            $passEnger=$list["Noofpassenger"];
            $priceofticket=$list["price"];
            $amount=$passEnger*$priceofticket;
            $grandamount=$grandamount+$amount;
            $paytype=$_SESSION["paytype"];
            $_SESSION["Total"]=$grandamount;
            //$paytype=$_SESSION["paytype"];
            $booking=array();
            $booking["fid"]=$flightid;
            $booking["cname"]=$companyname;
            $booking["pid"]=$userid;
            $booking["isdate"]=$issuedate;
            $booking["payp"]=$paytype;
            $booking["taka"]=$amount;
            $seat=getTotalseatbyflightid($flightid);
            $seat["total seat"]=$seat["total seat"]-$passEnger;
            $r=updateseatbyid($flightid, $seat["total seat"]);
            
            
            $result= addsale($booking);
            if($result==TRUE)
            {
                
                 header("location:Saleconfirmres.php");
            }
                else {
                    header("location:cart.php");
                }
        }
        
    }
    
?>
