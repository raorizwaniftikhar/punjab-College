// JavaScript Document

	function facultyForm()
		{
			var name=document.getElementById('tname').value;
			var fname=document.getElementById('fname').value;
			var nic=document.getElementById('nic').value;
			var dob=document.getElementById('dob').value;
			var bps=document.getElementById('bps').value;
			var qualification=document.getElementById('qualification').value;
			var address=document.getElementById('address').value;
			var email=document.getElementById('email').value;
			var phone=document.getElementById('phone').value;
			var subject=document.getElementById('subject').value;
			
			
			
				if(name=="")
					{
						document.getElementById('aNameMsg').innerHTML="<span style='color:#ff0000'>Please Eneter Teacher Name</span>";
						document.getElementById('tname').focus();
						return false;
					}
				else if(fname=="")
					{
						document.getElementById('aFNameMsg').innerHTML="<span style='color:#ff0000'>Please Eneter Father Name</span>";
						document.getElementById('fname').focus();
						return false;
					}
				else if(nic=="")
					{
						document.getElementById('aNicMsg').innerHTML="<span style='color:#ff0000'>Please Eneter NIC</span>";
						document.getElementById('nic').focus();
						return false;
					}
				else if(dob=="")
					{
						document.getElementById('aDobMsg').innerHTML="<span style='color:#ff0000'>Please Eneter DOB</span>";
						document.getElementById('dob').focus();
						return false;
					}
				else if(bps=="")
					{
						document.getElementById('aBpsMsg').innerHTML="<span style='color:#ff0000'>Please Eneter BPS</span>";
						document.getElementById('bps').focus();
						return false;
					}
				else if(qualification=="")
					{
						document.getElementById('aQualificationMsg').innerHTML="<span style='color:#ff0000'>Please Eneter qualification</span>";
						document.getElementById('qualification').focus();
						return false;
					}
				else if(address=="")
					{
						document.getElementById('aAddressMsg').innerHTML="<span style='color:#ff0000'>Please Eneter Address</span>";
						document.getElementById('address').focus();
						return false;
					}
				else if(email=="")
					{
						document.getElementById('aAddressMsg').innerHTML="<span style='color:#ff0000'>Please Eneter Email Id</span>";
						document.getElementById('aEmailMsg').focus();
						return false;
					}
				else if(phone=="")
					{
						document.getElementById('aPhoneMsg').innerHTML="<span style='color:#ff0000'>Please Eneter Phone NO</span>";
						document.getElementById('phone').focus();
						return false;
					}
				else if(subject=="" || subject=='Select one subject')
					{
						document.getElementById('aSubjectMsg').innerHTML="<span style='color:#ff0000'>Please Select One Subject</span>";
						document.getElementById('subject').focus();
						return false;
					}
				
					return true;
		}