<?php
	//////////////////////////////////////
	//  define('DB-HOST','localhost');  //
	//  define('DB-User','root');	    //
	//  define('DB-Password','');	    //
	//  define('DB-Database','db')	    //
	//////////////////////////////////////
	//create connection 
	$con=mysql_connect('localhost','root','');
		if(!$con)
			{
				die('Could not connect:'.mysql_error());	
			}
			
	//Select Database 
	$Database=mysql_select_db('mydb');
		if(!$Database)
			{
			 die('Could not Connect To Databse :'.mysql_error());
			}
			
	
	
	//mysql_close($con);
?> 
