// JavaScript Document
function personalForm()
	{	
		
		var name=document.getElementById('sname').value;
		var fname=document.getElementById('sfname').value;
		var nic=document.getElementById('snic').value;
		var add=document.getElementById('sadd').value;
		var dob=document.getElementById('sdob').value;
		var religion=document.getElementById('srel').value;
		var nat=document.getElementById('snat').value;
		var ph=document.getElementById('sph').value;
		var email=document.getElementById('semail').value;
	
			
			 if(name=="")
				{
					document.getElementById('aNameMsg').innerHTML="<span style='color:#f00;'>Please Enter Student Name</span>";
					document.getElementById('sname').focus();
					return false;
				}
			else if(fname=="")
				{
						document.getElementById('aFNameMsg').innerHTML="<span style='color:#f00;'>Please Enter Father Name</span>";
					document.getElementById('sfname').focus();
					return false;
				}
				else if(nic=="")
				{
						document.getElementById('aNicMsg').innerHTML="<span style='color:#f00;'>Please Enter Student NIC</span>";
					document.getElementById('snic').focus();
					return false;
				}
				else if(add=="")
				{
						document.getElementById('aAddMsg').innerHTML="<span style='color:#f00;'>Please Enter Student Address</span>";
					document.getElementById('sadd').focus();
					return false;
				}
				else if(dob=="")
				{
						document.getElementById('aDobMsg').innerHTML="<span style='color:#f00;'>Please Enter Student DOB</span>";
					document.getElementById('sdob').focus();
					return false;
				}
				else if(religion=="")
				{
						document.getElementById('aRelMsg').innerHTML="<span style='color:#f00;'>Please Enter Student Religion</span>";
					document.getElementById('srel').focus();
					return false;
				}
				else if(nat=="")
				{
						document.getElementById('aNatMsg').innerHTML="<span style='color:#f00;'>Please Enter Student Nationality</span>";
					document.getElementById('snat').focus();
					return false;
				}
				else if(ph=="")
				{
						document.getElementById('aPhMsg').innerHTML="<span style='color:#f00;'>Please Enter Student Phone Number</span>";
					document.getElementById('sph').focus();
					return false;
				}
				else if(email=="")
				{
						document.getElementById('aEmailMsg').innerHTML="<span style='color:#f00;'>Please Enter Student Email Address</span>";
					document.getElementById('semail').focus();
					return false;
				}
				else if(mr=="")
				{
					document.getElementById('aMarkMsg').innerHTML="<span style='color:#f00;'>Please Enter Matric Roll Number</span>";
					document.getElementById('smr').focus();
					return false;
					
				}
				
				
				return true;
	}