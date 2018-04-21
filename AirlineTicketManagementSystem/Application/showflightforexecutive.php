<?php require_once "../DataService/flight_service.php";?>
<?php require_once "../DataService/companyinfo_service.php";?>
<?php require_once "../DataService/Executive_service.php"; ?>
<?php
if ( !isset($_SESSION) )
    { session_start(); 
    
    } 
    $resl=getcompanyidbypersonid($_SESSION["username"]);
    $flightlists= getallflightsbycompanyids($resl["company id"]);
    
?>
<html>
    <title>
        Show Flight List
    </title>
    <body>
        <?php include("airLineName.php"); ?>
        <table>
            <tr>
                <fieldset>
                    <font color="#0CCFFA"/>
                   <font face ="Garamond"/>
                   <h2>
                   <span style="margin-left:23em"></span>
                   <b>
                       Flight List
                        <span style="margin-left:50.5em"></span>
                   </b>
                   </h2>  
                </fieldset>
            <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4em"></span>
                    Flight ID
                    <hr>
                </th>
                 <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:11em"></span>
                    Airline
                    <hr>

                </th>
                 <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Departure
                    <hr>
                </th>  
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Time
                    <hr>
                </th>
                 <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                     From 
                     <hr>
                 </th>
                <th> 
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    To 
                    <hr>
                </th>
                
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                     Fare
                    <hr>
                </th>
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                     Total Seat
                    <hr>
                </th>
                
            <?php foreach ($flightlists as $flights) { ?>
            <tr>
                <td> 
                    <br>
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:0em"></span>
                    <?php echo $flights["flight id"] ?>
                </td>
                 <td> 
                     <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:0em"></span>
                    <?php $i=$flights["company id"];
                    $companyName= getCompanynameByid($i);
                             echo $companyName["company name"];
                     ?>
                </td>
                <td> 
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:0em"></span>
                     <?php echo $flights["Date"] ?>
                </td>
                 
                <td> 
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:0em"></span>
                     <?php echo $flights["time"] ?>
                </td>
                <td> 
                    <br>
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:0em"></span>
                    <?php echo $flights["departure"] ?>
                </td>
                <td>
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:2em"></span>
                    <?php echo $flights["arrival"] ?>
                </td> 
                <td> 
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4.5em"></span>
                    <?php echo $flights["price"] ?>
                </td>
                <td> 
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:4.5em"></span>
                    <?php echo $flights["total seat"] ?>
                </td>
                
               
            </tr>

            <?php } ?>
        </table>
    </body>
</html>