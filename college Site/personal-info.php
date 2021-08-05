<?php require_once('connection.php'); ?>
<?php require_once('includes/header.php'); ?>
<?php require_once('javascript/form.php'); ?>
<!--
<script language="javascript" src="javascript/form.js"  type="text/javascript"></script>
<div id="personal-info">
-->
<script language = "Javascript">
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}
	
	
function ValidateForm(){
	
	var emailID=document.myform.email;
	var programName=document.myform.prog.value;
	var combination=document.myform.combination.value;
	
	if(programName=='Choose one program' || programName=='')
	{
		alert('Please select program');
		document.myform.prog.focus();
		return false;
	}
	if(combination=='')
	{
		alert('Please select combiantion');
		document.myform.combination.focus();
		return false;
	}
	if(document.myform.name.value=="") 
   { 
      alert("Plz enter your name!"); 
      document.myform.name.focus(); 
      return false; 
   } 
	
	 var iChars = "!@#$%^&*()+=-[]\\\'`;,/{}|\":<>?1234567890";
        for (var i = 0; i < document.myform.name.value.length; i++) {
                if (iChars.indexOf(document.myform.name.value.charAt(i)) != -1) {
                alert ("You are enter Invalid characters. \nPlease Enter Alphabet only.\n");
				 document.myform.name.focus(); 
                return false;
        }
                }
	
   if(document.myform.fname.value=="") 
   { 
      alert("Plz enter your Father name!"); 
      document.myform.fname.focus(); 
      return false; 
   } 
 var iChars = "!@#$%^&*()+=-[]\\\'`;,/{}|\":<>?1234567890";
        for (var i = 0; i < document.myform.fname.value.length; i++) {
                if (iChars.indexOf(document.myform.fname.value.charAt(i)) != -1) {
                alert ("You are enter Invalid characters. \nPlease Enter Alphabet only.\n");
				document.myform.fname.focus();
                return false;
        }
                }
	if(document.myform.nic.value=="") 
   { 
      alert("Plz enter your NIC!"); 
      document.myform.nic.focus(); 
      return false; 
   } 
   var nicReg=/^[0-9]{5}[\- ]?[0-9]{7}[\- ]?[0-9]{1}$/;
   			if(!nicReg.test(document.myform.nic.value)){
					alert('Please Enter a Valid NIC');
					document.myform.nic.focus();
					return false;
			}
  
   
   if(document.myform.address.value=="") 
   { 
      alert("Plz enter your Address!"); 
      document.myform.address.focus(); 
      return false; 
   } 
   if(document.myform.dob.value=="") 
   { 
      alert("Plz enter your Date of Birth!"); 
      document.myform.dob.focus(); 
      return false; 
   } 
    if(document.myform.religion.value=="" ||document.myform.religion.value=="Select Religion") 
   { 
      alert("Plz Select religion!"); 
      document.myform.religion.focus(); 
      return false; 
   } 
    if(document.myform.distt.value=="" ||document.myform.distt.value=="select Disrtict") 
   { 
      alert("Plz Select Domicile Distric!"); 
      document.myform.distt.focus(); 
      return false; 
   } 
   if(document.myform.nationality.value=="" ||document.myform.nationality.value=="select Nationality") 
   { 
      alert("Plz Select Nationality!"); 
      document.myform.nationality.focus(); 
      return false; 
   } 
    if(document.myform.ph.value=="") 
   { 
      alert("Plz enter your Phone No!"); 
      document.myform.ph.focus(); 
      return false; 
   } 
    var rollNo = "abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRST";
        for (var i = 0; i < document.myform.ph.value.length; i++) {
                if (rollNo.indexOf(document.myform.ph.value.charAt(i)) != -1) {
                alert ("Please Enter only digit");
				document.myform.ph.focus();
                return false;
        }
                }
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if(document.getElementById('file').value=="")
		{
			alert('Please Up load Scanned Documents');
			document.getElementById('file').focus();
			return false;
		}
	 if(document.myform.dob.value=="") 
   { 
      alert("Plz enter your Date of Birth!"); 
      document.myform.dob.focus(); 
      return false; 
   } 
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
   if(document.myform.mr.value=="") 
   { 
      alert("Plz enter roll no!"); 
      document.myform.mr.focus(); 
      return false; 
   } 
   var rollNo = "abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRST";
        for (var i = 0; i < document.myform.mr.value.length; i++) {
                if (rollNo.indexOf(document.myform.mr.value.charAt(i)) != -1) {
                alert ("Please Enter only digit");
                return false;
        }
                }
	 if(document.myform.mr.value<='0') 
   { 
      alert("Invalid roll no!"); 
      document.myform.mr.focus(); 
      return false; 
   } 
				
   
   if(document.myform.mreg.value=="") 
   { 
      alert("Plz enter your Matric Registration No!"); 
      document.myform.mreg.focus(); 
      return false; 
   } 
  if(document.myform.mreg.value<='0') 
   { 
      alert("Invalid Registration no!"); 
      document.myform.mreg.focus(); 
      return false; 
   } 
 
   if(document.myform.mm.value=="") 
   { 
      alert("Plz enter Obtain Marks!"); 
      document.myform.mm.focus(); 
      return false; 
   } 
    if(document.myform.mm.value<'0') 
   { 
      alert("Invalid Obtain Marks!"); 
      document.myform.mm.focus(); 
      return false; 
   } 
   if(document.myform.mtm.value=="") 
   { 
      alert("Plz enter total Marks!"); 
      document.myform.mtm.focus(); 
      return false; 
   } 
   if(document.myform.mtm.value<'0') 
   { 
      alert("Invalid total Marks!"); 
      document.myform.mtm.focus(); 
      return false; 
   }
   var mm=document.myform.mm.value;
   var mtm=document.myform.mtm.value;
   
   if(mm>mtm)
		{
		alert("Plz Check Obtain Marks!"); 
        document.myform.mm.focus(); 
        return false; 
		} 
   
   if(document.myform.mb.value=="Select pass board"||document.myform.mb.value=="") 
   { 
      alert("Plz select your pss board!"); 
      document.myform.mb.focus(); 
      return false; 
   } 
   if(document.myform.my.value=="select pass year"||document.myform.my.value=="") 
   { 
      alert("Plz select your pass year!"); 
      document.myform.my.focus(); 
      return false; 
   } 
   if(document.myform.mg.value=="") 
   { 
      alert("Plz enter  you division!"); 
      document.myform.mg.focus(); 
      return false; 
   } 
    if(document.myform.fr.value=="") 
   { 
      alert("Plz enter Intermadiate roll no!"); 
      document.myform.fr.focus(); 
      return false; 
   } 
   var rollNo = "abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRST";
        for (var i = 0; i < document.myform.fr.value.length; i++) {
                if (rollNo.indexOf(document.myform.fr.value.charAt(i)) != -1) {
                alert ("Please Enter only digit");
				 document.myform.fr.focus(); 
                return false;
        }
                }
	 if(document.myform.fr.value<='0') 
   { 
      alert("Invalid Intermadiate roll no!"); 
      document.myform.fr.focus(); 
      return false; 
   } 
	 if(document.myform.freg.value=="") 
   { 
      alert("Plz enter your Intermadiate Registration No!"); 
      document.myform.freg.focus(); 
      return false; 
   } 
  if(document.myform.fm.value=="") 
   { 
      alert("Plz enter Obtain Marks!"); 
      document.myform.fm.focus(); 
      return false; 
   } 
   if(document.myform.fm.value<'0') 
   { 
      alert("Invalid Obtain Marks!"); 
      document.myform.fm.focus(); 
      return false; 
   } 
   if(document.myform.ftm.value=="") 
   { 
      alert("Plz enter total Marks!"); 
      document.myform.ftm.focus(); 
      return false; 
   } 
   if(document.myform.ftm.value<'0') 
   { 
      alert("Invalid total Marks!"); 
      document.myform.ftm.focus(); 
      return false; 
   }
   if(document.myform.fm.value>document.myform.ftm.value){
		alert('Please Check Intermadiate Marks');
		document.myform.fm.focus();
		return false;
	} 
   if(document.myform.fb.value=="Select pass board"||document.myform.fb.value=="") 
   { 
      alert("Plz select your pss board!"); 
      document.myform.fb.focus(); 
      return false; 
   } 
   if(document.myform.fy.value=="select pass year"||document.myform.fy.value=="") 
   { 
      alert("Plz select your pass year!"); 
      document.myform.fy.focus(); 
      return false; 
   } 
   if(document.myform.fg.value=="") 
   { 
      alert("Plz enter  you division!"); 
      document.myform.fg.focus(); 
      return false; 
   } 
   if(document.myform.my.value >=document.myform.fy.value) 
   { 
      alert("Plz Check your Pass date!"); 
      document.myform.fy.focus(); 
      return false; 
   } 
  
	
		
	return true;
	}
	
