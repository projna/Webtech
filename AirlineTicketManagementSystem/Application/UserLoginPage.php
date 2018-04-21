<html>
	<head>
	<title> Login User </title>
	</head>
	<body>
	<?php
	include("airLineName.php");
	?>
            <form method="POST" id="Form">
         <fieldset >
	<font color="#CACFD2">
	<font face ="Garamond">
	<span style="margin-left:4.5em"></span>
	
	<h2>
            <b>
         <font color="#24AAD5">
	<font face ="Garamond">
                <span style="margin-left:27em"></b></span>	
	<b>Login</b>
	</h2>
	<hr>
	<br>
	<font color="#9B9923">
	<font face ="Garamond">
	<span style="margin-left:34em"></span>
	
	Are You a member of BD AirGo?
	<br></br>
        <font color="#35B1B9">
        
	<span style="margin-left:34em"></span>
        <b>Username:</b>
        <br>
        <span style="margin-left:34em"></span>
        <input name="Username"  type="textbox"  onfocusout="userNameCheck()" onchange="userNameCheck()"  style="height:40px; width:250px ; color:#35B1B9"/>
        
	<div style="color:#B99935 ; margin-left: 34em" id="userdiv"></div>
	<br>
	</br>
	<span style="margin-left:34em"></span>
        <b>Password:</b>
        <br>
        <span style="margin-left:34em"></span>
        <input name="Password" onchange="passcheck()" type="password"  style="height:40px; width:250px ; color:#474B4C"/>
        
	<br>
        </br>
        <div style="color:#B99935 ; margin-left: 34em" id="passdiv"></div>
	<input style =" margin-left: 41em" type="checkbox" name="check" value="remember"/>
	<font color="#CACFD2 ">
	<font face ="Garamond">
	Remember Me
	<br>
	</br>
	
	
	<span style="margin-left:34em"></span>
	<input name="LogIn-Button" value="Log In" type="Button" onclick="login()"  style="height:40px; width:250px ; color:#091184"/>
	<br><br>
	<font color="#9B9923">
	<font face ="Garamond">
	<span style="margin-left:34em"></span>
        Don't have an account?<a href="signup.php"><font color="#25C1A9">
	Sign Up </font></a>
	
	</fieldset>   
        </form>
	
	
	</body>
</html>

<script> 
var usercheckflag=false;
var passflag=false;
function userNameCheck()
{
    
    var userdivobj =document.getElementById("userdiv");
    var userobj=document.getElementsByName("Username")[0];
    var xmlreq= new XMLHttpRequest();
    xmlreq.open('GET',"getAllperson.php",true);
    xmlreq.send();
    var username=userobj.value;
    if(isEmpty(username))
       {
           
           userdivobj.innerHTML="Please input a username";
           usercheckflag=false;
       }
       else
       {
          usercheckflag=callback(usercheckflag);
       }
       function callback(flag)
       {
           ajax();
           return flag;
       }
       function ajax()
       {
            xmlreq.onreadystatechange=function ()
               {
                   if(xmlreq.readyState ==4)
                   {
                       var jsondata=JSON.parse(xmlreq.responseText);
                       for(var i=0;i<jsondata.length;i++)
                         {
                              if(jsondata[i].id==username)
                             {
                                    userdivobj.innerHTML="Username available";
                                    usercheckflag=true;
                                    callback(usercheckflag);
                                    break;
                                    
                             }
                             else
                             {
                                 userdivobj.innerHTML="Username not available";
                                 usercheckflag=false;
                                 
                             }
                         }
                   } 
               }
       }
       
          
}
function login()
{
     
           if(passflag==true && usercheckflag==true)
           {
               var loginformobj=document.getElementById("Form");
               loginformobj.action="loginresponse.php";
               loginformobj.submit();
               
           }
           else
           {
               alert("Wrong");
           }
               
}
function passcheck()
{
    var passdivobj =document.getElementById("passdiv");
    var passobj=document.getElementsByName("Password")[0];
    pass=passobj.value;
     if(usercheckflag==true)
           {
               if(isEmpty(pass))
               {
                   passdivobj.innerHTML="Enter Your Password";
                   passflag=false;
               }
               else
               {
                   passflag=callback(passflag);
               }
               function ajaxpass()
               {
                   var xmlreq1= new XMLHttpRequest();
                   xmlreq1.open('POST',"getPasswordbyid.php",true);
                   var userobj=document.getElementsByName("Username")[0];
                   var username=userobj.value;
                   var senddata="UserName="+username;
                   xmlreq1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                   xmlreq1.onreadystatechange=function()
                   {
                       if(xmlreq1.readyState==4)
                       {
                           var objdata=xmlreq1.responseText;
                           var pass=passobj.value;
                           jsonpass=JSON.parse(objdata);              
                           if(jsonpass.password==pass)
                           {
                               passflag=true;
                               callback(passflag);
                               passdivobj.innerHTML="Password Matched";
                               
                           }
                           else
                           {
                               passdivobj.innerHTML="Wrong Password";
                               passflag=false;
                           }
                       }
                   }
                   xmlreq1.send(senddata);
                   
               }
               function callback(flag)
                 {
                    ajaxpass();
                    return flag;
                }
           }
           else
           {
               passdivobj.innerHTML="Check Your User Name";
               
           }
}

function isEmpty(str)
       {
       return (!str || 0 === str.length);
        }
</script>