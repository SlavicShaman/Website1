<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Strona główna</title>
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
	
	<div id="logo">Lorem ipsum </div>
	
	
	<div class="mainmenu">
		<div class="login">
		<form>
	
		Login: <input type="text" name="userlogin"> Hasło: <input type="text" name="userpassword"><input type="submit" value="zaloguj" id="buttton-logowanie" />
		
		</form>
			
		</div>
			<div id="clock"></div>		
			
			<div class="nawigacja">
			<ul class="menulist">
			<li><a href="gallery.php" class="navlink"> Newsy </a></li>
			<li><a href="gallery.php" class="navlink"> Poradniki  </a></li>
			<li><a href="gallery.php" class="navlink"> Książki  </a></li>
			<li><a href="gallery.php" class="navlink"> Serwery ćwiczebne </a></li>
			<li><a href="gallery.php" class="navlink">Galeria</a> </li>
			</ul>
			</div>

		

			
				
		</div>




	<div class="container">
		<div class="content">
		<div class="title">
		Lorem ipsum dolor sit amet
		</div>
		<div class="text">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus lobortis vestibulum. Duis dapibus metus accumsan, condimentum mauris at, bibendum nibh. Integer eget justo interdum, congue ipsum sit amet, efficitur mi. Nulla elementum vestibulum vestibulum. In venenatis, sem vel gravida tristique, dui quam malesuada lacus, nec aliquet quam justo eu ipsum. Quisque odio mauris, pellentesque in metus condimentum, egestas lacinia justo. Nulla vel tellus ac nisi tincidunt rutrum sodales a enim.
		Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris ac est ac lacus iaculis aliquam eu sed nunc. Nullam iaculis, sem quis semper pellentesque, diam purus condimentum metus, ultrices condimentum velit nulla vel ex. Nunc varius posuere leo, quis sodales magna sollicitudin quis. Proin aliquam, leo eget sodales eleifend, mauris lorem egestas neque, a maximus massa dolor quis nunc. Aenean consectetur sem sed nulla viverra, placerat gravida urna pretium. Donec non est in dui luctus egestas in a quam. Curabitur sapien erat, congue vel dui in, interdum porta neque. Nam sed tempor ipsum, at dapibus libero. Praesent placerat, ex sed scelerisque scelerisque, ligula velit tincidunt sem, vitae gravida magna ante a velit. Etiam molestie neque et iaculis blandit. 
		</div>
		
		<div class="title">
		Etiam in justo risus
		</div>
		
		<div class="text">
		Etiam in justo risus. Suspendisse eu tempor dui, sit amet gravida lacus. Nam eu quam sed ipsum semper scelerisque quis ac ante. Nulla ac orci at turpis semper placerat. In vitae molestie mi. Cras enim enim, cursus ut pharetra ac, tincidunt vel enim. Mauris ullamcorper, leo ac tristique iaculis, massa augue scelerisque mauris, vitae hendrerit libero est vitae erat. Praesent ut felis sagittis, pharetra ex non, imperdiet lorem. Praesent tempor consectetur lectus, eu accumsan sem. In est nisl, luctus ut metus eu, faucibus placerat lacus. In ac nibh dolor. Vestibulum in neque est. Quisque eget purus nisl. Nullam vel cursus diam, feugiat ornare neque. Duis tincidunt sit amet odio ac dignissim. Nulla nunc nibh, suscipit sit amet tincidunt interdum, sodales non felis.
		</div>

		</div>
	
	</div>
	

	
	

	</div>
	</body>
	</html>