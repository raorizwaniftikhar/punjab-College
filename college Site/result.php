<?php require_once('connection.php'); ?>
<?php require_once('includes/header.php'); ?>

		

<div id="content">

		<?php require_once('includes/sidebar.php');?>	
			
<center><h2>Class Result</h2></center>
<br />


<center>
<table>
	<form action="" method="post" >
	<tr>
    <?php
		$rollNo;
		$userName=$_SESSION['userName'];
		$getRollNo="SELECT * FROM registration
					WHERE login_name='$userName'";
		$result=mysql_query($getRollNo);
			while($row=mysql_fetch_array($result))
				{
					$rollNo=$row['roll_no'];
				} 
	?>
    	
    	<td><b>Class Roll No:</b></td>
        <td><?php echo $rollNo?> </td>
            
        
    </tr>
    </form>
</table>

</center>
	<center>
	<table border="5">
		
			
		
		<tr bgcolor="#666">
			<th>Subject</th>
			
            <th>Obtain Marks</th> 
            <th>Total Marks</th>
           
		
		</tr>
         <?php
		 	
		 	$subjectName='';
			
			$query="SELECT *
						FROM result r ,subject s
						WHERE s.subject_id=r.subject_id
						AND roll_no='$rollNo'";
			$result=mysql_query($query);
			while($row=mysql_fetch_array($result))
				{
					
					
				
					
					echo "<tr bgcolor='#eee'>";
							
							 echo "<td>".$row['subject_name']."</td>";
							 echo "<td>".$row['obtainMarks']."</td>";
							  echo "<td>".$row['totalMarks']."</td>";
							 
							
					echo"</tr>";
					
				}
				
				
	?>
		
	</table>

</center>
			





<img height="6" border="0" width="780" alt="" src="images/bot01.jpg">
</div>
<?php require_once('includes/footer.php'); ?>