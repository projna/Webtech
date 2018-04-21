<?php require_once "../DataService/companyinfo_service.php"; ?>
<?php $company=getAllcomapnyName();?>
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
            $perid=$_GET['id'];
            ?>
<html>
     <head>
	   <title>
          Add executive
            </title>
        </head>
 <body>
     <?php include("airLineName.php");?>
     <form method="post" name="Formex" >
     
	
	<fieldset>
                    <font color="#0CCFFA"/>
                   <font face ="Garamond"/>
                   <h2>
                   <span style="margin-left:22em"></span>
                   <b>
                       Add Executive Process
                        <span style="margin-left:50.5em"></span>
                   </b>
                   </h2>  
                   <hr>
                   <br>
               
        <form name="ExecutiveForm" method="POST">
            
            <input style="margin-left:3.9em;height:40px; width:250px "  name="id" hidden value="<?php echo $perid; ?>">
            <br>
            <span style="margin-left:33em"></span>                 
             <font color="#CACFD2"/>
            <font face ="Garamond"/>
            Company Name:
            <select style="margin-left:2.5em;height:40px; width:250px "  name="Company">
               <?php foreach ($company as $Company) {?>
                <option><?php echo $Company["company name"]?></option>
                 <?php }?> 
          </select>
            <br>
            <span style="margin-left:33em"></span>                 
            <font color="#CACFD2"/>
            <font face ="Garamond"/>
            Executive ID:
            <input name="Executive id" type="textbox" style="margin-left:3.9em;height:40px; width:250px " onchange="Checkusername()" onfocusout="Checkusername()"/>
            <div style="color:#FA1B0C ; margin-left: 33em" name="iddiv"></div>
            <br></br>
            <input type="button"  style="margin-left:50.3em;height:40px; width:250px " id="buttongo" value="ADD" onclick="procedd()" />
            
        </form>
        </fieldset>
    </body>
</html>
<script>
    var executiveidflag=false;
    function Checkusername()
    {
        var divobj=document.getElementsByName("iddiv")[0];
        var textdiv=document.getElementsByName("Executive id")[0];
        var xmlreq= new XMLHttpRequest();
        xmlreq.open('GET',"allexecutive.php",true);
        xmlreq.send();
        var exid=textdiv.value;
        if(isEmpty(exid))
        {
            divobj.innerHTML="Input a username";
            executiveidflag=true;
           
        }
        else
        {
            executiveidflag=callback(executiveidflag);
            
        }
        function callback(flag)
       {
           ajax();
           return flag;
       }
       function ajax()
       {
           xmlreq.onreadystatechange=function()
               {
                   if(xmlreq.readyState==4)
                   {
                       var jsondata=JSON.parse(xmlreq.responseText);
                       
                       for(var i=0;i<jsondata.length;i++)
                         {
                              if(jsondata[i].executiveid==exid)
                             {
                                    divobj.innerHTML="Username already available";
                                    executiveidflag=true;
                                    callback(executiveidflag);
                                    break;
                                    
                             }
                             else
                             {
                                 divobj.innerHTML="Username correct";
                                 
                                 executiveidflag=false;
                                 callback(executiveidflag);
                             }
                         }
                      
                   }
               }
       }
    }
    function procedd()
    {
        var textdiv=document.getElementsByName("Executive id")[0];
        var exid=textdiv.value;
        if(executiveidflag==false && isEmpty(exid)==false )
        {
        var formobj=document.getElementsByName("Formex")[0];
        formobj.action="Addexecutiveresponse.php";
        formobj.submit();
        }
        else
        {
            alert("Wrong information");
        }
    }
 function isEmpty(str)
 {
 return (!str || 0 === str.length);
 }
</script>
	
     
    <?php }
	else
	{
		header("location:AirTicketOnline.php");
	}
}
?>