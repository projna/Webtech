
<html>
    <title>
        ConFirm Sale
    </title>
    <body>
        <?php include("airLineName.php"); ?>
        <form>
        <table>
            <tr>
                <fieldset>
                    <font color="#0CCFFA"/>
                   <font face ="Garamond"/>
                   <h2>
                   <span style="margin-left:22em"></span>
                   <b>
                       Confirm Sale List 
                        <span style="margin-left:50.5em"></span>
                   </b>
                   </h2>  
                   <b> Total <?=$_SESSION["Total"] ?> Paid by <?= $_SESSION["paytype"] ?></b>
                </fieldset>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="5">
                     <span style="margin-left:3.5em"></span>
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
                     <span style="margin-left:4em"></span>
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
                     <span style="margin-left:4em"></span>
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
                
            </tr>
            <?php
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
                     <span style="margin-left:3.5em"></span>
                    <?php echo $list["price"] ?>
                </td>
                <td> 
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="4">
                     <span style="margin-left:5em"></span>
                    <?php echo $list["total seat"] ?>
                </td>
                
            </tr>
           
            
        </table>
            <br>
            
        
        <?php } ?>
            <br></br>
	<span style="margin-left:30em"></span>
        <input name="Book" value="Go" onclick="Bookevent()" type="button" onclick="checkall()" style="height:40px; width:250px ; color:#1A5A29"/>

         
            </form>
<?php
   if ( !isset($_SESSION) )
    { session_start(); }
    unset($_SESSION["Flight"]);
    unset($_SESSION["Total"]);
?>
    </body>
</html>
<script>
    function Bookevent()
    {
        var url="AirTicketOnline.php";
        window.location.href=url;
    }

</script>


