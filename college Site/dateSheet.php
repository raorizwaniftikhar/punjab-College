<?php require_once('connection.php'); ?>
<?php require_once('includes/header.php'); ?>

		

<div id="content">

		<?php require_once('includes/sidebar.php');?>	
			
<center><h2>DateSheet</h2></center>
<br />
<center>
<table>
	<form action="" method="post" >
	<tr>
    
    	<td><b>Select Program Name:</b></td>
        <td><select name="prog" id="course">
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
            
        <td><input type="submit" value="Search" name="search"  /></td>
    </tr>
    </form>
</table>
	<table border="5">
		
			
		
		<tr bgcolor="#666">
			<th>Subject</th>
			
           
            <th>Time</th> 
            <th>Date</th>
            <th>Room No</th>
		
		</tr>
         <?php
		 	if(isset($_POST['prog']))
			{
				  $program=$_POST['prog'];
		 	$dateSheet="SELECT *
						FROM datesheet d, subject s, program p
						WHERE d.subject_id = s.subject_id
						AND d.prog_id = p.prog_id
						AND d.prog_id = '$program'";
			$result=mysql_query($dateSheet);
			while($row=mysql_fetch_array($result))
				{
					
					
					
					echo "<tr bgcolor='#eee'>";
							
							 echo "<td>".$row['subject_name']."</td>";
							 echo "<td>".$row['time']."</td>";
							
							   echo "<td>".$row['dated']."</td>";
							    echo "<td align='center'>".$row['room_no']."</td>";
							
					echo"</tr>";
								
				}
				
			}	
	?>
		
	</table>

</center>
			





<img height="6" border="0" width="780" alt="" src="images/bot01.jpg">
</div>
<?php require_once('includes/footer.php'); ?>