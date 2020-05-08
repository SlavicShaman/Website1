<html>
<head>
<head>
	<meta charset="utf-8" />
	<title>Galeria</title>
	<meta name="description" content="Czołgi z całego świata" />
	<meta name="keywords" content="czołgi, pojazdy opancerzone, wojsko" />
	<meta http-equiv="X-UA-Compatibile" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@800&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet"> 
	
	<script src="js/clock">
	</script>
	
	<script>
	

	
	
		var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
	showDivs(slideIndex += n);
	}

	function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
	if (n > x.length) {slideIndex = 1}
	if (n < 1) {slideIndex = x.length}
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	}
	x[slideIndex-1].style.display = "block";  
	}
	
	
	
	</script> 
</head>
<body onload="odliczanie()">


<div id="clock"></div>

<div class="gallery">
		
		<img class="mySlides" src="photos/MainGallery/hacker.jpg" width=700px; height=350px;>
		<img class="mySlides" src="photos/MainGallery/hacker1.jpg" width=700px; height=350px;>
		<img class="mySlides" src="photos/MainGallery/hacker2.jpg" width=700px; height=350px;>
		<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
		<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
		
		</div>

</body>
</html>