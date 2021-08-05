<?php require_once('includes/header.php'); ?>
	<div id="content">
			<div id="content-top">
            <?php if (!isset($_SESSION['userName'])):?>
				<div id="computer"></div>
					<div id="admission-title-bg">
						<div id="admission-title">
							<b>
								WELCOME TO
									<br>
								OUR ONLINE ADMISSION
							</b>
								<br />
								<br />
								<?php require_once('connection.php'); ?>
								<?php
									$todays_date = date("Y-m-d");
							   
								  $today = strtotime($todays_date);
								
									$fscDate='';
									$faDate='';
									$icsDate='';
									$bscDate='';
									$baDate='';
									$i=0;
									$datesArray=array();

									   $getLastDate="SELECT * FROM admission
									   				 WHERE list_category='third'
													 ORDER BY prog_id";
										$resultLastDate=mysql_query($getLastDate);
											while($row=mysql_fetch_array($resultLastDate))
												{
													
													$datesArray[$i]=$row['fee_date'];
													  $i++;
													
												}
											$fscDate=$datesArray[0];
											$faDate=$datesArray[1];
											$icsDate=$datesArray[2];
											$bscDate=$datesArray[3];
											$baDate=$datesArray[4];
											
											
										
											
										if(($fscDate<$todays_date)&&($faDate<$todays_date)&&($icsDate<$todays_date)&&($bscDate<$todays_date)&&($baDate<$todays_date))
											{
												$sid="";
												$name="";
												$fname="";
												$nic="";
												$dob="";
												$email="";
												$religion="";
												$domicile="";
												$nation="";
												$ph="";
												$hafiz="";
												$progId="";
												$combId='';
												$add="";
												$location="";
												$status="";
												///////////// DATA MOVES ONE TABLE TO ANOTHER////////////////
									$appDetail="SELECT *
												FROM student";
									$result=mysql_query($appDetail);
									while($row=mysql_fetch_array($result))
											{
												
											$sid= $row['std_id'];
												 $name=$row['std_name'];
												$fname=$row['std_fname'];
												$nic=$row['std_nic'];
												$dob=$row['std_dob'];
												$email=$row['std_email_Id'];
												$religion=$row['std_religion'];
												$domicile=$row['domicile'];
												$nation=$row['std_nationality'];
												$ph=$row['phone_no'];
												$hafiz=$row['hafiz'];
												$progId=$row['prog_id'];
												$combId=$row['comb_id'];
												$add=$row['address'];
												$location=$row['documents'];
												$status=$row['status'];
												
												
												$insertData="INSERT INTO h_student VALUES('$sid','$name','$fname','$nic','$dob','$email','$religion','$domicile','$nation','$ph','$hafiz','$progId','$combId','$add','$location','$status')";
												 $insertResult=mysql_query($insertData);
												  	if(!$insertResult)
														{
															die('Could not insert').mysql_error();
														}
													
													$deldata="DELETE FROM student WHERE std_id='$sid'";
															 mysql_query($deldata);
											}
											
												$class='';
												$group='';
												$rollNo='';
												$obtainmarks='';
												$totalMarks='';
												$board='';
												$year='';
												$grade='';
												$registration='';
												$std_id='';
								$getAcademic="SELECT * FROM academic";
								$resultAcademic=mysql_query($getAcademic);
								while($row=mysql_fetch_array($resultAcademic))
									{
										$class=$row['per_class'];
										$group=$row['group'];
										$rollNo=$row['per_rollNO'];
										$obtainmarks=$row['obtain_marks'];
										$totalMarks=$row['total_marks'];
										$board=$row['board'];
										$grade=$row['grade'];
										$year=$row['year'];
										$registration=$row['regNO'];
										$std_id=$row['std_id'];
										
										$accademicInsert="INSERT INTO h_academic VALUES('$class','$group','$rollNo','$obtainmarks','$totalMarks','$board','$grade','$year','$registration','$std_id')";
										
										 $resultDelAcademic=mysql_query($accademicInsert);
										 	if(!$resultDelAcademic)
											{
												die('could not insert ');
											}
										 
										 $delAcademic="DELETE FROM academic
										 			   WHERE regNO='$registration'";
										 mysql_query($delAcademic);
									}
											
																	
											}
											
												
										$exp_date = '';
										$getDate="SELECT * 
												  FROM admission_detail
												  order by admission_id";
												  
										$dateResult=mysql_query($getDate);
											while( $row=mysql_fetch_array($dateResult))
												{
														 $exp_date= $row['last_date'];
												}
												 $exp_date;
												
											   
												  
											   
												   $expiration_date = strtotime($exp_date);
											  
												   
											  
												  if ($expiration_date > $today) 
												 	 {
											  
												
												echo "<a href='personal-info.php'> Click here to apply Online admission </a>";
							
											  
												 	 }
												   else 
												   	{
											  			
												 	echo "<h1>Admission Close</h1>";
												 
													 }
		
								?>
									
								
				</div>
                		<script type="text/javascript">
							function logInForm()
								{
									var userName=document.getElementById('userName').value;
									var userPassword=document.getElementById('userPassword').value;
										if(userName=="")
											{
												alert("Please Enter User Name");
												document.getElementById('userName').focus();
												return false
											}
										if(userPassword=="")
											{
												alert("Please Enter User Password");
												document.getElementById('userPassword').focus();
												return false
											}
										return true;
								}
						</script>
                        <?php 
											if(isset($_POST['uname'])&&($_POST['password'])) // check if login button is pressed
												{
													$query="SELECT * FROM registration
															WHERE login_name='".$_POST['uname']."'
															AND   password='".$_POST['password']."'";
													$result=mysql_query($query);
														if(mysql_num_rows($result)>0)
															{
																$_SESSION['userName'] = $_POST['uname'];		
																$_SESSION['userPassword'] = $_POST['password'];
																header("Location: student.php");
																												
															}
														else
															{	
																echo "<span style='color:#ff0000;margin-left:45px;'>Invalid User Name or Password</span>";
															}
														
												}
								?>
                        
							<?php endif;?>
						</div>
					</div><!--end content-top-->
                    	
						<div id="news-title-area">
							<img src="images/News_03.png" width="198" height="29" alt="NEWS" />
						</div>
                        
							<?php require_once('includes/sidebar.php'); ?>
								<div id="right-content-area">
									<h2> Punjab College ShujaAbad </h2>
									<br />
										<p>Punjab College ShujaAbad was established in 2012. Punjab College is a name that has earned the reputation of an institution to yield academic excellence and provide our students with education of highest quality in an ideal and conducive teaching and learning environments.<br/> <br />The College develops in them a sense of responsibility, confidence, commitment and devotion towards the field of their choice while grooming their personalities and combing in them the qualities of vision, drive and initiativeis a name that has earned the reputation of an institution to yield academic excellence and provide our students with education of highest quality in an ideal and conducive teaching and learning environments.   </p>
								</div><!--end right-content-area -->
			
<img height="6" border="0" width="780" alt="" src="images/bot01.jpg">
</div><!--end content-->
 
<?php require_once('includes/footer.php');?>
