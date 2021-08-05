<?php require_once('connection.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<div id="content">
	

	<h1>Merit List For F.Sc</h1>
	<table>
		<tr bgcolor="#666666">
        	<th>Sr NO </th>
			<th>App NO </th>
			<th>Name</th>
			<th>Father Name</th>
			<th>Class</th>
            <th>Obtain Marks</th>
            <th>Total Marks</th>
            <th>Hafiz</th>
            <th>Total merit</th>
			
		</tr>
       		<?php 
					$sr='0';
					$meritList="SELECT *
								FROM academic a, student s
								WHERE per_class = 'matric'
								AND a.std_id = s.std_id
								AND (prog_id='p1')
								
								ORDER BY (
								obtain_marks
								) DESC";
								$result=mysql_query($meritList);
							while($row=mysql_fetch_array($result))
								{	
										++$sr;
								
							echo"<tr bgcolor='#d2d2d2'>";
										echo"<td>".$sr."</td>";
										echo"<td>".$row['std_id']."</td>";
										echo"<td>".$row['std_name']."</td>";
										echo"<td>".$row['std_fname']."</td>";
										echo"<td>".$row['per_class']."</td>";
										echo"<td>".$row['obtain_marks']."</td>";
											$obtainMarks=$row['obtain_marks'];
										echo"<td>".$row['total_marks']."</td>";
										echo"<td>".$row['hafiz']."</td>";
											$hafiz=$row['hafiz'];
												if($hafiz=='yes')
													{
														$obtainMarks+=10;
														
													}
										
										
										echo"<td>".$obtainMarks."</td>";
										
								echo"</tr>";
								}
			?>

		
		
	</table>
	<h1>Merit List For F.A</h1>
	<table>
		<tr bgcolor="#666666">
        	<th>Sr NO </th>
			<th>App NO </th>
			<th>Name</th>
			<th>Father Name</th>
			<th>Class</th>
            <th>Obtain Marks</th>
            <th>Total Marks</th>
            <th>Hafiz</th>
            <th>Total merit</th>
			
		</tr>
       		<?php 
					$sr='0';
					$meritList="SELECT *
								FROM academic a, student s
								WHERE per_class = 'matric'
								AND a.std_id = s.std_id
								AND ( prog_id='p2')
								
								ORDER BY (
								obtain_marks
								) DESC";
								$result=mysql_query($meritList);
							while($row=mysql_fetch_array($result))
								{	
										++$sr;
								
							echo"<tr bgcolor='#d2d2d2'>";
										echo"<td>".$sr."</td>";
										echo"<td>".$row['std_id']."</td>";
										echo"<td>".$row['std_name']."</td>";
										echo"<td>".$row['std_fname']."</td>";
										echo"<td>".$row['per_class']."</td>";
										echo"<td>".$row['obtain_marks']."</td>";
											$obtainMarks=$row['obtain_marks'];
										echo"<td>".$row['total_marks']."</td>";
										echo"<td>".$row['hafiz']."</td>";
											$hafiz=$row['hafiz'];
												if($hafiz=='yes')
													{
														$obtainMarks+=10;
														
													}
										
										
										echo"<td>".$obtainMarks."</td>";
										
								echo"</tr>";
								}
			?>

		
		
	</table>
	<h1>Merit List For I.C.S</h1>
	<table>
		<tr bgcolor="#666666">
        	<th>Sr NO </th>
			<th>App NO </th>
			<th>Name</th>
			<th>Father Name</th>
			<th>Class</th>
            <th>Obtain Marks</th>
            <th>Total Marks</th>
            <th>Hafiz</th>
            <th>Total merit</th>
			
		</tr>
       		<?php 
					$sr='0';
					$meritList="SELECT *
								FROM academic a, student s
								WHERE per_class = 'matric'
								AND a.std_id = s.std_id
								AND ( prog_id='p3')
								
								ORDER BY (
								obtain_marks
								) DESC";
								$result=mysql_query($meritList);
							while($row=mysql_fetch_array($result))
								{	
										++$sr;
								
							echo"<tr bgcolor='#d2d2d2'>";
										echo"<td>".$sr."</td>";
										echo"<td>".$row['std_id']."</td>";
										echo"<td>".$row['std_name']."</td>";
										echo"<td>".$row['std_fname']."</td>";
										echo"<td>".$row['per_class']."</td>";
										echo"<td>".$row['obtain_marks']."</td>";
											$obtainMarks=$row['obtain_marks'];
										echo"<td>".$row['total_marks']."</td>";
										echo"<td>".$row['hafiz']."</td>";
											$hafiz=$row['hafiz'];
												if($hafiz=='yes')
													{
														$obtainMarks+=10;
														
													}
										
										
										echo"<td>".$obtainMarks."</td>";
										
								echo"</tr>";
								}
			?>

		
		
	</table>
	<h1>Merit List B.Sc</h1>
	<table>
		<tr bgcolor="#666666">
        	<th>Sr NO </th>
			<th>App NO </th>
			<th>Name</th>
			<th>Father Name</th>
			<th>Class</th>
            <th>Obtain Marks</th>
            <th>Total Marks</th>
            <th>Hafiz</th>
            <th>Total merit</th>
			
		</tr>
       		<?php 
					$sr='0';
					$meritList="SELECT *
								FROM academic a, student s
								WHERE per_class = 'matric'
								AND a.std_id = s.std_id
								AND (prog_id='p4')
								
								ORDER BY (
								obtain_marks
								) DESC";
								$result=mysql_query($meritList);
							while($row=mysql_fetch_array($result))
								{	
										++$sr;
								
							echo"<tr bgcolor='#d2d2d2'>";
										echo"<td>".$sr."</td>";
										echo"<td>".$row['std_id']."</td>";
										echo"<td>".$row['std_name']."</td>";
										echo"<td>".$row['std_fname']."</td>";
										echo"<td>".$row['per_class']."</td>";
										echo"<td>".$row['obtain_marks']."</td>";
											$obtainMarks=$row['obtain_marks'];
										echo"<td>".$row['total_marks']."</td>";
										echo"<td>".$row['hafiz']."</td>";
											$hafiz=$row['hafiz'];
												if($hafiz=='yes')
													{
														$obtainMarks+=10;
														
													}
										
										
										echo"<td>".$obtainMarks."</td>";
										
								echo"</tr>";
								}
			?>

		
		
	</table>
	<h1>Merit List B.A</h1>
	<table>
		<tr bgcolor="#666666">
        	<th>Sr NO </th>
			<th>App NO </th>
			<th>Name</th>
			<th>Father Name</th>
			<th>Class</th>
            <th>Obtain Marks</th>
            <th>Total Marks</th>
            <th>Hafiz</th>
            <th>Total merit</th>
			
		</tr>
       		<?php 
					$sr='0';
					$meritList="SELECT *
								FROM academic a, student s
								WHERE per_class = 'matric'
								AND a.std_id = s.std_id
								AND (prog_id='p5')
								
								ORDER BY (
								obtain_marks
								) DESC";
								$result=mysql_query($meritList);
							while($row=mysql_fetch_array($result))
								{	
										++$sr;
								
							echo"<tr bgcolor='#d2d2d2'>";
										echo"<td>".$sr."</td>";
										echo"<td>".$row['std_id']."</td>";
										echo"<td>".$row['std_name']."</td>";
										echo"<td>".$row['std_fname']."</td>";
										echo"<td>".$row['per_class']."</td>";
										echo"<td>".$row['obtain_marks']."</td>";
											$obtainMarks=$row['obtain_marks'];
										echo"<td>".$row['total_marks']."</td>";
										echo"<td>".$row['hafiz']."</td>";
											$hafiz=$row['hafiz'];
												if($hafiz=='yes')
													{
														$obtainMarks+=10;
														
													}
										
										
										echo"<td>".$obtainMarks."</td>";
										
								echo"</tr>";
								}
			?>

		
		
	</table>
</div>







<?php require_once('includes/footer.php'); ?>