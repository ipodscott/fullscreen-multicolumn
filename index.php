<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Site Title</title>
  <meta name="description" content="Site Description">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
	<div class="upper">
		<div onclick="scrollDown('block-one')" class="upper-container">
			<div class="overlay"><h2>Title One</h2></div>
		</div>
		<div onclick="scrollDown('block-two')" class="upper-container">
			<div class="overlay"><h2>Title Two</h2></div>
		</div>
		<div onclick="scrollDown('block-three')" class="upper-container">
			<div class="overlay"><h2>Title Three</h2></div>
		</div>
		<div onclick="scrollDown('block-four')" class="upper-container">
			<div class="overlay"><h2>Title Four</h2></div>
		</div>
	</div>
	
	<div id="block-one" class="lower">
		

		<div>
			<div class="back-to-top"><svg onclick="scrollUp('block-one')" viewBox="0 0 24 24">
<polygon points="20.3,17.9 22.1,16.1 12.1,6.1 2.1,16.1 3.9,17.9 12.1,9.7"/>
</svg></div>
		<div>Block One</div>
		</div>
	</div>
		
	<div id="block-two" class="lower">
		<div>
				<div class="back-to-top"><svg onclick="scrollUp('block-one')" viewBox="0 0 24 24">
<polygon points="20.3,17.9 22.1,16.1 12.1,6.1 2.1,16.1 3.9,17.9 12.1,9.7"/>
</svg></div>
		<div>Block Two</div>
		</div>
	</div>
	
	<div id="block-three" class="lower">
		<div>
				<div class="back-to-top"><svg onclick="scrollUp('block-one')" viewBox="0 0 24 24">
<polygon points="20.3,17.9 22.1,16.1 12.1,6.1 2.1,16.1 3.9,17.9 12.1,9.7"/>
</svg></div>
		<div>Block Three</div>
		
		</div>
	</div>
	
	<div id="block-four" class="lower">
		<div>
				<div class="back-to-top"><svg onclick="scrollUp('block-one')" viewBox="0 0 24 24">
<polygon points="20.3,17.9 22.1,16.1 12.1,6.1 2.1,16.1 3.9,17.9 12.1,9.7"/>
</svg></div>
		<div>Block Four</div>
		
		</div>
	</div>
	
	
  <script src="js/scripts.js"></script>
</body>
</html>