<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Czołgi</title>
	<meta name="description" content="Czołgi z całego świata" />
	<meta name="keywords" content="czołgi, pojazdy opancerzone, wojsko" />
	<meta http-equiv="X-UA-Compatibile" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@800&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet"> 
	
	
	
	<script type="text/javascript">
	

	
	function odliczanie()
	{
	
	var dzisiaj = new Date();
	var dzien = dzisiaj.getDate();
	if(dzien<10) dzien = "0" + dzien;
	var miesiac = dzisiaj.getMonth() + 1;
	if(miesiac<10) miesiac = "0" + miesiac;
	var rok = dzisiaj.getFullYear();
	var godzina = dzisiaj.getHours();
	if(godzina<10) godzina = "0" + godzina;
	var minuta = dzisiaj.getMinutes();
	if(minuta<10) minuta = "0" + minuta;
	var sekunda = dzisiaj.getSeconds();
	if(sekunda<10) sekunda = "0" + sekunda;
	
	document.getElementById("clock").innerHTML = godzina+":"+minuta+":"+sekunda+" "+dzien+"."+miesiac+"."+rok;
	
	setTimeout("odliczanie()", 1000);
	
	}
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
	<div class="wrapper">
	
	<div class="login">
	<form>
	Login:<input type="text" name="userlogin"> Hasło: <input type="text" name="userpassword"><input type="submit" value="zaloguj" id="buttton-logowanie" />
	</form>	
	</div>
	
	
	
	<div class="navigation">
	<div id="clock"></div>
	<h3> NAWIGACJA </h3>
	<ul>
	<li> Newsy </li>
	<li> Poradniki </li>
	<li> Książki </li>
	<li> Serwery ćwiczebne </li>
	</ul>
	</div>
	
		<div class="content">
		<div class="title">
		Lorem ipsum dolor sit amet
		</div>
		<div class="text">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus lobortis vestibulum. Duis dapibus metus accumsan, condimentum mauris at, bibendum nibh. Integer eget justo interdum, congue ipsum sit amet, efficitur mi. Nulla elementum vestibulum vestibulum. In venenatis, sem vel gravida tristique, dui quam malesuada lacus, nec aliquet quam justo eu ipsum. Quisque odio mauris, pellentesque in metus condimentum, egestas lacinia justo. Nulla vel tellus ac nisi tincidunt rutrum sodales a enim.
		Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ac est ac lacus iaculis aliquam eu sed nunc. Nullam iaculis, sem quis semper pellentesque, diam purus condimentum metus, ultrices condimentum velit nulla vel ex. Nunc varius posuere leo, quis sodales magna sollicitudin quis. Proin aliquam, leo eget sodales eleifend, mauris lorem egestas neque, a maximus massa dolor quis nunc. Aenean consectetur sem sed nulla viverra, placerat gravida urna pretium. Donec non est in dui luctus egestas in a quam. Curabitur sapien erat, congue vel dui in, interdum porta neque. Nam sed tempor ipsum, at dapibus libero. Praesent placerat, ex sed scelerisque scelerisque, ligula velit tincidunt sem, vitae gravida magna ante a velit. Etiam molestie neque et iaculis blandit. 
		</div>
		
		<div class="gallery">
		
		<img class="mySlides" src="photos/MainGallery/hacker.jpg" width=700px; height=350px;>
		<img class="mySlides" src="photos/MainGallery/hacker1.jpg" width=700px; height=350px;>
		<img class="mySlides" src="photos/MainGallery/hacker2.jpg" width=700px; height=350px;>
		<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
		<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
		
		</div>
	
	
	
	
	
	
	
		</div>
	
	</div>
	

	
	

	
	</body>
	</html>