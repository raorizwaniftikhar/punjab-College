<?php require_once('connection.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<script language="javascript">
function download()
{
	window.location='BA_report.xls';
}
</script>
<div id="content">
	

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
					$obtainMarks='';
					$meritList="SELECT *
								FROM academic a, student s
								WHERE per_class = 'Intermediate'
								AND a.std_id = s.std_id
								AND (prog_id='p5')
								
								ORDER BY (
								obtain_marks
								) DESC";
								$result=mysql_query($meritList);
							while($row=mysql_fetch_array($result))
								{	
										++$sr;
								
							echo"<tr bgcolor='#eee'>";
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
			
<h2 align="center"><a href="javascript:void(0);" onClick="download();">Generate Report For B.A</a></h2>
	<?php
/*
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	* Developed By : [ Dilshad Ahmed ] *
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
*/


require_once("excelwriter.class.php");

$excel=new ExcelWriter("BA_report.xls");
if($excel==false)	
echo $excel->error;

$myArr=array("S.No.","App NO","Name","Father Name","Class","Obtain Marks","Total Marks", "Hafiz","Total Merit");
$excel->writeLine($myArr);
$obtainMarks='';
$qry=mysql_query("SELECT *
								FROM academic a, student s
								WHERE per_class = 'matric'
								AND a.std_id = s.std_id
								AND ( prog_id='p5')
								
								ORDER BY (
								obtain_marks
								) DESC");
if($qry!=false)
{
	$i=1;
	while($res=mysql_fetch_array($qry))
	{
		$hafiz=$res['hafiz'];
		$obtainMarks=$res['obtain_marks'];
				if($hafiz=='yes')
					{
						$obtainMarks+=10;
						
					}
		$myArr=array($i,$res['std_id'],$res['std_name'],$res['std_fname'],$res['per_class'],$res['obtain_marks'],$res['total_marks'],$res['hafiz'],$obtainMarks);
		$excel->writeLine($myArr);
		$i++;
	}
}
?>		


		
		
	
</div>







<?php require_once('includes/footer.php'); ?>