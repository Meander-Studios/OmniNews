<html><head>
	<!-- VENDOR LINKS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
	<script src="vendors/jquery/mini-jquery-bgswitcher.js"></script> 

	<!-- RESOURCE LINKS -->	
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="resources/css/main.css">
	<title>OmniNews | Home</title>
	<link rel="icon" type="image/ico" href="favicon.ico">
</head>

<body>

	<?php
		include "resources/htmlextras/nav.html";
	?>

	<form>

	<input type='text' placeholder="What Are You Interested In?">
	<input type='submit' value="See News!">

	</form>
</body>
<script>
	var params = {
		images: [
			"resources/media/img/backgrounds/1.jpeg",
			"resources/media/img/backgrounds/2.jpeg",
			"resources/media/img/backgrounds/3.jpeg",
			"resources/media/img/backgrounds/4.jpeg",
			"resources/media/img/backgrounds/5.jpeg",
			"resources/media/img/backgrounds/6.jpeg",

		],
		el: 'body',
		animDuration: 500,
		slideDuration: 4000,
		/*gradient: "linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3))",*/
		vignette: false,
	};

	bgSlider(params);
</script>
</html>