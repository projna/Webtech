<?php require_once "../DataService/person_service.php";?>
<?php
    if ( !isset($_SESSION) )
    { session_start(); 
    
    } 
    $_SESSION["paytype"]="card";
     
    if(isset($_SESSION["username"])==FALSE)
    {
        header("location:UserLoginPage.php");
    }
     
           
        
else 
{
	$i=$_SESSION["persontype"];
	if($i=="03")
    {
 $person= getAllPersonsbyexceptpersontypeid("03");
 
?>
<html>
    <title>
        Add Admin
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
                       Add Admin Details
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
                    Name
                    <hr>

                </th>
                 <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:8em"></span>
                     Address 
                     <hr>
                 </th>
                <th> 
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    DOB 
                    <hr>
                </th>
                
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Email Address
                    <hr>
                </th>
                <th>
                    <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                     Phone Number
                    <hr>
                </th>
                 <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                     Add
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
                    <?php echo $AddAdminList["id"] ?>
                </td>
                 <td> 
                     <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:2.5em"></span>
                    <?php echo $AddAdminList["name"] ?>
                </td>
                <td> 
                    <br>
                     <font color="#AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $AddAdminList ["address"] ?>
                </td>
                <td>
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:2em"></span>
                    <?php echo $AddAdminList["DOB"] ?>
                </td> 
                <td> 
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $AddAdminList["email"] ?>
                </td>
                <td> 
                    <br>
                     <font color="AEC678">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:3.5em"></span>
                    <?php echo $AddAdminList["phn"] ?>
                </td>
                <td> 
                    <br>
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:5em"></span>
                     <a href="AddAdminResponse.php?id=<?=$AddAdminList["id"]?>"><font color="#EA2E21"> Update</a>
                </td>
            </tr>

            <?php } ?>
        </table>
    </body>
</html>
<?php
}
	else
	{
		header("location:AirTicketOnline.php");
	}
}
?>