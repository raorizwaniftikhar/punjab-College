<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<div id="content">	

		<?php $progId= $_GET['id'];
				$combId=$_GET['combId'];
				$progName=$_GET['progName'];
				 $subject1=$_GET['s1'];
				  $subject2=$_GET['s2'];
				$subject3=$_GET['s3'];
 		?>
	<h1> Edit Combination</h1>
		<a href="combination.php">
			<div class="backBtn"></div>
		</a>
	<form action="" method="post">
		<table>
			<tr>
				<th>Program Id:</th>
				<td><?php  echo $progId ?></td>
			</tr>
			<tr>
				<th>Program Name:</th>
				<td><?php echo $progName ?></td>
			</tr>
			<tr>
				<th>Combination Id:</th>
				<td><?php echo $combId ?></td>
			</tr>
			<tr>
				<th>Combination:</th>
				<td><?php echo $subject1.','.$subject2.','.$subject3 ?></td>
			</tr
			><tr>
				<th>Subject 1:</th>
				<td><input type="text" name="sub1" /></td>
			</tr>
			<tr>
				<th>Subject 2:</th>
				<td><input type="text" name="sub2" /></td>
			</tr>
			<tr>
				<th>Subject 3:</th>
				<td><input type="text" name="sub3" /></td>
			</tr>
			

			

			<tr>
				<td></td>
				<td><input type="submit" name="submit-btn" value="Update Combination" /></td>
			</tr>
			
		</table>
	</form>
	<?php
		
				if(isset($_POST['sub1']) && ($_POST['sub2']) && ($_POST['sub3']))
					{
		
				
				
					$updateProg="UPDATE combination SET 
											subject1='".$_POST['sub1']."',
											subject2='".$_POST['sub2']."',
											subject3='".$_POST['sub3']."'
							WHERE comb_id='$combId' 
							AND prog_id='$progId'";
							
						if(!mysql_query($updateProg))
						{
							die("could not update :".mysql_error());
						}
						header("Location: combination.php");
						
						
					}
			?>
<?php require_once('includes/footer.php');?>