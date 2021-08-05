<?php require_once('../connection.php');?>
<?php require_once('includes/header.php'); ?>
<?php require_once('includes/nav.php');?>
<script type="text/javascript">
	function facultyForm1()
		{
			var teacherName=document.getElementById('tname').value;
			var fatherName=document.getElementById('fname').value;
			var nic=document.getElementById('nic').value;
			var dob=document.getElementById('dob').value;
			var bps=document.getElementById('bps').value;
			var qualification=document.getElementById('qualification').value;
			var address=document.getElementById('address').value;
			var email=document.getElementById('email').value;
			var phone=document.getElementById('phone').value;
			var subject=document.getElementById('subject').value;
				if(teacherName=="")
					{
						alert('Please Enter Teacher Name');
						document.getElementById('tname').focus();
						return false;
					}
					var iChars = "!@#$%^&*()+=-[]\\\'`;,/{}|\":<>?1234567890";
        			for (var i = 0; i < document.getElementById('tname').value.length; i++) 
					{
                		if (iChars.indexOf(document.getElementById('tname').value.charAt(i)) != -1) 
							{
                			alert ("You are enter Invalid characters. \nPlease Enter Alphabet only.\n");
							document.getElementById('tname').focus();
                			return false;
        					}
                }
				if(fatherName=="")
					{
						alert('Please Enter Teacher Father Name');
						document.getElementById('fname').focus();
						return false;
					}
					var iChars = "!@#$%^&*()+=-[]\\\'`;,/{}|\":<>?1234567890";
        			for (var i = 0; i < document.getElementById('fname').value.length; i++) 
					{
                		if (iChars.indexOf(document.getElementById('fname').value.charAt(i)) != -1) 
							{
                			alert ("You are enter Invalid characters. \nPlease Enter Alphabet only.\n");
							document.getElementById('fname').focus();
                			return false;
        					}
                	}
				if(nic=="")
					{
						alert('Please Enter Teacher NIC');
						document.getElementById('nic').focus();
						return false;
					}
				if(dob=="")
					{
						alert('Please Enter Teacher DOB');
						document.getElementById('dob').focus();
						return false;
					}
				if(bps=="")
					{
						alert('Please Enter Teacher BPS');
						document.getElementById('bps').focus();
						return false;
					}
				if(qualification=="")
					{
						alert('Please Enter Teacher qualification');
						document.getElementById('qualification').focus();
						return false;
					}
				if(address=="")
					{
						alert('Please Enter Teacher address');
						document.getElementById('address').focus();
						return false;
					}
				if(email=="")
					{
						alert('Please Enter Teacher Email');
						document.getElementById('email').focus();
						return false;
					}
				if(phone=="")
					{
						alert('Please Enter Teacher Phone Number');
						document.getElementById('phone').focus();
						return false;
					}
				if(subject=="" ||subject=="Select one subject ")
					{
						alert('Please Select Subject');
						document.getElementById('subject').focus();
						return false;
					}
				return true;
		}
</script>

<div id="content">
	<h1>Faculty Detail</h1>
    	
    
    
    <form  action="" method="post" onsubmit=" return facultyForm1()" >
	<table cellspacing="8">
		
            <tr>
                <td>Techer Name:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="name" id="tname" /></td>
				
                
           
                <td>Father Name:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="fname"  id="fname"/></td>
				
                
            </tr>
            <tr>
                <td>NIC:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="nic"  id="nic" /></td>
               
            
                <td>DOB:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="dob"  id="dob" /></td>
                
            </tr>
            <tr>
                <td>BSP:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="bps"  id="bps"  /></td>

            
                <td>Qualification:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="qualification"  id="qualification"  /></td>

            </tr>
            <tr>
                <td>Address:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="address"  id="address"  /></td>

         
                <td>Email Id:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="email"  id="email"  /></td>

            </tr>
            <tr>
                <td>Phone No:</td>
                <td><span style='color:#ff0000; float:left'>*</span><input type="text" name="phone" id="phone"  /></td>

            
            <td>Subject:</td>
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
								<option value="<?php echo $row['subject_id']?>"><?php echo $row['subject_name']?></option>
								<?php
								
							}
							
				?>
			</select>
			</td>
            
            </tr>
			<tr>
                
				<td></td>
				<td></td>
				<td></td>
				
                <td align="right"><input type="submit" value="Add Record"  >
			</tr>
        </table>
        </form>
        <?php
				
					if(isset($_POST['name'])&&($_POST['fname'])&&($_POST['nic'])&&($_POST['dob'])&&($_POST['bps'])&&($_POST['qualification'])&&($_POST['address'])&&($_POST['email'])&&($_POST['phone']))
						{
					$addDetail="INSERT INTO teacher VALUES(NULL,'$_POST[name]','$_POST[fname]','$_POST[nic]','$_POST[dob]','$_POST[address]','$_POST[email]','$_POST[bps]','$_POST[phone]','$_POST[qualification]','$_POST[subject]')";
					$result=mysql_query($addDetail);
						if(!$result)
							{
								die('could not insert Teacher detail:'.mysql_error());
							}
						}
		 ?>
 <div id="faculty">
         <table>
        	<tr bgcolor="#999999">
            	<th>Teacher Name</th>
                <th>Father Name</th>
                <th>NIC</th>
                <th>DOB</th>
                <th>BPS</th>
                <th>Qualification</th>
                <th>Address</th>
                <th>email id</th>
                <th>Phone No</th>
                <th>Action</th>
            </tr>
            <?php
					$getTeacherDetail="SELECT * FROM teacher";
					$result=mysql_query($getTeacherDetail);
					while($row=mysql_fetch_array($result))
						{
							$teacherId=$row['teacher_id'];
							echo "<tr bgcolor='#eee'>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['fname']."</td>";
								echo "<td>".$row['nic']."</td>";
								echo "<td>".$row['dob']."</td>";
								echo "<td>".$row['bps']."</td>";
								echo "<td>".$row['qualification']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['email_id']."</td>";
								echo "<td>".$row['phone_no']."</td>";
								echo "<td>"."<a href='facultyEdit.php?id=$teacherId'>Edit</a>"."||"."<a href='facultyDelete.php?id=$teacherId'>Delete"."</a>"."</td>";
								
							echo "</tr>";
						} 
			?>
        </table>
       </div>
</div>
<?php require_once('includes/footer.php');?>
