<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<script language="javascript" src="../javascript/programEdit.js" type="text/javascript"></script>
<div id="content">	
	<h1 > Edit Program</h1>
		<a href="program.php">
			<div class="backBtn"></div>
		</a>
	<form action="" method="post" onsubmit="return programEdit()">
		<table>
        <?php
			$name='';
			$description='';
			$progId= $_GET['id'];
			$program="SELECT * FROM program
					  WHERE prog_id='$progId'";
			$result=mysql_query($program);
				while($row=mysql_fetch_array($result))
					{
						$name=$row['prog_name'];
						$description=$row['description'];
					}
			 
		?>
			<tr>
				<td>Program Name:</td>
				<td><span style="color:#ff0000">*</span><input type="text" name="name" id="progName" value="<?php echo $name?>" /></td>
				<td><div id="aProgMsg"></div></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><span style="color:#ff0000">*</span><input type="text" name="des" id="progDescription" value="<?php echo $description?>" /></td>
				<td><div id="aProgDescriptionMsg"></div></td>
			</tr>
			<tr>
				<td></td>
				<td align="right"><input type="submit" name="submit-btn" value="Update Program" /></td>
			</tr>
			
		</table>
	</form>
	<?php
				$progId= $_GET['id'];
				if(isset($_POST['name']) && ($_POST['des']))
					{
		
				
				
					$updateProg="UPDATE program SET 
											prog_name='".$_POST['name']."',
											description='".$_POST['des']."'
							WHERE prog_id='$progId'";
							
						if(!mysql_query($updateProg))
						{
							die("could not update :".mysql_error());
						}
						header("Location: program.php");
						
					}
					
			?>
<?php require_once('includes/footer.php');?>