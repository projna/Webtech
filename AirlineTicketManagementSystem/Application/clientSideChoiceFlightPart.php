
<?php require_once "../DataService/companyinfo_service.php"; ?>
<?php $company=getAllcomapnyName();?>
<html>
    	</fieldset>
				<fieldset>
				<font color="#CACFD2">
				<span style="margin-left:8em"></span>
				<input name= "TripChoice" type ="radio" onclick="withreturn()" value="Return" /> Return
				<span style="margin-left:5em"></span> 
				<input name= "TripChoice" type ="radio" onclick="oneway()" value="oneWay"/> One Way
				</fieldset>
                <fieldset>
				<style>
			
				</style>
				<span style="margin-left:3em"></span>
                                <select name="Airline" disabled="true" onchange="boom()" style="height:40px; width:150px ; color:#1F2E9B">
					<option>--Select Airline--</option>
					<?php foreach ($company as $Company) {?>
                                        <option><?php echo $Company["company name"]?></option>
                                        <?php }?>
				</select>	
                                <select name="FROM" disabled="true" onchange="boomto()" style="height:40px; width:150px ; color:#1F2E9B">
					
				</select>
                                <select name="TO" disabled="true" onchange="eventforto()" style="height:40px; width:150px ; color:#1F2E9B">
					
				</select>
                                <input name="Departure" disabled="true" max='2017-12-20' value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>" type="date" onchange="CheckDate()" style="height:40px; width:150px ; color:#1F2E9B"/>
                                <input name="Return" disabled="true" max='2017-12-20' value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>" type="date" style="height:40px; width:150px ; color:#1F2E9B" />
                                <select name="Passenger" disabled="true" onchange="passenger()" style="height:40px; width:150px ; color:#1F2E9B">
				<option>Passenger </option>
				<option>1 </option>
				<option>2 </option>
				<option>3 </option>
				<option>4 </option>
				<option>5 </option>
				</select>
				
                                <input type="button"  name="Proceed" value="Go >" onclick="check()" style="height:40px; width:150px ; color:#135E28 " /> 
			</fieldset>
        
</html>
<script>
function withreturn()
{
      document.getElementsByName("Airline")[0].disabled=false;
      document.getElementsByName("Departure")[0].disabled=false;
      document.getElementsByName("Return")[0].disabled=false;
      document.getElementsByName("Passenger")[0].disabled=false;
     
}
function oneway()
{
      document.getElementsByName("Airline")[0].disabled=false;
      document.getElementsByName("Departure")[0].disabled=false;
      document.getElementsByName("Return")[0].disabled=true;
      document.getElementsByName("Passenger")[0].disabled=false;
}
</script>