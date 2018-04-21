<?php require_once "../DataService/flight_service.php";?>
<?php require_once "../DataService/companyinfo_service.php";?>
<?php require_once "../DataService/Booking_service.php";?>
<?php
    if ( !isset($_SESSION) )
    { session_start(); 
    
    } 
     
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
 else {
     
    $userid=$_SESSION["username"];
    $todate=date("Y-m-d");
    $flist=getbookingbyid($userid,$todate);
    
    //$flist= getAllflightsbyiddeparturearrivaldate($cid, $departue, $arrival, $date,$numberofticket);
    
?>
<html>
    <title>
        Flightlist
    </title>
    <body>
        <?php include("airLineName.php"); ?>
        <table>
            <tr>
                <fieldset>
                    <font color="#0CCFFA"/>
                   <font face ="Garamond"/>
                   <h2>
                   <span style="margin-left:22em"></span>
                   <b>
                       Booking
                        <span style="margin-left:50.5em"></span>
                   </b>
                   </h2>  
                </fieldset>
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="5">
                     <span style="margin-left:2em"></span>
                    Flights
                    <hr>
                </th>
                 <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="5">
                     <span style="margin-left:4em"></span>
                    Departure
                    <hr>

                </th>
                 <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="5">
                     <span style="margin-left:4.4em"></span>
                     From 
                     <hr>
                 </th>
                <th> 
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="5">
                     <span style="margin-left:4em"></span>
                    To 
                    <hr>
                </th>
                
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="5">
                     <span style="margin-left:4em"></span>
                    Time
                    <hr>
                </th>
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="5">
                     <span style="margin-left:4.7em"></span>
                    Price
                    <hr>
                </th>
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="5">
                     <span style="margin-left:4em"></span>
                    Available
                    <hr>
                </th>
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="5">
                     <span style="margin-left:4.5em"></span>
                    Booking
                    <hr>
                    <span style="margin-left:3em"></span>
                </th>  
            
            <?php foreach ($flist as $list) { 
                
                $flightdetail= getFlightinfoByid($list["flightid"]);
                
                
                
                ?>
            <tr>
                <td> 
                     <br>
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="2">
                     <span style="margin-left:0em"></span>
                    <?php echo $list["companyname"] ?>
                </td>
                 <td> 
                     <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3em"></span>
                    <?php echo $flightdetail["Date"] ?>
                </td>
                <td> 
                    <br>
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $flightdetail["departure"] ?>
                </td>
                <td>
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:2em"></span>
                    <?php echo $flightdetail["arrival"] ?>
                </td> 
                <td> 
                     <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $flightdetail["time"] ?>
                </td>
                <td> 
                     <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $flightdetail["price"] ?>
                </td>
                <td> 
                     <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:5em"></span>
                    <?php echo $flightdetail["total seat"]; ?>
                </td>
                <td> 
                     <br>
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3em"></span>
                    <a href="cart.php?id=<?= $flightdetail['flight id'] ?>&companyname=<?= $list["companyname"] ?>&noofpassanger=<?= $list["passenger"] ?>"><font color="#1FD2CD"> Add To Cart</a>
                </td>
            </tr>

            <?php } ?>
        </table>
    </body>
</html>

        
<?php } ?>
