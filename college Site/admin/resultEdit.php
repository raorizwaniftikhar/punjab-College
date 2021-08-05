<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	

<div id="content">	
	<h1 > Edit Result</h1>
		<a href="result.php">
			<div class="backBtn"></div>
		</a>
   	<form action="" method="post"">
		<table cellspacing="8">
		
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
            <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="obtainMarks"  /></td>
        </tr>
        <tr>
        	<td>Total Marks:</td>
            <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="totalMarks"  /></td>
        </tr>
            
		<tr>
			<td></td>
			<td align="right"><input type="submit" value="Update Result"/></td>
		</tr>
		
	</table>
    </form>
	<?php
				$resultId= $_GET['id'];
				$rollNo=$_GET['rollNo'];
				if(isset($_POST['subject']) && ($_POST['obtainMarks'])&& ($_POST['totalMarks']))
					{
		
				
				
					$updateTimeTable="UPDATE result SET 
											
											subject_id='".$_POST['subject']."',
											obtainMarks='".$_POST['obtainMarks']."',
											totalMarks='".$_POST['totalMarks']."'
											
							WHERE results_id='$resultId'";
							
						if(!mysql_query($updateTimeTable))
						{
							die("could not update :".mysql_error());
						}
						header("Location: result.php");
						
					}
					
			?>
<?php require_once('includes/footer.php');?>