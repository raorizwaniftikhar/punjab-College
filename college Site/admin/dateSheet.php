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
	<h1>Add Date Sheet </h1>
	<form action="addDateSheet.php" method="post" onsubmit="return programForm()" >
	<table cellspacing="8">
		
		<tr>
			<th>Program:</th>
			<td><span style='color:#ff0000; float:left'>*</span>
            	<select name="prog" onchange="academicForm()" id="course">
				<option  >Choose one program</option>
				<?php
					$query='SELECT *FROM program';
						$result= mysql_query($query);
	
							while($row=mysql_fetch_array($result))
							{
							
								?>
								<option value="<?php echo $row['prog_id']?>"><?php echo $row['prog_name']?></option>
								<?php
								
							}
							
				?>
			</select>
            
            </td>
			
		</tr>
        <tr>
			<th>Subject:</th>
			<td><span style='color:#ff0000; float:left'>*</span>
            
            	<select name="subject" id="subject" >
				<option  >Select one subject </option>
				<?php
					$query='SELECT *FROM subject';
						$result= mysql_query($query);
	
							while($row=mysql_fetch_array($result))
							{
								
								?>
								<option value="<?php echo $row['subject_id']?>"><?php echo $row['subject_name']?></option>
								<?php
								
							}
							
				?>
			</select>
            
            </td>
			
		</tr>
        <tr>
        	<td>Time:</td>
            <td><input type="text" name="time"  /></td>
        </tr>
        <tr>
        	<td>Date:</td>
            <td><input type="text" name="date"  /></td>
        </tr>
        <tr>
        	<td>Room No:</td>
            <td><input type="text" name="roomNo"  /></td>
        </tr>
		<tr>
			<td></td>
			<td align="right"><input type="submit" value="Add Date Sheet"/></td>
		</tr>
		
	</table>
	</form>
	
	
	<h1>Date Sheet</h1>
	<table>
		<tr bgcolor="#666666">
			<th> Program </th>
            <th>Subject</th>
			
			<th>Time</th>
            <th>Date</th>
            <th>Room No</th>
            <th>Action</th>
			
		</tr>
	<?php
	$dateSheet="SELECT *
				FROM dateSheet t, program p, subject s
				WHERE p.prog_id = t.prog_id
				AND s.subject_id = t.subject_id
				ORDER BY t.prog_id";
	$result=mysql_query($dateSheet);
			while($row=mysql_fetch_array($result))
				{
					$dateSheetId=$row['sheet_id'];
					
					echo "<tr bgcolor='#eee'>";
							 echo "<td>".$row['prog_name']."</td>";
							 echo "<td>".$row['subject_name']."</td>";
							
							  echo "<td>".$row['time']."</td>";
							   echo "<td>".$row['dated']."</td>";
							    echo "<td align='center'>".$row['room_no']."</td>";
							 echo "<td>"."<a href='dateSheetEdit.php?id=$dateSheetId'>Edit</a>"."||"."<a href='dateSheetDelete.php?id=$dateSheetId'>Delete"."</a>"."</td>";
					echo"</tr>";
				}
				
				
	?>

		
		
	</table>
</div>
<?php require_once('includes/footer.php');?>
