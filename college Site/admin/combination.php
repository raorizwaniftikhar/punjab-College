<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	

<script type="text/javascript">
	function combinationForm()
		{
			
		var programId=document.getElementById('programId').value;
		var subject1=document.getElementById('subject1').value;
		var subject2=document.getElementById('subject2').value;
		var subject3=document.getElementById('subject3').value;
			if(programId=="")
				{
					alert("Please Enter Program");
					document.getElementById('programId').focus();
					return false;
					
				}
			if(subject1=="")
				{
					alert("Please Enter Subject1");
					document.getElementById('subject1').focus();
					return false;
					
				}
			if(subject2=="")
				{
					alert("Please Enter Subject2");
					document.getElementById('subject2').focus();
					return false;
					
				}
			if(subject3=="")
				{
					alert("Please Enter Subject3");
					document.getElementById('subject3').focus();
					return false;
					
				}
		return true;
	
		}
</script>
  

	 
<div id="content">
	<h1>Add New Combination </h1>
	<form action="" method="post" onsubmit="return combinationForm()">
	<table  cellspacing="8">
		
		<tr>
			<th>Program Id:</th>
			<td><span style="color:#ff0000">*</span><input type="text" name="progId" id="programId"  /></td>
			
		</tr>
        <tr>
			<th>Subject 1:</th>
			<td><span style="color:#ff0000">*</span><input type="text" name="subject1" id="subject1"  /></td>
			
			
		</tr>
		<tr>
			<th>Subject 2:</th>
			<td><span style="color:#ff0000">*</span><input type="text" name="subject2" id="subject2"  /></td>
			
			
		</tr>
		<tr>
			<th>Subject 3:</th>
			<td><span style="color:#ff0000">*</span><input type="text" name="subject3" id="subject3"  /></td>
			
		</tr>
		
		<tr>
			<td></td>
			<td align="right"><input type="submit" value="Add New Combination"/></td>
		</tr>
		
	</table>
	</form>
	<?php 
			if(isset($_POST['subject1'])&&($_POST['subject2'])&&($_POST['subject3'])&&($_POST['progId']))
				{	
				
						
					$addCombination="INSERT INTO combination (comb_id,subject1,subject2,subject3,prog_id)
									VALUES (NULL,'$_POST[subject1]','$_POST[subject2]','$_POST[subject3]','$_POST[progId]')";
					
					
						if(!mysql_query($addCombination))
							{
								die("could not add Combination:".mysql_error());
							}
									
									
									
				}
		
		 $getCombinationId='SELECT *FROM combination';
		 $result=mysql_query($getCombinationId);
		 $combinationId='';
		 $subject1='';
		 $subject2='';
		 $subject3='';
		 
		 $combinationIdList=array();
		 $i=0;
		 	while($row=mysql_fetch_array($result))
				{
					$combinationIdList[$i]=$row['comb_id'];
					$combinationId=$row['comb_id'];
					$subject1=$row['subject1'];
					$subject2=$row['subject2'];
					$subject3=$row['subject3'];
					
					$i++;
				}
				 
				$getSubject="SELECT * subject";
			
				
				
				
		 $getSubjectId='SELECT *FROM subject';
		 $result1=mysql_query($getSubjectId);
		 $subjectIdList=array();
		 $i=0;
		 	while($row=mysql_fetch_array($result1))
				{
					$subjectIdList[$i]=$row['subject_id'];
					$i++;
				}
				
		
	
	
	?>
	
	
	<h1>Combination Detail</h1>
	<table>
		<tr bgcolor="#666666">
			<th> Program Id </th>
			<th> Program Name </th>
            <th>Combination Id</th>
			<th>Subject 1</th>
			<th>Subject 2 </th>
			<th> Subject 3 </th>
			<th>Action</th>
			
		</tr>
	<?php
			$combinationDetail="SELECT *FROM combination c, program p
       							 WHERE c.prog_id=p.prog_id ";
			$combinationDetailResult=mysql_query($combinationDetail);
				while($row=mysql_fetch_array($combinationDetailResult))
				{
					$progId=$row['prog_id'];
					$combId=$row['comb_id'];
					$progName=$row['prog_name'];
					$s1=$row['subject1'];
					$s2=$row['subject2'];
					$s3=$row['subject3'];
				?>
                	
                <?php
					
					echo "<tr bgcolor='#eee'>";
							 echo "<td>".$row['prog_id']."</td>";
							 echo "<td>".$row['prog_name']."</td>";
							  echo "<td>".$row['comb_id']."</td>";
							   echo "<td>".$row['subject1']."</td>";
							    echo "<td>".$row['subject2']."</td>";
								 echo "<td>".$row['subject3']."</td>";
							 
							 echo "<td>"."<a href='combinationEdit.php?id=$progId&combId=$combId&progName=$progName&s1=$s1&s2=$s2&s3=$s3'>Edit</a>"."||"."<a href='combinationDelete.php?id=$progId&combId=$combId'>Delete"."</a>"."</td>";
					echo"</tr>";
				}
				
				
	?>

		
		
	</table>
</div>


<?php require_once('includes/footer.php');?>