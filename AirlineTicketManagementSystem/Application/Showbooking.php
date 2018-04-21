<?php require_once "../DataService/Booking_service.php";?>
<?php
    if ( !isset($_SESSION) )
    { session_start(); 
    
    } 
     
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
     
           
        
else 
{   $i=$_SESSION["persontype"];
	if($i=="03")
    {
            
        
 $person= allbooking();
?>
<html>
    <title>
       Show Booking
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
                       Bookings
                        <span style="margin-left:50.5em"></span>
                   </b>
                   </h2>  
                </fieldset>
            <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    User Id
                    <hr>
                </th>
                 <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Flight id
                    <hr>

                </th>
                 <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:8em"></span>
                     Company name 
                     <hr>
                 </th>
                <th> 
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Issue date
                    <hr>
                </th>
                
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Expire date
                    <hr>
                </th>
                
                   
            <?php foreach ($person as $AddAdminList) { ?>
            <tr>
                <td> 
                    <br>
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                    <?php echo $AddAdminList["Userid"] ?>
                </td>
                 <td> 
                     <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:2.5em"></span>
                    <?php echo $AddAdminList["flightid"] ?>
                </td>
                <td> 
                    <br>
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $AddAdminList ["companyname"] ?>
                </td>
                <td>
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:2em"></span>
                    <?php echo $AddAdminList["issuedate"] ?>
                </td> 
                <td> 
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $AddAdminList["expiredate"] ?>
                </td>
                
                
            </tr>

            <?php } ?>
        </table>
    </body>
</html>
    <?php }
	else
	{
		header("location:AirTicketOnline.php");
	}
} ?>


