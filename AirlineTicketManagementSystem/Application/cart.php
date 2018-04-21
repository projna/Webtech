<?php require_once "../DataService/flight_service.php";?>

<?php
    
   
    if ( !isset($_SESSION) )
    { session_start(); } 
    if(empty($_GET)==FALSE)
    {
        
        $flightid=$_GET["id"];
        $companyName=$_GET["companyname"];
        $passenger=$_GET["noofpassanger"];
        $flight= getFlightinfoByid($flightid);
        $flight["ComapanyName"]=$companyName;  
        $flight["Noofpassenger"]=$passenger;
        unset($_SESSION["Flight"][50]);
        $_SESSION["Flight"][$_SESSION["Counter"]]=$flight;
        $_SESSION["Counter"]++;
        $_SESSION["Flag"]=TRUE;
        
    }
    
?>
<html>
    <title>
        MyTrip
    </title>
    <body>
        <?php include("airLineName.php"); ?>
        <?php if($_SESSION["Flag"]) { ?>
        <form>
        <table>
            <tr>
                <fieldset>
                    <font color="#0CCFFA"/>
                   <font face ="Garamond"/>
                   <h2>
                   <span style="margin-left:25em"></span>
                   <b>
                       Cart Details
                        <span style="margin-left:50.5em"></span>
                   </b>
                   </h2>  
                </fieldset>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:3.5em"></span>
                    Flights
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                    Departure
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                    From
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                    To
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                    Time
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                    Available
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                    Price
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                    passenger(s)
                    <hr>
                </th>
                
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                      Remove
                    <hr>
                </th>  
            </tr>
            <?php
            if(empty($_SESSION["Flight"])==FALSE)
            { $grandAmount=0;
            foreach ($_SESSION["Flight"] as $key => $list) { ?>
            
            <tr>
                <td> 
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:0em"></span>
                    <?php echo $list["ComapanyName"]?>
                </td>
                 <td>
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3.5em"></span>
                     <?php echo $list["Date"] ?>
                 </td>
                <td> 
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3em"></span>
                    <?php echo $list["departure"] ?>
                </td>
                <td> 
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:2.2em"></span>
                    <?php echo $list["arrival"] ?>
                </td>
                <td> 
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3.2em"></span>
                    <?php echo $list["time"] ?>
                </td>    
                <td> 
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:5em"></span>
                    <?php echo $list["total seat"] ?>
                </td>
                <td> 
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $list["price"] ?>
                </td>
                <td> 
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $list["Noofpassenger"] ;
                            $amount=$list["price"]*$list["Noofpassenger"];
                            $grandAmount=$grandAmount+$amount;?>
                </td>
                
                <td> 
                     <span style="margin-left:4em"></span>
                    <a href="CartRemove.php?id=<?=$key?>"><font color="#EA2E21"> Remove</a>
                </td>
            </tr>
           
            <br> 
        </table>
            
        
        <?php } ?>
            <br></br>
	<span style="margin-left:31.5em"></span>
        Total Amount= <?= $grandAmount ; ?><br>
        
	<span style="margin-left:28em"></span>
        <input name="Book" value="Book Now" onclick="Bookevent()" type="button" onclick="checkall()" style="height:40px; width:150px ; color:#306313"/>
        <input name="PayNow" value="Pay Now" type="button" onclick="checkall()" style="height:40px; width:150px ; color:#306313"/>
         
            </form>
        
           <?php } 
        else {?>
        <fieldset>
             <font color="#F04034">
                     <font face ="Garamond">
                     <font size="4">                     
                     <h2>
                         <span style="margin-left:20em"></span>
                         Cart is Empty
                     </h2>
        </fieldset>
      <?php } ?>
        
      <?php  }
      else {?>
        <fieldset>
             <font color="#F04034">
                     <font face ="Garamond">
                     <font size="4">                     
                     <h2>
                         <span style="margin-left:20em"></span>
                         Cart is Empty
                     </h2>
        </fieldset>
      <?php } ?>
        
    </body>
</html>
<script>
    function Bookevent()
    {
        var url="Bookinginsert.php";
        window.location.href=url;
    }
    function checkall()
    {
        var url="payment.php";
        window.location.href=url;
    }
</script>


