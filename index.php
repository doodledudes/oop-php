<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OOP in PHP</title>
<script type="text/javascript" src="scripts/jquery-1.3.2-min.js"></script>
<script type="text/javascript" src="scripts/jquery.cookie.js"></script>
<script>
	function displayVal(formobj) {
	        if(!jQuery("#display").is(":visible")) {
	                jQuery("#display").fadeIn("fast");
	        }
		var param = jQuery(formobj).serialize();
		jQuery.ajax({
			url: "process.php",
			data: param,
			success: function(data) {
			        setTimeout(function() {
				        jQuery("#display").html(data);
				},3000);
			}
		});
		jQuery("#display").html("<img src='images/ajax-loader.gif' \/>")
	}
</script>
<style>
        body { font-family: Arial, Helvetica; font-size: 12px; }
        #display { padding: 10px; background: #ECECEC; display: none; }
</style>
</head>
<body>
	<center>
		<form>
		        <h3>My First PHP OOP</h3>
			<table frame="border" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<table cellpadding="10" cellspacing="0">
							<tr>
								<td>
									Tao : 
								</td>
								<td>
									<input type="text" value="" name="person" id="person" />
								</td>
							</tr>
							<tr style="background: gainsboro;">
								<td>
									Trabahador : 
								</td>
								<td>
									<input type="text" value="" name="employee" id="employee" />
								</td>
								<td>
									<i>if you entered "employee" it will override the parent class</i>
									<hr />
									<i>if not it will call the parent class that is inherited</i>
								</td>
							</tr>
							<tr>
								<td>
									Boss : 
								</td>
								<td>
									<input type="text" value="" name="boss" id="boss" />
								</td>
							</tr>
							<tr>
								<td colspan="2" align="right">
									<input type="button" value="Print" onclick="displayVal(this.form)" />
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<div id="display">
							
						</div>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>

