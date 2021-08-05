<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<div id="content">
	<h1>Enter Last Date of Admission</h1>
	<form action="" method="post">
	<table  cellspacing="8">
		
		<tr>
			<th>Select Program:</th>
			<td>
            	<select name="prog">
                	<option> Select program </option>
                    	<?php $query="SELECT * FROM program"; 
								$result=mysql_query($query);
									while($row=mysql_fetch_array($result))
										{
							?>
                            	<option value="<?php echo $row['prog_id']?>" > <?php echo $row['prog_name'] ?></option>
                         <?php
										}
						
						
						?>
                </select>
            
            
            </td>
			
		</tr>
        <tr>
			<th>News Date:</th>
			<td><input type="text" name="date"  /></td>
			
		</tr>
		
		<tr>
			<td></td>
			<td align="right"><input type="submit" value="Add"/></td>
		</tr>
		
	</table>
	</form>
	<?php if(isset($_POST['prog']) &&($_POST['date']))
			{
				
				$add="INSERT INTO admission_detail VALUES(NULL,'$_POST[prog]','$_POST[date]')";
				if(!mysql_query($add))
					{
						die("News not add :".mysql_error());
					}
			}
			
	?>
	
</div>
<?php require_once('includes/footer.php');?>
