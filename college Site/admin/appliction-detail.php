<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<?php require_once('connection.php') ?>
 
 <div id="content">
	
	<h1>Application Information</h1>
		<a href="applicants.php">
			<div class="backBtn"></div>
		</a>
		<?php
				$appId=$_GET['id'] ;
				 $cId=$_GET['combId'];
				
				$pName="";
				
							
							
				/////////////////////////////////////////////////////////////////////				
				$progName="SELECT * 
							FROM program p ,student s
							WHERE s.prog_id=p.prog_id and s.std_id='$appId'";
				$progResult=mysql_query($progName);
					while($progRow=mysql_fetch_array($progResult))
						{
								
								$pName=$progRow['prog_name'];
						}
				///////////////////////////////////////////////////////////////////////
				$combDetail="SELECT *
							 FROM combination c,student s
							 
							 WHERE c.comb_id='$cId' and c.prog_id=s.prog_id and s.std_id='$appId';
								
							";	
							$comResult=mysql_query($combDetail);
							
				
						 

				
				////////////////////////////////////////////////////////////////////////
				$sid="";
				$name="";
				$fname="";
				$nic="";
				$dob="";
				$email="";
				$religion="";
				$domicile="";
				$nation="";
				$ph="";
				$hafiz="";
				$progId="";
				$add="";
				$location="";
				
				$appDetail="SELECT *
							FROM student std, academic acad
							WHERE std.std_id=acad.std_id and std.std_id='$appId'";
				$result=mysql_query($appDetail);
				while($row=mysql_fetch_array($result))
						{
							
							$sid= $row['std_id'];
							 $name=$row['std_name'];
							$fname=$row['std_fname'];
							$nic=$row['std_nic'];
							$dob=$row['std_dob'];
							$email=$row['std_email_Id'];
							$religion=$row['std_religion'];
							$domicile=$row['domicile'];
							$nation=$row['std_nationality'];
							$ph=$row['phone_no'];
							$hafiz=$row['hafiz'];
							$progId=$row['prog_id'];
							
							$add=$row['address'];
							$location=$row['documents'];
							
						
							
							
						}
						?>
                        <div id="personal_information">
				<table>
					<br/><br/><h3>Personal Inforamtion</h3>
                    
							<tr >
							
								<th>Name:</th><td><?php echo $name?></td>
							</tr>
							<tr>
								<th>Father Name</th><td><?php echo $fname?></td>
							</tr>
							<tr>
								<th>CNIC</th><td><?php echo $nic ?></td>
							</tr>
							<tr>
								<th>DOB</th><td><?php echo $dob ?></td>
							</tr>
							<tr>
								<th>Email Address</th><td><?php echo $email ?></td>
							</tr>
							<tr>
								<th>Religion</th><td><?php echo $religion ?></td>
							</tr>
							<tr>
								<th>Domicile</th><td><?php echo $domicile ?></td>
							</tr>
							<tr>
								<th>Nationality</th><td><?php echo $nation ?></td>
							</tr>
							<tr>
								<th>Phone Number</th><td><?php echo $ph ?></td>
							</tr>
							<tr>
								<th>Address</th><td><?php echo $add ?></td>
							</tr>
							<tr>
								<th>Hafiz</th><td><?php echo $hafiz ?></td>
							</tr>
                            <tr>
                            	<td></td><td><a href="<?php echo $location;?>" target="_blank">Download Documents</a></td>
                            </tr>
								
							
							
							
							
							
								
							
							
						</table>
                        </div>
                        <center>
					    <table cellspacing="2" border="1">
								<h3>Acadmic Inforamtion</h3>
						<tr bgcolor='#999' align="center" >
								<th>Class</th>
								<th>Group</th>
								<th>Roll No</th>
								<th>Obtain Marks</th>
								<th>Total Marks</th>
								<th>Board</th>
								<th>Division/</th>
								<th>Year</th>
								
							</tr>
							<br />
							<?php 
					$appDetail="SELECT *
							FROM student std, academic acad
							WHERE std.std_id=acad.std_id and std.std_id='$appId'";
				$result=mysql_query($appDetail);
					while($row=mysql_fetch_array($result))
						{
							
							
							
							echo"<tr bgcolor='#d2d2d2' align='center'>";
								echo"<td>".$row['per_class']."</td>";
								echo"<td>".$row['group']."</td>";
								echo"<td>".$row['per_rollNO']."</td>";
								echo"<td>".$row['obtain_marks']."</td>";
								echo"<td>".$row['total_marks']."</td>";
								echo"<td>".$row['board']."</td>";
								echo"<td>".$row['grade']."</td>";
								echo"<td>".$row['year']."</td>";
							echo"</tr>";
							
							
						}
						?>
						</table>
                        </center>
						
						<br />
						
						<center>
						
						<table border="1">
							<tr bgcolor='#999'>
									<th>Program id</th>
									<th>Program Name</th>
									<th>Combination id</th>
									<th>Subject1</th>
									<th>Subject2</th>
									<th>Subject3</th>
							</tr>
                            <?php 
							echo"<tr bgcolor='#d2d2d2'>";
								echo "<td>  $progId</td>";
								echo "<td>  $pName</td>";
					while($comRow=mysql_fetch_array($comResult))
						{
						
							
							
							
								echo"<td>".$comRow['comb_id']."</td>";
								echo"<td>".$comRow['subject1']."</td>";
								echo"<td>".$comRow['subject2']."</td>";
								echo"<td>".$comRow['subject3']."</td>";
								
							
						}
						?>
							</tr>
						</table>
						
		


<?php require_once('includes/footer.php');?>