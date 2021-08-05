<?php require_once('includes/header.php'); ?>
<?php require_once('connection.php'); ?>
	<div id="content">
    
			<div id="content-top">
				<div id="about-area">
                				<center>	<h3>
                                    <?php
										$studentName='';  
										$userName=$_SESSION['userName'];
											$query="SELECT * FROM registration
													WHERE 	login_name='$userName'";
											$result=mysql_query($query);
												while($row=mysql_fetch_array($result))
													{
														$studentName=$row['std_name'];
													}
													echo "<strong>"."Hi,".$studentName."</strong>";
									
									
									
									?>
                                    </h3></center>
									
                                   
									
                  </div><!--end about-area-->
								
			
<img height="6" border="0" width="780" alt="" src="images/bot01.jpg">
</div><!--end content-->
 
<?php require_once('includes/footer.php');?>
