<?php require_once "../DataService/person_service.php"; ?>
<html>
    
 <head>
	<title> Signing Up </title>
 </head>
 <body>
     <form method="post" id="Form" >
     
	<?php include("airLineName.php");?>
	<fieldset>
            
        <font color="#CACFD2"/>
	<font face ="Garamond"/>
	<h3>
	<span style="margin-left:4em"></span>
	<b>Sign Up</b>
	</h3>
	<hr>
	<font color="#248DDF "/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	<b>Personal Details</b>
	<hr>
	<br>
        <font color="#CACFD2 "/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	Name
	<br>
	<span style="margin-left:4.5em"></span>
        <select name="Title" onchange="titleevent()"  style="height:40px; width:150px ; color:#313435">
            <option >Title </option>
            <option>MD.</option>
            <option >Mr. </option>
            <option value="Mrs.">Mrs.</option>
            <option value="Ms.">Ms.</option>
            <option value="DR.">DR. </option>
            <option value="Prof.">Prof.</option>
            <option value="Mjr.">Mjr.</option>
	</select>
        <input name="FirstName" value="    First Name" type="textbox" onfocusout="firstname()" style="height:40px; width:250px ; color:#474B4C"/>
	<input name="LastName" value="    Last Name" type="textbox" onfocusout="lastname()" style="height:40px; width:250px ; color:#474B4C"/>
        <div style="overflow: hidden;" id="wpbody-content" aria-label="Main content" tabindex="0">
        <div style="color:#FA1B0C ; margin-left: 4.5em" id="firstNameDiv"></div>
        <div style="color:#FA1B0C ; margin-left: 4.5em" id="lastNameDiv" ></div>
        <div style="color:#FA1B0C ; margin-left: 4.5em" id="titleDiv" ></div>
	<br>
	<font color="#7B8283 "/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	(Your name as it appears on your passport / driving license / election photo ID or a photo credit card.)
	<br><br>
	<font color="#CACFD2 "/>
	<font face ="Garamond"/><span style="margin-left:4.5em"></span>
	User Name
	<br>
	<span style="margin-left:4.5em"></span>
        <input name="userName" value="UserName"  type="textbox" onfocusout="userNameCheck()" style="height:40px; width:250px ; color:#474B4C"/>
        <div  style="color:#FA1B0C ; margin-left: 4.5em" id="userdiv" > </div>
	<br><br>
	<font color="#CACFD2 "/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	Area of Residence
	<font color="#CACFD2 ">
	<font face ="Garamond">
	<span style="margin-left:18.5em"></span>
	Date Of Birth
	<br>
	<span style="margin-left:4.5em"></span>
	<input name="Discrict" onfocusout="areaevent()" style="height:40px; width:405px ; color:#474B4C"/> 
	<input name="DOB" type="date" onfocusout="dobevent()" value="<?php echo date('Y-m-d');?>" min='1910-01-01' max='2015-12-31' style="height:40px; width:250px ; color:#474B4C"/>
	<input name="MobileNumber" value="mobile number" onfocusout="mobilenumber()" type="textbox" style="height:40px; width:250px ; color:#474B4C"/>
        <div style="color:#FA1B0C ; margin-left: 4.5em" id="Districtdiv" ></div>
        <div style="color:#FA1B0C ; margin-left: 4.5em" id="dobdiv" ></div>
        <div style="color:#FA1B0C ; margin-left: 4.5em" id="mobilenumberdiv" ></div>
	<br>
	<br>
	<font color="#CACFD2 "/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	Email Address
	<br>
	<span style="margin-left:4.5em"></span>
        <input name="EmailAddress" value="      Email Address" type="email" onfocusout="email()" style="height:40px; width:250px ; color:#474B4C"/>
        <div  style="color:#FA1B0C ; margin-left: 4.5em" id="Emaildiv"></div>
	<br>
	<font color="#7B8283 "/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	(The email address should not be used with any other BD AirGo account.)
	<br><br>
	<hr>
	<font color="#24DFC3 "/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	<b>Password Information</b>
	<hr>
	<br>
        <font color="#CACFD2 "/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	Enter Password
	<br>
	<span style="margin-left:4.5em"></span>
	<input  name="EnterPassword" type="password" onfocusout="passwordevent()" style="height:40px; width:450px ; color:#474B4C"/>
        <div style="color:#FA1B0C ; margin-left: 4.5em"  id="passdiv"></div>
	<br>
        <font color="#CACFD2 "/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	Re-Enter Password
	<br>
	<span style="margin-left:4.5em"></span>
	<input name="ReEnterPassword" type="password" onfocusout="repassword()" style="height:40px; width:450px ; color:#474B4C"/>
        <div style="color:#FA1B0C ; margin-left:4.5em"  id="repassdiv"></div>
	<br> <br>
	<font color="#CACFD2"/>
	<font face ="Garamond"/>
	<span style="margin-left:4.5em"></span>
	<u>Your Password Must Have:</u>
	<ul>
	<li><span style="margin-left:2em"></span> Your Password Must be larger than 8 characters . </li>
	</ul>
	<br>
	<span style="margin-left:70em"></span>
        <input name="Continue" value="Continue" type="button" onclick="checkall()" style="height:40px; width:150px ; color:#24DFC3"/>
          
        
	
	</fieldset>
     </form>
 </body>
