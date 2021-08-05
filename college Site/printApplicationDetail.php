<?php require_once('connection.php'); ?>
<?php require_once('includes/header.php'); ?>

<script language="javascript">
	function doPrint()
	{
		window.print(); 
		window.location = "index.php";
	}
</script>

<div id="content">
	
		<table>
		
		
		<?php  
		
		 $appId=$_GET['id'] ;
		
			
			$appDetail="SELECT *
							FROM student std, academic acad
							WHERE std.std_id=acad.std_id and std.std_id='$appId'";
		
		$cId = '';
		$programId='';
		$name='';
		$fname='';
		$dob='';
		$domi='';
		$religion='';
		$nationality='';
		$email='';
		$hafiz='';
		$nic='';
		$phone='';
		$add='';
		$s1='';
		$s2='';
		$s3='';
		
					$resultAppDetail=mysql_query($appDetail);
						while($rowAppDetail=mysql_fetch_array($resultAppDetail))
							{	
								$name=$rowAppDetail['std_name'];
								$fname=$rowAppDetail['std_fname'];
								$nic=$rowAppDetail['std_nic'];
								$dob=$rowAppDetail['std_dob'];
								$domi=$rowAppDetail['domicile'];
								$religion=$rowAppDetail['std_religion'];
								$nationality=$rowAppDetail['std_nationality'];
								$email=$rowAppDetail['std_email_Id'];
								$hafiz=$rowAppDetail['hafiz'];
								$phone=$rowAppDetail['phone_no'];
								$add=$rowAppDetail['address'];
								$cId=$rowAppDetail['comb_id'];
								$programId=$rowAppDetail['prog_id'];
								
								
								
								
								
							}
							 
						
		//////////////////////////////////////////////////////////////////////////////////////////////////
		$progName="SELECT * 
							FROM program p ,student s
							WHERE s.prog_id=p.prog_id and s.std_id='$appId'";
				$progResult=mysql_query($progName);
					while($progRow=mysql_fetch_array($progResult))
						{
								
								$pName=$progRow['prog_name'];
						}
		/////////////////////////////////////////////////////////////////////////////////////////////////
		
		$combDetail="SELECT *
							 FROM combination c, student s 
							 WHERE c.comb_id='$cId' and s.std_id=$appId";	
							$comResult=mysql_query($combDetail) or die(mysql_error());
							
					while($comRow=mysql_fetch_array($comResult))							
						{
						
								
								$s1=$comRow['subject1'];
								$s2=$comRow['subject2'];
								$s3=$comRow['subject3'];
								
						}
			/////////////////////////////////////////////////////////////////////////////////////////////
			
		?>
		
		
		
	
			<tr>
				<td></td>
				<td colspan="2"><h2 align="center">Govt.Degree College For Women(Jampur)</h2></td>
			</tr>
			<tr>
				<td><b>Application NO:</b></td>
				<td><?php echo $appId?></td>
			</tr>
			<tr>
				<td><b>Student Name:</b></td>
				<td><?php echo $name ;?></td>
			</tr>
			<tr>
				<td><b>Father Name:</b></td>
				<td><?php echo $fname; ?></td>
			</tr>
			<tr>
				<td><b>CNIC:</b></td>
				<td><?php echo $nic ;?></td>
				<td><b>Dob:</b></td>
				<td><?php echo $dob; ?></td>
			</tr>
			<tr>
				<td><b>Domicile:</b></td>
				<td><?php echo $domi; ?></td>
				<td><b>Nationality:</b></td>
				<td><?php echo $nationality;?></td>
			</tr>
			<tr>
				<td><b>Religion:</b></td>
				<td><?php echo $religion;?></td>
				<td><b>Hafiz:</b></td>
				<td><?php echo $hafiz;?></td>
			</tr>
			<tr>
				<td><b>Email Address:</b></td>
				<td><?php echo $email ;?></td>
				<td><b>Phone Number:</b></td>
				<td><?php echo $phone ;?></td>
				
			</tr>
			
			<tr>
				<td><b>Address:</b></td>
				<td><?php echo $add; ?></td>
			</tr>
			<tr>
				<td><b>Where Applay:</b></th>
				<td><?php echo $pName; ?></td>
			</tr>
			<tr>
				<td><b>Selected Subject:</b></td>
				<td><?php echo $s1.','.$s2.','.$s3; ?></td>
				
			</tr>
			
			

			
		</table>
		
		<table>
				<tr bgcolor="#999">
				<th>Class</th>
				<th>Group</th>
				<th>RollNo</th>
				<th>Obtain Marks</th>
				<th>Total Marks</th>
				<th>Board</th>
				<th>Division</th>
				<th>Year</th>
			</tr>
			
			<?php
				echo "<tr>";	
			$appDetail="SELECT *
							FROM student std, academic acad
							WHERE std.std_id=acad.std_id and std.std_id='$appId'";
		
		
		
					$resultAppDetail=mysql_query($appDetail);
						while($rowAppDetail=mysql_fetch_array($resultAppDetail)) 
						
						{
							
								echo "<tr>";
									echo"<td>".$rowAppDetail['per_class']."</td>";
									echo"<td>".$rowAppDetail['group']."</td>";
									echo"<td>".$rowAppDetail['per_rollNO']."</td>";
									echo"<td>".$rowAppDetail['obtain_marks']."</td>";
									echo"<td>".$rowAppDetail['total_marks']."</td>";
									echo"<td>".$rowAppDetail['board']."</td>";
									echo"<td>".$rowAppDetail['grade']."</td>";
									echo"<td>".$rowAppDetail['year']."</td>";
								echo"</tr>";
						}
					
				?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				<td><input type="button" value="Print" name="print"  onClick="doPrint()"/></td>
				</tr>
			
		</table>
        		
	
	
	

</div>

<img height="6" border="0" width="780" alt="" src="images/bot01.jpg">
<?php require_once('includes/footer.php'); ?>