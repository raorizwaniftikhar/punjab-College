// JavaScript Document

	function programEdit()
		{
			var progName=document.getElementById('progName').value;
			var progDescription=document.getElementById('progDescription').value;
				if(progName=="")
					{
						document.getElementById('aProgMsg').innerHTML="<span style='color:#ff0000'>Please Enter program Name</span>";
						document.getElementById('progName').focus();
						return false;
					}
				else if(progDescription=="")
					{
						document.getElementById('aProgDescriptionMsg').innerHTML="<span style='color:#ff0000'>Please Enter program Description</span>";
						document.getElementById('progDescription').focus();
						return false;
					}
					return true;
		}