</html>
<script>
    function firstname()
    {
       var nameflag=true;
       var divobj =document.getElementById("firstNameDiv");
       var textobj =document.getElementsByName("FirstName")[0];
       var name=textobj.value;
       if(isEmpty(name))
       {
           divobj.innerHTML="Please input a name";
           nameflag=false;
       }
       else
       {
           if(name=="    First Name")
           {
               divobj.innerHTML="1.Please input first name";
               nameflag=false;
           }
           else
           {
                for(var i=0;i<name.length;i++)
             {
                if(isLetter(name.charAt(i)) || name.charAt(i)==" "  )
                    {
                      
                    }
                 else
                    {
                      divobj.innerHTML="Name can only contain Letter";
                      nameflag=false;
                      break;
                    }
             }
           }
       }
        if(nameflag==true)
       {
           divobj.innerHTML="";
           return true;
       }
       else
       {
           return false;
       }
          
}

function lastname()
    {
       var nameflag=true;
       var divobj =document.getElementById("lastNameDiv");
       var textobj =document.getElementsByName("LastName")[0];
       var name=textobj.value;
       if(isEmpty(name))
       {
           divobj.innerHTML="Please input a name";
           nameflag=false;
       }
       else
       {
           if(name=="    Last Name")
           {
               divobj.innerHTML="2.Please input last name";
               nameflag=false;
           }
           else
           {
                for(var i=0;i<name.length;i++)
             {
                if(isLetter(name.charAt(i)) || name.charAt(i)==" "  )
                    {
                      
                    }
                 else
                    {
                      divobj.innerHTML="Name can only contain Letter";
                      nameflag=false;
                      break;
                    }
             }
           }
       }
       if(nameflag==true)
       {
           divobj.innerHTML="";
           return true;
       }
       else
       {
           return false;
       }
   
}

