<?php require_once('../connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<script type="text/javascript">


	function admissionForm()
		{
			var programName=document.getElementById('program').value;
			var meritList=document.getElementById('category').value;
			var meritListDate=document.getElementById('date').value;
			var totalSeats=document.getElementById('tseats').value;
			var feeDate=document.getElementById('lastDate').value;
			
			
			
			
				if(programName=="" || programName=='Choose one program')
					{
						alert('Please Select Program');
						document.getElementById('program').focus();
						return false;
					}
				if(meritList=="" || meritList=='Select Merit List')
					{
						alert('Please Select Merit List Category');
						document.getElementById('category').focus();
						return false;
					}
				if(meritListDate=="")
					{
						
						alert('Please Enter  Merit List Display Date ');
						document.getElementById('date').focus();
						return false;
					}
				if(totalSeats=="")
					{
						
						alert('Please Enter Total Seats ');
						document.getElementById('tseats').focus();
						return false;
					}
					 var rollNo = "abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRST";
       					 for (var i = 0; i <document.getElementById('tseats').value.length; i++) {
						if (rollNo.indexOf(document.getElementById('tseats').value.charAt(i)) != -1) {
						alert ("Please Enter only digit");
						document.getElementById('tseats').focus();
						return false;
        				}
                			}
				if(feeDate=="")
					{
						
						alert('Please Enter Last Date of Fee ');
						document.getElementById('lastDate').focus();
						return false;
					}
				 
					return true;
		}

 </script>


<div id="content">
	<h1>Admission Detail</h1>
    <form name="admission-detail" action="" method="post" id="commentForm" onsubmit="return admissionForm()" >
	<table cellspacing="8">
		<tr>
			<th>Program Name:</th>
			<td><span style='color:#ff0000; float:left'>*</span>
				<select name="prog" id="program" >
				<option  >Choose one program </option>
				<?php
					$query='SELECT *FROM program';
						$result= mysql_query($query);
	
							while($row=mysql_fetch_array($result))
							{
								//echo "<option value='".$row['prog_id']."'>".$row['prog_name']."</option>";
								?>
								<option value="<?php echo $row['prog_id']?>"><?php echo $row['prog_name']?></option>
								<?php
								
							}
							
				?>
			</select>
			</td>
				
            </tr>
            
            <tr>
                <th>Select Merit List Category:</th>
                <td><span style='color:#ff0000; float:left'>*</span>
                	<select name="category" id="category">
                    	<option>Select Merit List</option>
                        <option value="first">First Merit List </option>
                        <option value="second">Second Merit List </option>
                        <option value="third">Third Merit List</option>
                    </select>
                
               	
                </td>
                
            </tr>
            <tr>
                <th>Merit List Date:</th>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="date" id="date"  /></td>
				
				
                
            </tr>
            <tr>
                <th>Total seats:</th>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="tseats" id="tseats"   /></td>
				
				
                
            </tr>
            <tr>
                <th>Fee Submission Date:</th>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="fee"  id="lastDate"/></td>
				
                
            </tr>
            
           
                <td></td>
                <td align="right"><input type="submit" value="Announce Admission"  >
        </table>
        </form>
        <?php 
				if(isset($_POST['category']))
					{
				$category=$_POST['category'];
				}
//				$temp=$_SESSION['check'];
				
				?>
        <?php /*
					if(isset($_POST['prog'])&&($_POST['tseats'])&&($_POST['date']))
						{
							if($_POST['prog']=="p2")
							{
						$addDetail="INSERT INTO admission VALUES(NULL,'$_POST[prog]','$_POST[tseats]','$_POST[remainingSeats]','$_POST[category]','$_POST[date]')";
						$result=mysql_query($addDetail);
							if(!$result)
								{
									die('could not insert into Admssion detail:'.mysql_error());
								}
							}
							////////////////////////////////////////
							else if($_POST['prog']=="p1")
							{
						$addDetail="INSERT INTO fa_admission VALUES(NULL,'$_POST[prog]','$_POST[tseats]','$_POST[ldate]','$_POST[fmerit]','$_POST[smerit]','$_POST[tmerit]')";
						$result=mysql_query($addDetail);
							if(!$result)
								{
									die('could not insert into Admssion detail:'.mysql_error());
								}
							}
							////////////////////////////////////////
						else if($_POST['prog']=="p3")
							{
						$addDetail="INSERT INTO ics_admission VALUES(NULL,'$_POST[prog]','$_POST[tseats]','$_POST[ldate]','$_POST[fmerit]','$_POST[smerit]','$_POST[tmerit]')";
						$result=mysql_query($addDetail);
							if(!$result)
								{
									die('could not insert into Admssion detail:'.mysql_error());
								}
							}
							///////////////////////////////////////////
							else if($_POST['prog']=="p4")
							{
						$addDetail="INSERT INTO bsc_admission VALUES(NULL,'$_POST[prog]','$_POST[tseats]','$_POST[ldate]','$_POST[fmerit]','$_POST[smerit]','$_POST[tmerit]')";
						$result=mysql_query($addDetail);
							if(!$result)
								{
									die('could not insert into Admssion detail:'.mysql_error());
								}
							}
							///////////////////////////////////////////
							else 
							{
						$addDetail="INSERT INTO ba_admission VALUES(NULL,'$_POST[prog]','$_POST[tseats]','$_POST[ldate]','$_POST[fmerit]','$_POST[smerit]','$_POST[tmerit]')";
						$result=mysql_query($addDetail);
							if(!$result)
								{
									die('could not insert into Admssion detail:'.mysql_error());
								}
							}
							///////////////////////////////////////////
						}
						*/
		 ?>
         <?php /*
					if(isset($_POST['prog'])&&($_POST['category'])&&($_POST['tseats'])&&($_POST['remainingSeats'])&&($_POST['date']))
						{
						$std_id='';
						$remainingSeates='';
						$remainingSeates=$_POST['tseats'];
						$count='0';
						$meritList="SELECT *
										FROM academic a, student s
										WHERE per_class = 'matric'
										AND a.std_id = s.std_id
										AND ( prog_id='p2')
										AND status='0'
										
										ORDER BY (
										obtain_marks
										) DESC";
							$result=mysql_query($meritList);
								
								
								while($row=mysql_fetch_array($result))
									{										
										
										
	   								}
									
									if($category=='first')
									  {
										if($count<$remainingSeates)
										{
											
											 $count++;
											 echo "you select first";
										echo $std_id=$row['std_id'];
										$query="UPDATE student
													SET status='1'
												WHERE std_id=".$std_id;
											mysql_query($query);
										}
										
										
										
	   								}
									
									
									
									 else if($category=='second')
									  {	
											 $count++;
											 echo "you select second";
										echo $std_id=$row['std_id'];
										$query="UPDATE student
													SET status='2'
												WHERE std_id=".$std_id;
											mysql_query($query);
	   								}
									
									
									
									  else if($category=='third')
									  {
										if($count<$temp)
										{
											
											 $count++;
											 echo "you select third";
										echo $std_id=$row['std_id'];
										$query="UPDATE student
													SET status='3'
												WHERE std_id=".$std_id;
											mysql_query($query);
										}
									
								}
								
								echo $_SESSION['check']=$remainingSeates;
								
								}
		*/?>
        <?php 
			if (isset($_POST['prog'], $_POST['category']))
			{
				$query = "select * from admission where prog_id='".$_POST['prog']."' and list_category='".$_POST['category']."'";
				
				$result = mysql_query($query);
				$update_query = "";
				if (mysql_num_rows($result)>0)
				{
					$update_query = "update admission set
									seats='".$_POST['tseats']."', 
									fee_date='".$_POST['fee']."', 
									date='".$_POST['date']."'
									where 
									prog_id='".$_POST['prog']."' and 
									list_category='".$_POST['category']."'";
				}else
				{
					$update_query = "insert into admission values(NULL, 
									'".$_POST['prog']."', 
									'".$_POST['tseats']."', 
									'".$_POST['fee']."', 
									'".$_POST['category']."', 
									'".$_POST['date']."')";
				}
				
				mysql_query($update_query) or die("Can't update admission list");
			
			
			$status = 0;
			if ($category == 'first') 
			{
				$status = 1;
			}
			else if ($category == 'second')
					 $status = 2;
			else if ($category == 'third') 
					$status = 3;
			$quer = "SELECT a.std_id
								FROM academic a, student s
								WHERE 
								a.std_id = s.std_id
								AND ( prog_id='".$_POST['prog']."')
								AND status=0
								ORDER BY (
								obtain_marks
								) DESC LIMIT ".$_POST['tseats'];
			$result = mysql_query($quer) or die("Can't get students for list");		
			while ($row = mysql_fetch_array($result))
			{
				$quer = "update student set status='".$status."'
						where std_id=".$row['std_id'];
				mysql_query($quer) or die("Can't update");
			}
		}
		?>
</div>
<?php require_once('includes/footer.php');?>