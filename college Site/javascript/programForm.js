// JavaScript Document

	function programForm()
		{
			
			var progId=document.getElementById('progId').value;
			var progName=document.getElementById('progName').value;
			var progDescription=document.getElementById('progDescription').value;
				if(progId=="")
					{
						alert('Please Enter a program Id');
						document.getElementById('progId').focus();
						return false;
					}
				 var iChars = "!@#$%^&*()+=-[]\\\'`;,/{}|\":<>?1234567890";
					  for (var i = 0; i < document.getElementById('progId').value.length; i++) {
						if (iChars.indexOf(document.getElementById('progId').value.charAt(i)) != -1) {
						alert ("You are enter Invalid characters. \nPlease Enter Alphabet only.\n");
						return false;
        }
                }
				
				 if(progName=="")
					{
						alert('please Enter a Program Name');
						document.getElementById('progName').focus();
						return false;
					}
				if(progDescription=="")
					{
						alert('Please Enter a Program Description');
						document.getElementById('progDescription').focus();
						return false;
					}
					return true;
					
				
					
					
					
			
		}

	

