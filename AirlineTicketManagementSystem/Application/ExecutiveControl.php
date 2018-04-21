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
	<b>Executive Control</b>
	</h2>
	<hr>
	<font face ="Garamond">
        <span style="margin-left:15em"></span>
	<input name="AddFlight" value="Add Flight" type="button"  onclick="removeMemberButton()" style="height:40px; width:150px ;color:#188418" />
	
	<font face ="Garamond">
        <input name="RemoveFlight" value="Remove Flight" type="button" onclick="removeflights()"  style="height:40px; width:150px ;color:#F02809" />
	
	<font face ="Garamond">
	<input name="UpdateFlight" value="Update Flight" type="button" onclick="updateFlight()"  style="height:40px; width:150px ;color:#188418" />
	
	<font face ="Garamond">
	<input name="Sale" value="S A L E" type="button" onclick="saleexecutive()"  style="height:40px; width:150px ;color:#113F99" />
	
	<font face ="Garamond">
	<input name="ShowFlights" value="Show Flight" type="button" onclick="showflight()"  style="height:40px; width:150px ;color:#188418" />
	
	</fieldset>
</html>
<script>
    function showflight()
    {
        var url="showflightforexecutive.php";
        window.location.href=url;
    }
    function removeMemberButton()
    {
    var url="AddFlightInfo.php";
    window.location.href=url;
    }
    function removeflights()
    {
    var url="removeflightsexecutive.php";
    window.location.href=url;
    }
    
    function saleexecutive()
    {
    var url="Salereportforexecutive.php";
    window.location.href=url;
    }
    function updateFlight()
    {
    var url="updateFlight.php";
    window.location.href=url;
    }
</script>