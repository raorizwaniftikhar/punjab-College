<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	

<div id="content">	
	<h1 > Edit Time Table</h1>
		<a href="timeTable.php">
			<div class="backBtn"></div>
		</a>
   	<form action="" method="post"">
		<table cellspacing="8">
		
		<tr>
			<th>Class:</th>
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
			<th>Teacher Name:</th>
			<td><span style='color:#ff0000; float:left'>*</span>
            	<select name="teacherName">
                	<option>Select Teacher Name</option>
                    	<?php
							$teacherName="SELECT * FROM teacher";
								$result=mysql_query($teacherName);
									while($row=mysql_fetch_array($result))
										{
										?>
                                        	<option value="<?php echo $row['teacher_id'] ?>"><?php echo $row['name']?></option>
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
			<td align="right"><input type="submit" value="Update Time Table"/></td>
		</tr>
		
	</table>
    </form>
	<?php
				$timeTableId= $_GET['id'];
				if(isset($_POST['prog']) && ($_POST['subject'])&& ($_POST['teacherName'])&& ($_POST['date'])&& ($_POST['time']))
					{
		
				
				
					$updateTimeTable="UPDATE timeTable SET 
											prog_id='".$_POST['prog']."',
											subject_id='".$_POST['subject']."',
											teacher_id='".$_POST['teacherName']."',
											time='".$_POST['time']."',
											dated='".$_POST['date']."',
											room_no='".$_POST['roomNo']."'
							WHERE table_id='$timeTableId'";
							
						if(!mysql_query($updateTimeTable))
						{
							die("could not update :".mysql_error());
						}
						header("Location: timeTable.php");
						
					}
					
			?>
<?php require_once('includes/footer.php');?>