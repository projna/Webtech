<?php require_once "../DataService/Sale_service.php"; ?>
<?php if(empty($_GET))
{
    $sale= allsale();
}
 else
 {
   $companyname=$_GET['id'];
   $sale= allsalebycompany($companyname);
 }
     

?>
<html>
    <head>
        <title>
            Total Sale
        </title>
    </head>
    <body>
         <?php include("airLineName.php"); ?>
        <table>
            <tr>
                <fieldset>
                    <font color="#0CCFFA"/>
                   <font face ="Garamond"/>
                   <h2>
                   <span style="margin-left:20em"></span>
                   <b>
                      <?php  if(empty($_GET))
                      {
                          echo "Total Sale";
                      } 
                      else {echo " ".$companyname." (Sale Report)";}
                      ?>

                        <span style="margin-left:50.5em"></span>
                   </b>
                   </h2> 
                    <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Flight ID
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Company Name
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    User Name
                    <hr>
                </th>
               
               
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Issue Date
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:8em"></span>
                    Amount
                    <hr>
                </th>
                <th>
                     <br>
                     <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    Payment Type
                    <hr>
                </th>
           <?php $GrandAmount=0;  
           foreach ($sale as $salereport) { ?>
                    
                    
                <tr>
                    <td>
                      <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                   <?= $salereport["flightid"] ?>
                    </td>
                     <td>
                      <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    <?= $salereport["companyname"] ?>
                    </td>
                     <td>
                      <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:8em"></span>
                    <?= $salereport["userid"] ?>
                    </td>
                     <td>
                      <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    <?= $salereport["issuedate"] ?>
                    </td>
                     <td>
                      <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    <?php
                    $amount=$salereport["amount"] ;
                    $GrandAmount=$GrandAmount+$amount;
                    echo $amount;
                    
                    ?>
                    </td>
                     <td>
                      <font color="#AAADA4">
                     <font face ="Garamond">
                     <font size="3">
                     <span style="margin-left:7em"></span>
                    <?= $salereport["paymenttype"] ?>
                    </td>
                </tr>
           <?php } ?>
                
                 </fieldset>
            </tr>
            
        </table>
        <br></br>
        <h1>
             <font color="#1BE827">
                     <font face ="Garamond">
                     <font size="6">
                     <span style="margin-left:15em"></span>
            <b>  Total Sale=<?php echo $GrandAmount ?> /= tk
            <br>
            <font color="#1BE827">
                     <font face ="Garamond">
                     <font size="6">
                     <span style="margin-left:15em"></span>
                     Our company profit=<?= $GrandAmount* .05?>/= tk </b>  </h1>
    </body>
</html>