<html>
	<head>
		<title>Flight information</title>
	</head>
	<style>
	body
	{
    background-color: #1B2631;
	}
</style>
	<body>
	
            <fieldset>
	<font color="#04B5C1">
	<font face ="Garamond">
	<h2>
	<span style="margin-left:22em"></span>
	<b>Admin Control</b>
	</h2>
	<hr>
        
	<input name="removeMember" value="Remove Member" type="button"  onclick="removeMemberButton()" style="height:40px; width:140px ;color:#F02809" />
	<font face ="Garamond">
	<input name="addAdmin" value="Add Admin" type="button"  onclick="AddAdminButton()" style="height:40px; width:140px ;color:#14731E" /> 
	<font face ="Garamond">
	<input name="removeAdmin" value="Remove Admin" type="button"  onclick="removeAdminButton()" style="height:40px; width:140px ;color:#F02809" /> 
	<font face ="Garamond">
	<input name="addExecutive" value="Add Executive" type="button"   onclick="AddExecutiveButton()"  style="height:40px; width:140px ;color:#14731E" /> 
	<font face ="Garamond">
	<input name="removeExecutive" value="Remove Executive" type="button" onclick="removeExecutiveButton()" style="height:40px; width:140px ;color:#F02809" /> 

	
	<font face ="Garamond">
	<input name="Sale" value="S A L E" type="button"  onclick="SaleButton()" style="height:40px;width:140px ;color:#1F2E9B" />
	
	<font face ="Garamond">
	<input name="ShowFlight" value="Show Flight" type="button" onclick="showFlightButton()"  style="height:40px;width:140px ;color:#188418" />
        <font face ="Garamond">
        <input name="Show Bookings" value="Show Bookings" type="button"  onclick="ShowBookingsButton()" style="height:40px; width:140px ;color:#327421" />
	<font face ="Garamond">
        <input name="Remove Bookings" value="Remove Bookings" type="button"  onclick="RemoveBookingsButton()" style="height:40px; width:140px ;color:#F03A2E" />
	
        <hr>
        
         <font face ="Garamond">
         <span style="margin-left:24em"></span>
	<input name="Admins" value="Admins" type="button"  onclick="AdminsButton()" style="height:40px; width:180px ;color:#217C82" />
	<font face ="Garamond">
	<input name="Executives" value="Executives " type="button"  onclick="ExecutivesButton()" style="height:40px; width:180px ;color:#217C82" />
	<font face ="Garamond">
	<input name="Members" value="Members" type="button"  onclick="MembersButton()" style="height:40px; width:180px ;color:#217C82" />
	
            </fieldset>

</html>
<script>
    function SaleButton()
    {
    var url="SaleReportAdminMain.php";
    window.location.href=url;
    }
    function AddCompanyButton()
    {
    var url="AddCompany.php";
    window.location.href=url;
    }
    function RemoveCompanyButton()
    {
    var url="RemoveCompany.php";
    window.location.href=url;
    }
    function AddExecutiveButton()
    {
    var url="AddExecutive.php";
    window.location.href=url;
    }
    function AddAdminButton()
    {
    var url="addAdmin.php";
    window.location.href=url;
    }
     function showFlightButton()
    {
    var url="ShowFlightList.php";
    window.location.href=url;
    }
     function AdminsButton()
    {
    var url="ShowallAdmin.php";
    window.location.href=url;
    }
     function ExecutivesButton()
    {
    var url="Executives.php";
    window.location.href=url;
    }
     function MembersButton()
    {
    var url="membersList.php";
    window.location.href=url;
    }
    function removeMemberButton()
    {
    var url="removeMember.php";
    window.location.href=url;
    }
    function removeAdminButton()
    {
        var url="removeAdmin.php";
        window.location.href=url;
    }
    function removeExecutiveButton()
    {
       var url="removeExecutive.php";
       window.location.href=url; 
    }
    function ShowBookingsButton()
    {
       var url="Showbooking.php";
       window.location.href=url; 
    }
    function RemoveBookingsButton()
    {
       var url="removeBookings.php";
       window.location.href=url; 
    }
</script>