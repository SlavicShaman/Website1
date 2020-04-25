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
	var miesiac = dzisiaj.getMonth() + 1;
	var rok = dzisiaj.getFullYear();
	var godzina = dzisiaj.getHours();
	if(godzina<10) godzina = "0" + godzina;
	var minuta = dzisiaj.getMinutes();
	if(minuta<10) minuta = "0" + minuta;
	var sekunda = dzisiaj.getSeconds();
	if(sekunda<10) sekunda = "0" + sekunda;
	
	document.getElementById("zegar").innerHTML = godzina+":"+minuta+":"+sekunda+" "+dzien+"."+miesiac+"."+rok;
	
	setTimeout("odliczanie()", 1000);
	
	}
	</script>
	<script>
	
	var numer = Math.floor(Math.random()*5)+1;
	function zmienslajd()
	{
	
	numer++;
	if(numer>5) numer = 1;
	var plik = "<img src=\"slajdy/slajd" + numer + ".jpeg\" height=\"250\" width=\"380\" />";
	
	document.getElementById("right1").innerHTML = plik;
	
	setTimeout("zmienslajd()", 5000);
	
	}
	
	</script> 
	
	</head>

<body onload = "odliczanie(); zmienslajd();">
<div id="container">

	<div class="nav">
	<h3> Nawigacja </h3>
	
	<div class="searchbox">
	<form action="usersearch.php" method="post">
	<input type="text" class="input" placeholder="wyszukiwanie" name="searchquery">
	</form>
	</div>
	
	<ul>
	<li> <a href="czolgi-Iws.php" class="navlink"> Czołgi 1917</a> </li>
	<li> <a href="czolgi-miedzywojnia.php" class="navlink"> Czołgi 1918-1939 </a> </li>
	<li> <a href="czolgi1939_45.php" class="navlink"> Czołgi 1939-1945 </a> </li>
	</ul>
	Czołgi nowoczesne
	<ul>
	<li> <a href="czolgi1gen.php" class="navlink"> I generacja  </a> </li>
	<li> <a href="czolgi2gen.php" class="navlink"> II generacja </a> </li>
	<li> <a href="czolgi3gen.php" class="navlink"> III generacja </a> </li>
	<li> <a href="czolgi4gen.php" class="navlink"> IV generacja </a> </li>
	</ul>
	</div>

	<div id="logowanie">
	<form action="userlogged.php" method="get">
	Login:&#32 <input type="text" id="log" name="userlogin" />	Hasło:&#32 <input type="text" id="pass" name="userpassword" />	<input type="submit" value="zaloguj" id="blogowanie" />
	</form>
	</div>
	
	
	<div id="zegar"></div>
		

	<div class="full_text">
		<h1 class="naglowek"> Czym jest czołg? </h1> </br>
		
		<div class="left">
		<p> Czołg – gąsienicowy wóz bojowy, przeznaczony do walki z siłami przeciwnika na krótkich i średnich dystansach za pomocą prowadzenia ognia bezpośredniego. Ciężki pancerz i duża mobilność zapewniają czołgom przetrwanie na polu bitwy, a napęd gąsienicowy pozwala na przemieszczanie się z dużą prędkością w trudnym terenie. Czołg jest zasadniczym środkiem prowadzenia walki lądowej, zwłaszcza natarcia. Większość współczesnych czołgów jest uzbrojonych w pojedynczą armatę czołgową, umieszczoną w obrotowej wieży oraz w jeden lub więcej karabinów maszynowych. Korpus czołgu wykonany jest z pancernych płyt o zróżnicowanej grubości. Pierwsze czołgi nie posiadały wieży, a ich uzbrojenie artyleryjskie było umieszczone w sponsonach, pierwszym czołgiem o klasycznej i używanej obecnie konstrukcji (obrotowa wieża na kadłubie) był francuski Renault FT.</p>
		</div>
		
		<div id="right1"></div>
		
		<div class="txtcenter">
		<p class="lorem"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sapien lectus, pellentesque vel ipsum in, tempus tincidunt urna. Nam urna diam, viverra ac dui sed, convallis dignissim quam. Duis consectetur nisi at accumsan accumsan. Sed nec justo tincidunt elit pharetra fringilla. Integer id euismod ex. Proin bibendum, enim et dictum finibus, mauris sapien viverra ante, at pulvinar elit magna nec enim. In hac habitasse platea dictumst. Suspendisse luctus enim a arcu laoreet, et malesuada diam finibus. Quisque commodo sem quis lorem consectetur ornare. Donec quis dolor in dolor semper venenatis eget nec eros. Praesent maximus fringilla finibus. Duis aliquet velit sit amet quam varius feugiat. Quisque ac ex sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent tempor euismod maximus. Vivamus condimentum quam vel dolor faucibus, in rutrum felis mollis.Nunc libero urna, euismod eget aliquet ac, eleifend eu mi. Cras bibendum eget nunc nec convallis. Nam imperdiet erat ut mi suscipit, sit amet aliquet tortor iaculis. Cras aliquam tincidunt sem, efficitur vestibulum orci tempus vel. Fusce consequat euismod purus, et molestie ante vehicula quis. Quisque tristique sit amet metus scelerisque porta. Aliquam vitae auctor nibh, sed interdum risus. Donec tempus erat vitae nisi accumsan, quis imperdiet lorem gravida. Morbi pulvinar, odio a pellentesque viverra, enim elit mattis urna, at malesuada sapien dui non magna. Aliquam a ligula pellentesque, viverra odio quis, efficitur felis. Quisque id neque laoreet, volutpat lectus sit amet, pharetra ipsum.Morbi at erat sed dui aliquet luctus hendrerit non ex. Nullam sit amet maximus odio, eget condimentum mauris. Phasellus augue justo, pellentesque non sodales vel, pulvinar ac nisl. Fusce at justo nec massa consectetur iaculis vel vel nunc. In maximus nisi id lectus fermentum feugiat. Sed erat elit, lobortis at lorem ac, fringilla placerat velit. Aliquam cursus metus ante. Nam lacus arcu, mattis ut ligula non, volutpat rutrum metus. Nullam sollicitudin viverra ex nec gravida. Proin bibendum lacus nisi, vel scelerisque nulla tristique non. Vestibulum ullamcorper ultrices tortor, malesuada cursus neque scelerisque a.Phasellus quis suscipit ipsum. Vivamus finibus ipsum neque, eget finibus diam eleifend at. Sed convallis tellus sit amet neque pretium convallis. Nam eget aliquet sem. Nulla laoreet nisl eget tortor blandit, sit amet fermentum dui iaculis. Mauris id enim quis justo facilisis elementum in ac ligula. Etiam placerat porta felis, eget aliquet nibh facilisis facilisis. Maecenas ligula sapien, maximus at scelerisque eget, volutpat in leo.Curabitur pretium nisl id justo ullamcorper, vel bibendum felis aliquet. Donec laoreet neque eu mi tincidunt, quis pretium augue commodo. Duis massa velit, scelerisque et nulla venenatis, molestie malesuada quam. Donec laoreet ut leo a hendrerit. Integer feugiat gravida suscipit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam viverra facilisis lorem sit amet consequat. Nullam vel egestas lacus, eget rutrum ex. Nulla facilisi. Mauris non felis enim. Maecenas ac est mollis, ullamcorper diam tincidunt, commodo nibh. Curabitur vitae ultrices dui, et bibendum augue. Praesent sit amet purus quam. Suspendisse dapibus justo ut consectetur ultrices. Mauris dapibus, ipsum eu gravida lobortis, sapien dolor pretium leo, feugiat auctor erat lacus id mi. Ut nec elit facilisis, commodo neque at, cursus sapien.
		</p>
		</div>
		<div id="stopka">This website was created by Piotr Grzadziela 2020 &copy <i class="demo-icon icon-mail"></i> grzadzielapiotr@gmail.com </div>
	</div>
	

</div>


</body>
</html>

         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         


											
												
															
	

  
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         




																									
																														
																															
																													
																												
																																
																																		
			 
			 
			 
			 
			 
			 
			 
																																			 
			 
			 
			 
			 
			 
			 
			 
			 
			 