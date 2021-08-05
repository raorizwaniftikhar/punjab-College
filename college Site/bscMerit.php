<?php require_once('connection.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<div id="content">
	<?php
			$category='';
			$lastAdmissionDate='';
			$seats='';
			$totalSeats='';
			$remainingSeats='';
			$getCategory="SELECT * FROM admission";
			$resultCategory=mysql_query($getCategory);
				while($row=mysql_fetch_array($resultCategory))
					{
						$category=$row['list_category'];
						$lastAdmissionDate=$row['date'];
						$seats=$row['seats'];
						$remainingSeats=$row['seats'];
					}
			
				
			
			 
	?>
<center>
	<h2><?php  $listId=$_GET['list_id'];
				if($listId=='1') 
					echo "First Merit List For B.Sc";
				else if($listId=='2') 
					echo "Second Merit List For B.Sc";
				else if($listId=='3') 
				echo "Third Merit List For B.Sc"
				 ?> 
	</h2>
</center>
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
       		<?php /* 
					$std_id='';
					$firstMeritList=strtotime("2011-11-20");
					$todayDate=date("Y-m-d");
					$today=strtotime($todayDate);
					$expFirstMeritList=strtotime($firstMeritList);
						$getSeates="SELECT * FROM admission where prog_id='p2' order by admission_id desc";
						$getResult=mysql_query($getSeates);
						$seat=mysql_fetch_array($getResult);
						
					$remainingSeats =  $seat['remaining_seats'];
					
						if($today>$expFirstMeritList)
						{
					$sr='1';
					$meritList="SELECT *
								FROM academic a, student s
								WHERE per_class = 'matric'
								AND a.std_id = s.std_id
								AND ( prog_id='p2')
								AND status='0'
								
								ORDER BY (
								obtain_marks
								) DESC";
								$result=mysql_query($meritList) or die("Query fail");
								
							while($row=mysql_fetch_array($result))
								{	
										if($sr<$remainingSeats)
										{
									$std_id=$row['std_id'];
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
								
									$sr++;
									      }
										  else 
										  {
										  	break;
										  }
								}
							}
			*/?>
            <?php 
				
				$quer = "select * from student s, academic c where status='".$_GET['list_id']."' AND prog_id='p4' AND s.std_id=c.std_id AND per_class='Intermediate' order by obtain_marks desc";
				$result = mysql_query($quer) or die("can't select");
				$sr = 1;
				while ($row = mysql_fetch_array($result))
				{
					$totalMerit = $row['hafiz'] == 'yes' ? $row['obtain_marks']+10 : $row['obtain_marks'];
				?>
				<tr bgcolor="#CCC">
                    <td><?php echo $sr?></td>
                    <td><?php echo $row['std_id'] ?></td>
                    <td><?php echo $row['std_name'] ?></td>
                    <td><?php echo $row['std_fname'] ?></td>
                    <td><?php echo $row['per_class'] ?></td>
                    <td><?php echo $row['obtain_marks'] ?></td>
                    <td><?php echo $row['total_marks']; ?></td>
                    <td><?php echo $row['hafiz'] ?></td>
                    <td><?php echo $totalMerit; ?></td>
                    
                </tr>
        <?php
				$sr++;
				}
				 
			?>

		</table>
		 <br />
        <?php
				$listId=$_GET['list_id'];
				$date="";
				
				if($listId=='1')
					{
						$getFeeDate="SELECT *
							FROM admission
							WHERE prog_id = 'p4'
							AND list_category = 'first'";
						$result=mysql_query($getFeeDate);
					}
				if($listId=='2')
					{
						$getFeeDate="SELECT *
							FROM admission
							WHERE prog_id = 'p4'
							AND list_category = 'second'";
						$result=mysql_query($getFeeDate);
					}
				if($listId=='3')
					{
						$getFeeDate="SELECT *
							FROM admission
							WHERE prog_id = 'p4'
							AND list_category = 'third'";
						$result=mysql_query($getFeeDate);
					}
						while($row=mysql_fetch_array($result))
							{
								$date=$row['date'];
							}
		?>

        
		
		

			


		
		
	
</div>








<?php require_once('includes/footer.php'); ?>