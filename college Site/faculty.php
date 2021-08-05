<?php require_once('connection.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
		

<div id="content">

		<?php require_once('includes/sidebar.php');?>	
			
<center><h2>College Faculty</h2></center>
	<table border="5">
		
			
		
		<tr bgcolor="#666">
			<th>TeacherName</th>
			<th>Qualification</th>
           
            <th>Email Id</th> 
            <th>Teaching Subject</th>
		
		</tr>
         <?php
		 			$subjectName='';
					$getTeacherDetail="SELECT * FROM teacher";
					$result=mysql_query($getTeacherDetail);
					while($row=mysql_fetch_array($result))
						{
							 $subjectId=$row['subject_id'];
							echo "<tr bgcolor='#d2d2d2'>";
								echo "<td>".$row['name']."</td>";
								
								
								
								
								echo "<td>".$row['qualification']."</td>";
							
								echo "<td>".$row['email_id']."</td>";
								
									$getSubject="SELECT * FROM subject
												 WHERE subject_id='$subjectId'";
										$resultsubject=mysql_query($getSubject);
											while($subjectRow=mysql_fetch_array($resultsubject))
												{
													$subjectName=$subjectRow['subject_name'];
													echo "<td>".$subjectName."</td>";
												}
										
								
							echo "</tr>";
						} 
			?>
		
	</table>


			





<img height="6" border="0" width="780" alt="" src="images/bot01.jpg">
</div>
<?php require_once('includes/footer.php'); ?>