<?php require_once('connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>	
<script  language="javascript" src="../javascript/facultyForm.js" type="text/javascript"></script>
<div id="content">	
	<h1 > Edit Faculty Detail</h1>
		<a href="faculty.php">
			<div class="backBtn"></div>
		</a>
	<form name="facultyEdit" action="" method="post" onsubmit=" return facultyForm()" >
	<table >
    	<?php
				 $teacherId= $_GET['id'];
				 $name='';
				 $fname='';
				 $nic='';
				 $dob='';
				 $qualifiction='';
				 $address='';
				 $email='';
				 $phone='';
				 $bps='';
					$getFacultyInfo="SELECT * FROM teacher
									 WHERE teacher_id='$teacherId'";
						$resultFaculty=mysql_query($getFacultyInfo);
							while($row=mysql_fetch_array($resultFaculty))
								{
									 $name=$row['name'];
									 $fname=$row['fname'];
									 $nic=$row['nic'];
									 $dob=$row['dob'];
									 $address=$row['address'];
									 $email=$row['email_id'];
									 $bps=$row['bps'];
									 $qualifiction=$row['qualification'];
									 $phone=$row['phone_no'];
									 
								} 
		?>
		
            <tr>
                <td>Techer Name:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="name" id="tname"  /></td>
				
				<td><div id="aNameMsg"></div></td>
                
            </tr>
            <tr>
                <td>Father Name:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="fname"  id="fname"  /></td>
				<td><div id="aFNameMsg"></div></td>
                
            </tr>
            <tr>
                <td>NIC:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="nic"  id="nic"  /></td>
                <td><div id="aNicMsg"></div></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="dob"  id="dob"/></td>
                <td><div id="aDobMsg"></div></td>
            </tr>
            <tr>
                <td>BSP:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="bps"  id="bps"  /></td>
                <td><div id="aBpsMsg"></div></td>
            </tr>
            <tr>
                <td>Qualification:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="qualification"  id="qualification" /></td>
                <td><div id="aQualificationMsg"></div></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="address"  id="address"  /></td>
                <td><div id="aAddressMsg"></div></td>
            </tr>
            <tr>
                <td>Email Id:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="email"  id="email"  /></td>
                <td><div id="aEmailMsg"></div></td>
            </tr>
            <tr>
                <td>Phone NO:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="phone" id="phone" /></td>
                <td><div id="aPhoneMsg"></div></td>
            </tr>
            <tr>
            <td>Teacher Subject:</td>
			<td><span style='color:#ff0000; float:left'>*</span>
				<select name="subject" id="subject" >
				<option  >Select one subject </option>
				<?php
					$query='SELECT *FROM subject';
						$result= mysql_query($query);
	
							while($row=mysql_fetch_array($result))
							{
								//echo "<option value='".$row['prog_id']."'>".$row['prog_name']."</option>";
								?>
								<option value="<?php echo $row['subject_id']?>"><?php echo $row['name']?></option>
								<?php
								
							}
							
				?>
			</select>
			</td>
            <td> <div id="aSubjectMsg"></div></td>
            </tr>
                <td></td>
                <td><input type="submit" value="Update Teacher Detail"  >
        </table>
        </form>
	<?php
				 $teacherId= $_GET['id'];
				if(isset($_POST['name'])&&($_POST['fname'])&&($_POST['nic'])&&($_POST['dob'])&&($_POST['bps'])&&($_POST['qualification'])&&($_POST['address'])&&($_POST['email'])&&($_POST['phone']))
					{
		
				
				
					$updateFaculty="UPDATE teacher SET 
											name='".$_POST['name']."',
											fname='".$_POST['fname']."',
											nic='".$_POST['nic']."',
											dob='".$_POST['dob']."',
											address='".$_POST['address']."',
											email_id='".$_POST['email']."',
											bps='".$_POST['bps']."',
											email_id='".$_POST['email']."',
											phone_no='".$_POST['phone']."',
											qualification='".$_POST['qualification']."'
								WHERE teacher_id='$teacherId'";
							$result=mysql_query($updateFaculty);
							if(!$result)
								{	
									echo "Record not update";
								}
							
					
						
						
						header("Location: faculty.php");
						
						
					}
					
			?>
<?php require_once('includes/footer.php');?>