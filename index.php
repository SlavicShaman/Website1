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
	
	<div id="logo">Minimalist </div>
	
	
	<div class="mainmenu">
		<div class="login">
		<form>
	
		Login: <input type="text" name="userlogin"> Hasło: <input type="text" name="userpassword"><input type="submit" value="zaloguj" id="buttton-logowanie" />
		
		</form>
			
		</div>
			<div id="clock"></div>		
			
			<div class="nawigacja">
			<ul class="menulist">
			<li><a href="gallery.php" class="navlink" target="_blank"> Newsy </a></li>
			<li><a href="gallery.php" class="navlink" target="_blank"> Poradniki  </a></li>
			<li><a href="gallery.php" class="navlink" target="_blank"> Książki  </a></li>
			<li><a href="gallery.php" class="navlink" target="_blank"> Ćwiczenia </a></li>
			<li><a href="gallery.php" class="navlink" target="_blank">Galeria</a> </li>
			</ul>
			</div>
			
			<div class="media">
				<i class="icon-mail" class="media"></i><br>
				<a href="https://www.youtube.com/watch?v=b3jtkv-GrVw" class="media"><i class="demo-icon icon-facebook-squared"></a></i><br>
				<a href="https://github.com/SlavicShaman" class="media"><i class="demo-icon icon-github-squared"></a></i>
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
		
		
		<div class="text">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac finibus massa, nec ullamcorper magna. Nunc vel gravida lacus, ac porta turpis. Nunc suscipit, felis at pulvinar ultrices, massa leo porta elit, quis blandit urna libero suscipit urna. Nunc bibendum nec elit ultricies consequat. Suspendisse potenti. Proin in elit tincidunt, tristique nulla vel, lacinia elit. Sed at tortor non ante interdum finibus blandit non justo. Proin aliquam vitae enim a viverra. Ut et iaculis risus. Nam ut aliquet turpis, nec scelerisque purus.
		</div>
		
		<div class="text">
		Cras nec elementum odio. Nam interdum dignissim convallis. Phasellus tincidunt lorem vitae nunc iaculis, sed pharetra nisl varius. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed pretium fermentum justo, quis varius diam consequat vitae. In elementum feugiat mauris, a tempus dui iaculis sed. Cras faucibus mattis erat eu aliquet. In id tellus ac nulla viverra ornare. Pellentesque vel ligula aliquam, porta arcu eget, efficitur turpis. Sed eget dolor finibus, condimentum velit non, luctus libero. Donec scelerisque dolor orci, nec placerat metus luctus eget. Pellentesque sagittis risus ac porttitor accumsan. Vivamus vestibulum metus eu commodo vestibulum. Donec porta purus enim, ut auctor tortor porta eget. Nunc dignissim luctus tortor, nec euismod nisl pretium ut.
		</div>
		
		<div class="title">
		Aenean maximus faucibus erat
		</div>

		<div class="text">
		Proin aliquam laoreet metus nec vulputate. Aliquam eu dolor nec arcu gravida tristique quis at urna. Aliquam ultricies enim in tellus faucibus, at commodo arcu pharetra. Curabitur sed ornare justo. Aenean maximus faucibus erat, vitae maximus mauris. Fusce congue aliquam condimentum. Nullam vitae ultricies velit, non ultrices massa. Ut vitae lobortis lacus. Morbi tristique nunc consequat mi euismod, eget sodales quam placerat. Sed ut ante laoreet, ultrices mauris in, sagittis turpis. Suspendisse dapibus elit ut porttitor tempor. Vestibulum sodales pretium nunc at commodo. Donec semper auctor metus, vel malesuada tortor tempus ac. Donec viverra, ipsum in semper molestie, eros metus tristique massa, interdum tincidunt nisl sapien id urna.
		</div>

		<div class="text">
		Integer scelerisque elit non ipsum tristique, sed maximus justo euismod. Vestibulum vestibulum, neque id hendrerit dictum, lectus enim semper odio, id sodales mauris nulla et quam. Ut a odio commodo, imperdiet urna et, vestibulum nulla. Nulla dapibus, tortor eu luctus iaculis, dolor ex ultricies nunc, non malesuada tellus diam quis urna. Nulla aliquet tempor ligula, at euismod ante dapibus non. Phasellus porta tellus risus, in pretium eros condimentum sit amet. Aliquam at tortor posuere, vulputate felis tincidunt, convallis est. Cras varius vulputate eros. Morbi at felis eget augue eleifend pellentesque at sit amet ipsum. Vestibulum accumsan, dolor eu hendrerit dignissim, mi enim pharetra nunc, at egestas lacus erat quis enim. Sed sem leo, blandit id dapibus in, pulvinar et dolor. Fusce pharetra convallis mauris nec eleifend.
		</div>

		<div class="text">
		Praesent massa mi, lobortis id hendrerit id, iaculis vel orci. Pellentesque elementum libero at purus aliquam, eu rhoncus augue blandit. Proin lacinia tellus id justo cursus euismod. Sed tincidunt, quam quis sagittis volutpat, ligula dui rutrum dolor, ac euismod turpis mauris ac metus. Pellentesque sagittis euismod leo a imperdiet. Pellentesque congue, sem sed sollicitudin porta, mi leo tempus neque, eu accumsan orci nulla et leo. Vivamus justo justo, scelerisque ac pellentesque eget, rutrum et purus. In metus tortor, placerat ac nibh a, mattis sodales sapien. Nam vitae vulputate tellus, eget efficitur nulla. Integer egestas dui quis ipsum laoreet, a aliquam diam commodo. Vivamus porta ut sem eget tincidunt. Nulla facilisi.
		</div>
	
	</div>
	

	
	
		<footer>Website created by Piotr Grządziela &copy 2020</footer>
	</div>
	</body>
	</html>