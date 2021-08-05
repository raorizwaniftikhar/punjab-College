<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style1.css" />
<title>Punjab College ShujaAbad</title>
<script language="javascript" src="javascript/personal Form.js"  type="text/javascript"></script>
<script type="text/javascript"  src="js/jquery-1.3.1.min.js"></script>
<?php require_once('connection.php');?>
<script type="text/javascript">
var newsTitle = new Array();
var newsDesc = new Array();
var newsID = 0;
var MAX_NEWS = 0;
var slideInterval;
$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();
	var counter = 0;
	<?php 
		$getNews="SELECT *FROM news Limit 10";
		$result=mysql_query($getNews) or die(mysql_error());
		while($row=mysql_fetch_array($result))
		{
			?>
				newsTitle[counter] = "<?php echo $row['title']?>";
				newsDesc[counter] = "<?php echo $row['Description']?>";
				counter++;
			<?php	
		}
	?>	
	
	
	MAX_NEWS = newsTitle.length;
	
	getNews();
	x = setInterval('getNews()',10000);

});

function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.7});

	//Resize the width of the caption according to the image width
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 400);
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	
	setInterval('gallery()',3000);
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	
	//Get next image caption
	var caption = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	$('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '100px'},500 );
	
	//Display the content
	$('#gallery .content').html(caption);
	
	
}

function getNews()
{
	//alert('');
	$("#news-title").html(newsTitle[newsID]);
	$("#news-content").html(newsDesc[newsID]);
	newsID++;
	if (newsID>=MAX_NEWS)
		newsID = 0;
		
	setTimeout("newsSlide()", 9600);
}

function newsSlide()
{
	$("#news-title").slideUp(400, function(){
		$("#news-title").slideDown(400, function(){
		});
	});
	$("#news-content").slideUp(400, function(){
		$("#news-content").slideDown(400, function(){
		});
	});
}

</script>
<style type="text/css">
body{
	font-family:arial
}

.clear {
	clear:both
}

#gallery {
	position:relative;
	height:138px
}
	#gallery a {
		float:left;
		position:absolute;
	}
	
	#gallery a img {
		border:none;
	}
	
	#gallery a.show {
		z-index:500
	}

	#gallery .caption {
		z-index:600; 
		background-color:#000; 
		color:#ffffff; 
		height:100px; 
		width:100%; 
		position:absolute;
		bottom:0;
	}

	#gallery .caption .content {
		margin:5px
	}
	
	#gallery .caption .content h3 {
		margin:0;
		padding:0;
		color:#1DCCEF;
	}
	

</style>
</head>

<body>
	<div id="wrapper">
			<div id="header">
			
				<div id="Title-bg">
					<h2>Punjab College ShujaAbad</h2>
				</div>
					<div id="gallery">

	<a href="#" class="show">
		<img src="images/labrary.jpg" alt="Flowing Rock" width="780" height="138" title="" alt="" rel="<h3>Flowing Rock</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. "/>
	</a>
	
	<a href="#">
		<img src="images/lab01_2.jpg" alt="Grass Blades" width="780" height="138" title="" alt="" rel="<h3>Grass Blades</h3>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "/>
	</a>
	<a href="#">
		<img src="images/main.jpg" alt="Grass Blades" width="780" height="138" title="" alt="" rel="<h3>Grass Blades</h3>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "/>
	</a>
	</div>
					<?php /*?><img height="138" width="780" src="images/lab01_2.jpg" alt="header-image"><?php */?>
						<?php	
							session_start();
							require_once('nav.php');	
						 ?>
		</div><!--end header-->