</script>

<div id="content">
  <form name="myform" enctype="multipart/form-data" action="insertPersonal-info.php" method="post" onsubmit="return ValidateForm()" >
    <center>
      <h2> Personal Information </h2>
    </center>
    <div id="persional-detail">
      <table  cellspacing="7">
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><label>Where To Applay:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <!--	  <select name="prog" onchange="fun()" id="course">-->
            <select name="prog" onchange="academicForm()" id="course">
              <option  >Choose one program</option>
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
          <td><label>Select Combination </label>
            <span style="color:#F00;margin-left:10px;">*</span></td>
          <td><div class="left" id="group"></div></td>
        </tr>
        <tr>
          <td><label>Student Name:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <input type="text" name="name" /></td>
          <td><label>Father Name:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <input type="text" name="fname" /></td>
        </tr>
        <tr>
          <td><label>NIC/B-Form </label></td>
          <td><span style="color:#F00">*</span>
            <input type="text" name="nic" /></td>
          <td><label>Address:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <input type="text" name="address"   /></td>
        </tr>
        <tr>
          <td><label>DOB:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <input type="text" name="dob"   /></td>
          <td><label>Religion:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <select name="religion" id="srel">
              <option value="" >Select Religion</option>
              <option value="Islam">Islam</option>
			  <option value="Islam">Christian</option>
			  <option value="Islam">Hindu</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label>Domicile:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <select name="distt" id="snat">
              <option value=""> select District</option>
              <option value="Rajanpur">Rajanpur</option>
              <option value="D.G.Khan">D.G.khan</option>
              <option value="Multan">Multan</option>
			  <option value="DunyaPur">Dunyapur</option>
			  <option value="Bahawalpur">Bahawalpur</option>
			  <option value="Lodharan">Lodharan</option>
			  
            </select>
          </td>
          <td><label>Nationality:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <select name="nationality" id="snat">
              <option value=""> select Nationality</option>
              <option value="Pakistan">Pakistan</option>
              <option value="Foreign">Foreign</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label>Phone Number:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <input type="text" name="ph"  id="sph" /></td>
          <td><label>Email ID:</label>
          </td>
          <td><span style="color:#F00">*</span>
            <input type="text" name="email" id="semail"  /></td>
        </tr>
        <tr>
          <td><label>Hafiz:</label>
          </td>
          <td><span style="color:#F00">*</span> No
            <input type="radio" name="hafiz"  value="no"  checked="checked" />
            yes
            <input type="radio" name="hafiz"   value="yes"/>
          </td>
        </tr>
        <tr>
          <td>
          <label>
          Documents:
          </td>
          <td><input type="file" name="file" id="file" />
          </td>
        </tr>
      </table>
    </div>
    <div id="academic">
      <div id="aForm"> </div>
    </div>
  </form>
</div>
<img height="6" border="0" width="780" alt="" src="images/bot01.jpg">
<?php require_once('includes/footer.php'); ?>
