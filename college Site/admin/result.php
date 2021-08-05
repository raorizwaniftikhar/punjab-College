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
	<h1>Add Result </h1>
	<form action="addResult.php" method="post" onsubmit="return programForm()" >
	<table cellspacing="8">
		
		<tr>
			<th>Roll No:</th>
			<td><span style='color:#ff0000; float:left'>*</span>
            	<select name="rollNo" onchange="academicForm()" id="course">
				<option  >Choose  Roll No</option>
				<?php
					$query='SELECT *FROM registration';
						$result= mysql_query($query);
	
							while($row=mysql_fetch_array($result))
							{
							
								?>
								<option value="<?php echo $row['roll_no']?>"><?php echo $row['roll_no']?></option>
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
        	<td>Obtain Marks:</td>
            <td><input type="text" name="obtainMarks"  /></td>
        </tr>
        <tr>
        	<td>Total Marks:</td>
            <td><input type="text" name="totalMarks"  /></td>
        </tr>
       
		<tr>
			<td></td>
			<td align="right"><input type="submit" value="Add Result"/></td>
		</tr>
		
	</table>
	</form>
	
	
	<h1>Results</h1>
	<table>
		<tr bgcolor="#666666">
			<th> Roll No </th>
            <th>Subject</th>
			
			<th>Obtain Marks</th>
            <th>Total Marks</th>
            <th>Action</th>
			
		</tr>
	<?php
			$query="SELECT *
						FROM result r ,subject s
						WHERE s.subject_id=r.subject_id";
			$result=mysql_query($query);
			while($row=mysql_fetch_array($result))
				{
					$resultId=$row['results_id'];
					$rollNo=$row['roll_no'];
					echo "<tr bgcolor='#eee'>";
							 echo "<td>".$row['roll_no']."</td>";
							 echo "<td>".$row['subject_name']."</td>";
							
							  echo "<td>".$row['obtainMarks']."</td>";
							   echo "<td>".$row['totalMarks']."</td>";

							 echo "<td>"."<a href='resultEdit.php?id=$resultId & rollNo=$rollNo'>Edit</a>"."||"."<a href='resultDelete.php?id=$resultId & rollNo=$rollNo'>Delete"."</a>"."</td>";
					echo"</tr>";
				}
				
				
	?>

		
		
	</table>
</div>
<?php require_once('includes/footer.php');?>
