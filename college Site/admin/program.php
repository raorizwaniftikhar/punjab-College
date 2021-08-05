<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<script type="text/javascript">
	function programForm()
	{
		var programId=document.getElementById('progId').value;
		var programName=document.getElementById('progName').value;
		var description=document.getElementById('progDescription').value;
			if(programId=="")
				{
					alert("Please Enter Program");
					document.getElementById('progId').focus();
					return false;
					
				}
			if(programName=="")
				{
					alert("Please Enter Program Name");
					document.getElementById('progName').focus();
					return false;
					
				}
			if(description=="")
				{
					alert("Please Enter Program Description");
					document.getElementById('progDescription').focus();
					return false;
					
				}
		return true;
	}
</script>

<div id="content">
	<h1>Add New Program </h1>
	<form action="addProgram.php" method="post" onsubmit="return programForm()" >
	<table cellspacing="8">
		
		<tr>
			<th>Program Id:</th>
			<td><span style='color:#ff0000; float:left'>*</span><input type="text" name="programId" id="progId"  /></td>
			<td>
				<div id="aProgMsg"></div>
				<div id="aProgValidMsg"></div>
			</td>
		</tr>
        <tr>
			<th>Program Name:</th>
			<td><span style='color:#ff0000; float:left'>*</span><input type="text" name="programName"  id="progName"  /></td>
			<td><div id="aProgNameMsg"></div></td>
		</tr>
		<tr>
			<th>Description:</th>
			<td><span style='color:#ff0000; float:left'>*</span><input type="text" name="programDescription" id="progDescription" /></td>
			<td>
				<div id="aProgDescriptionMsg"></div>
				<div id="aProgramValidationMsg"></div>
			</td>
			
		</tr>
		<tr>
			<td></td>
			<td align="right"><input type="submit" value="Add New Program"/></td>
		</tr>
		
	</table>
	</form>
	
	
	<h1>Program Detail</h1>
	<table>
		<tr bgcolor="#666666">
			<th> Program Id </th>
            <th>Program Name</th>
			<th>Description</th>
			<th>Action</th>
			
		</tr>
	<?php
			$programDetail="SELECT * FROM program";
			$programDetailResult=mysql_query($programDetail);
			while($row=mysql_fetch_array($programDetailResult))
				{
					$progId=$row['prog_id'];
					
					echo "<tr bgcolor='#eee'>";
							 echo "<td>".$row['prog_id']."</td>";
							 echo "<td>".$row['prog_name']."</td>";
							 echo "<td>".$row['description']."</td>";
							 echo "<td>"."<a href='programEdit.php?id=$progId'>Edit</a>"."||"."<a href='programDelete.php?id=$progId'>Delete"."</a>"."</td>";
					echo"</tr>";
				}
				
				
	?>

		
		
	</table>
</div>
<?php require_once('includes/footer.php');?>
