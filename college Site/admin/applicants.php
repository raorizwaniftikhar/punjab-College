<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<?php require_once('connection.php') ?>
<div id="content">
	<h1>Application Information</h1>
	<div id="application">
	<table >
		<tr bgcolor="#999999">
			<th>Application ID</th>
			<th>Name</th>
			<th>Program</th>
			<th> Action</th>
		</tr>
<?php
		$getAppDetial="SELECT * FROM student";
		$result=mysql_query($getAppDetial);
			while($row=mysql_fetch_array($result))
				{
					$detailId=$row['std_id'];
					$cId=$row['comb_id'];
					echo "<tr bgcolor='#d2d2d2'>";
						echo "<td>".$row['std_id']."</td>";
						echo "<td>".$row['std_name']."</td>";
						echo "<td>".$row['prog_id']."</td>";
						echo "<td>"."<a href='appliction-detail.php?id=$detailId&combId=$cId'>Detail</a>"."||"."<a href='applicants-delete.php?id=$detailId'>Delete</a>"."</td>";
					echo "</tr>";
				}

?>
		
			
	</table>
	</div>
</div>
<?php require_once('includes/footer.php');?>