function titleevent()
{   
    var titlefalg=true;
    var divobj =document.getElementById("titleDiv");
    var selectobj=document.getElementsByName("Title")[0];
    var tl=selectobj.value;
    if(tl=="Title")
    {
        divobj.innerHTML="Please select a title";
        titlefalg=false;
    }
   else
   {
       divobj.innerHTML="";
   }
   if(titlefalg==true)
   {
       return true;
   }
   else
   {
       return false;
   }
}
function areaevent()
{   
    var areaflag=true;
    var divobj =document.getElementById("Districtdiv");
    var selectobj=document.getElementsByName("Discrict")[0];
    var tl=selectobj.value;
    if(isEmpty(tl))
    {
        divobj.innerHTML="1.Please enter your residance information";
        areaflag=false;
    }
   else
   {
      divobj.innerHTML="";
   }
   if(areaflag==true)
   {
       return true;
   }
   else
   {
       return false;
   }
}
function dobevent()
{
    var dobflag=true;
    var divobj =document.getElementById("dobdiv");
    var selectobj=document.getElementsByName("DOB")[0];
    var dob=selectobj.value;
    if(isEmpty(dob))
    {
        divobj.innerHTML="2.Please input your date of birth";
        dobflag=false;
    }
    else
    {
        divobj.innerHTML="";
    }
    if(dobflag==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function mobilenumber()
{
    mobileflag=true;
    var divobj =document.getElementById("mobilenumberdiv");
    var selectobj=document.getElementsByName("MobileNumber")[0];
    var mobile=selectobj.value;
    console.log(mobile);
   if(isEmpty(mobile))
    {
        divobj.innerHTML="Please input your mobilenumber";
        mobileflag=false;
    }
    else
    {
        if(mobile.length>14 || mobile.length<8)
        {
           divobj.innerHTML="wrong mobilenumber"; 
           console.log("hello their");
           mobileflag=false;
        }
        else
        {
              for(var i=0;i<mobile.length;i++)
             {
                if(isLetter(mobile.charAt(i)))
                    {
                      divobj.innerHTML="3.Fill the content with valid mobile number ";
                      mobileflag=false;
                      break;
                    }
             }
        }
    }
    if(mobileflag==true)
    {
        divobj.innerHTML="";
        return true;
    }
    else
    {
        return false;
    }
    
}
function email()
{
    var emailflag=true;
    var divobj =document.getElementById("Emaildiv");
    var emailobj=document.getElementsByName("EmailAddress")[0];
    var email=emailobj.value;
    if(isEmpty(email))
    {
        divobj.innerHTML="Input a mail";
        emailflag=false;
    }
    else
    {
        if(email=="Email Address")
        {
            divobj.innerHTML="Input a mail address";  
            emailflag=false;
        }
        else
        {
            if(email.indexOf("@")>0 &&  email.indexOf(".com")>0)
            {
                divobj.innerHTML="";
            }
            else
            {
                divobj.innerHTML="Wrong Email";
                emailflag=false;
            }
        }
        
    }
    if(emailflag==true)
    {
        return true;
    }
    else
    {
        return false;
    }
    
}
function userNameCheck()
{
    userflag=true;
    var divobj =document.getElementById("userdiv");
    var userobj=document.getElementsByName("userName")[0];
    var xmlreq= new XMLHttpRequest();
    xmlreq.open('GET',"getAllperson.php",true);
    xmlreq.send();
    var username=userobj.value;
    if(isEmpty(username))
       {
           
           divobj.innerHTML="Please inPut a username";
           userflag=false;
       }
       else
       {
           if(username=="UserName")
           {
               divobj.innerHTML="Please input a username";
               userflag=false;
           }
           else
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
                                    divobj.innerHTML="Username already available";
                                    userflag=false;
                             }
                         }
                   }
               }
               
           }
           
       }
    
       if(userflag==true)
       {
           divobj.innerHTML="";
           return true;
       }
       else
       {
           return false;
       }
   
    
}
function passwordevent()
{
    passflag=true;
    var divobj =document.getElementById("passdiv");
    var passobj=document.getElementsByName("EnterPassword")[0];
    var pass=passobj.value;
    if(isEmpty(pass))
    {
        divobj.innerHTML="Enter your password";
        passflag=false;
    }
    else
    {
        if(pass.length<8)
        {
            divobj.innerHTML="Password Must be 8 or long";
            passflag=false;
        }
    }
    if(passflag==true)
    {
        divobj.innerHTML="";
        return true;
    }
    else
    {
        return false;
    }
}
function repassword()
{
    
    repassflag=true;
    var divobj =document.getElementById("repassdiv");
    var passobj=document.getElementsByName("ReEnterPassword")[0];
    var repassobj=document.getElementsByName("EnterPassword")[0];
    var pass=passobj.value;
    var repass=repassobj.value;
    if(isEmpty(repass))
    {
        divobj.innerHTML="Enter your password again";
        repassflag=false;
    }
    else
    {
        if(repass!==pass)
        {
            divobj.innerHTML="Password don't match";
            repassflag=false;
        }
        
    }
    if(repassflag==true)
    {
        divobj.innerHTML="";
        return true;
    }
    else
    {
        return false;
    }
}
function checkall()
{
    checkflag=false;
    if(firstname() && lastname() && areaevent() && dobevent() && email() && mobilenumber() && passwordevent() && repassword() && titleevent() && userNameCheck()  )
    {
        var formobj=document.getElementById("Form");
        formobj.action="Signupresponse.php";
        formobj.submit();
    }
    else
    {
        alert("Wrong Information");
        console.log("I am in else");
    }
}

     function isEmpty(str)
       {
       return (!str || 0 === str.length);
        }
       function isLetter(c) 
       {
        return c.toLowerCase() != c.toUpperCase();
       }
   
</script>

    