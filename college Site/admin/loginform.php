
<div id="admin-login">
	<form  method="post" action="" onsubmit="return verifyAdminForm()">

	<table >
		
		
			
				<img src="images/admin.gif" width="300" height="44" alt="Admin login" />
			
		
		<tr>
			<td colspan="2">
				<div id="aFormMsg"></div>
			</td>
		</tr>
		<tr>
			<td><label for="name">Name:<span style="color:#F00">*</span></label></td>
			<td><input type="text" name="name" id="aName" /></td>
		</tr>


		<tr>
			<td><label for="pass" >Password<span style="color:#F00">*</span></label></td>
			<td><input type="password" name="pass" id="aPass" /></td>
		</tr>
		<tr>
			<td></td>
			<td style="text-align:right"><input type="submit" value="Login" /></td>
		</tr>
		
	</table>
	
	</form>
</div>

