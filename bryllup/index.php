<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?
$page = $_GET['action'];
$forside = "wedding5.png";
if($page == "forside" || $page == ""){
	$forside = "wedding6.png";
	$title = "Marianne & Marks Bryllup - Forside";
}else if($page == "information"){
	$title = "Marianne & Marks Bryllup - Information";
}else if($page == "oensker"){
	$title = "Marianne & Marks Bryllup - Ønsker";
}else if($page == "billeder"){
	$title = "Marianne & Marks Bryllup - Billeder";
}else if($page == "tidsplan"){
	$title = "Marianne & Marks Bryllup - Tidsplan";
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?=$title?></title>
		<script>
						function startSlide(){
							slideShow = window.setInterval(function(){slideImg(1)},5000);
							document.getElementById("playBtn").style.display = 'none'
							document.getElementById("stopBtn").style.display = ''
						}
						function endSlide(){
							window.clearInterval(slideShow)
							document.getElementById("playBtn").style.display = ''
							document.getElementById("stopBtn").style.display = 'none'
						}
						function nextImg(){
							slideImg(1);
							endSlide();
						}
						function prevImg(){
							slideImg(-1);
							endSlide();
						}
						function download(){
							window.open ('./images/original/'+currentImgSrc+'.jpg')
						}
						function setImg(obj,nr){
							currentImgSrc = obj
							currentImg = nr
							document.getElementById('bigImg').src = './images/web/'+obj
						}
						function slideImg(add){
							currentImg = currentImg+add;
							if(currentImg>imagesCount){
								currentImg = 0
							}
							if(currentImg<0){ 
								currentImg = imagesCount
							}
							var temp = document.getElementById('thumb-'+currentImg).src
							temp = new String(temp).split("/")
							currentImgSrc = temp[temp.length-1]
							document.getElementById('bigImg').src = './images/web/'+temp[temp.length-1]
						}
						</script>
		<style>
			body{
				background-image:url('bg.png');
				text-align:center;
					padding:0px;
					margin:0px;
					font-family:Trebuchet MS;
					font-size:10px;
					color:#660066;
			}
			.main{
				background-image:url('<?=$forside?>');
				background-repeat:no-repeat;
				margin-left:auto;
				margin-right:auto;
				background-position: center;
				height:1200px;
				padding:0px;
				border:solid 0px black;
				text-align:center;
				
			} 
			.menu{
			
				background-image:url('menu.png');
				height:40px;
				position:relative;
				display:block;
				
				margin-left:auto;
				margin-right:auto;
				
				top:16px;
				left:-370px;
			}
			.informationer	{width:180px;background-position:-20px -10px;}
			.oensker		{top:-24px;left:-200px;width:140px;background-position:-210px -10px;}
			.tidsplan		{top:-64px;left:-60px;width:140px;background-position:-360px -10px;}
			.billeder		{top:-64px;left:-60px;width:140px;background-position:-510px -10px;}
			.informationer:hover{background-position:-20px -60px;}
			.oensker:hover		{background-position:-210px -60px;}
			.tidsplan:hover		{background-position:-360px -60px;}
			.billeder:hover		{background-position:-510px -60px;}
			.topLink{
				text-align:center;
				width:960px;
				height:160px;
				border:solid 0px black;
				position:relative;
				top:15px;left:-0px;
				display:block;margin-left:auto;
				margin-right:auto;
				cursor:pointer;
			}
			.bow{
				
				height:436px;
				width:385px;
				position:relative; 
				display:block;
				margin-left:auto;
				margin-right:auto;
				top:-278px;
				left:342px;
				z-index:100;
			}
			.indhold{
				text-align:left; 
				width:880px;
				height:860px;
				border:solid 0px black;
				overflow:hidden;
				position:relative; 
				margin-top:-455px;
				left:-00px;
				display:block;
				margin-left:auto;
				margin-right:auto;
				z-index:6; 
				<?if($page == "forside" || $page == ""){?>
				background-image:url('mm3.png');
				<?}else{?>
				background-image:url('mm4.png');
				<?}?>
				background-repeat:no-repeat;
			
				background-position:60px -20px;
			}
			h1{
				font-size:18px;
				font-family:verdana;
				color:
			}
			h2{
				font-size:16px;
				font-family:verdana;
			}
			div{
				font-size:14px;
				
				line-height:19px;
				color:#00000;
				font-weight:;
				
			}
			a {
				color:#ffffff;
			}
			.imgBrowser{
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				user-select: none;
				overflow:auto;
				width:870px;height:245px;
			}
			.thumbs{
			padding-bottom:5px;padding-right:5px;height:75px;width:75px;
			}
			.nd{
				background-color:#972eac;
				color:#fea2fe;
				line-height:20px;
			}
			.st{
				color:#660066;
				line-height:20px;
			}
		</style> 
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24152327-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</head>
	<body>
		<div class="main">
			<div class="topLink" title="gå til forsiden" onclick="document.location.href='forside.html'"></div>
			<a class="menu informationer"href="information.html"><span style="visibility:hidden">Information</span></a>
			<a class="menu oensker" href="oensker.html"><span style="visibility:hidden">Ønsker</span></a>
			<a class="menu billeder"href="billeder.html"><span style="visibility:hidden">Billeder</span></a>
			<img class="bow" src="bow.png">
		<div>
		<div class="indhold">
			<?if($page == "forside" || $page == ""){?>
				
			<?}else if($page=="information"){?>
			<h1>Information: </h1>
			<h2>Vielsen:</h2>
				Vi bliver viet i Frederiksborg Slotskirke kl. 13.30.
				<a target="new" alt="klik her for google map" href="http://www.google.dk/maps?q=55.934888,12.299978&num=1&sll=55.932484,12.298744&sspn=0.009147,0.01929&hl=da&ie=UTF8&ll=55.934809,12.299924&spn=0.004724,0.009645&z=17">Frederiksborg Slotskirke</a>
				<br>
				<br>
			<h2>Reception:</h2>
				Vi afholder reception hos Marks forældre.
				<a target="new" alt="klik her for google map" href="http://www.google.dk/maps?f=q&source=s_q&hl=da&geocode=&q=Vejg%C3%A5rdsparken+29,+Aller%C3%B8d&aq=&sll=55.869147,11.228027&sspn=9.705218,19.753418&ie=UTF8&hq=&hnear=Vejg%C3%A5rdsparken+29,+3450+Aller%C3%B8d&z=16">Vejgårdsparken 29, 3450 Allerød</a>
				<br>
				Receptionen er åben efter vielsen og til ca. kl. 17<br>
				Brudeparret er ude og få taget billeder, og forventer at være til receptionen kl 15.00.
				<br>
				<br>
			<h2>Festen:</h2>
				Hotel Søfryd i Jyllinge ligger rammer om vores fest, med start kl. 18.<br>
				Hotellet ligger på <a target="new"  alt="klik her for google map" target="new" href="http://www.google.dk/maps?f=q&source=s_q&hl=da&geocode=&q=+S%C3%B8frydvej+8-10,+4040+Jyllinge&aq=&sll=55.863079,12.340388&sspn=0.009465,0.01929&ie=UTF8&hq=&hnear=S%C3%B8frydvej+8,+4040+Jyllinge&z=16&iwloc=r0">Søfrydvej 8-10, 4040 Jyllinge</a>
				<br>
				Brudeparret ankommer som de sidste kl. 18.
				<br><br>
				Der er desværre ikke mulighed for overnatning, da alle værelser er optaget denne dag.	
			<br>
			<br>
			<h2>Kontaktpersoner:</h2>
				<ul>
					<li>Gavekoordinator :<br>&nbsp;&nbsp;&nbsp;Jette Thuun - 4817 7108</li>
					<li>Toastmaster : <br>&nbsp;&nbsp;&nbsp;Finn Hoffmann - 4580 1030</li>
					<li>Forlover : <br>&nbsp;&nbsp;&nbsp;Martin Hoffmann - 4045 1727</li>
					<li>Brudepige : <br>&nbsp;&nbsp;&nbsp;Gitte Jensen - 6110 2323</li>
				</ul>
			<?}else if($page=="oensker"){
				?>
					<h1>Ønsker</h1>
					Her er vores ønsker. Marks Mor(Jette) er gavekoordinator. Der er mere info på <a href="/bryllup/information.html">info</a> siden. 
					<br><br>
				<?
				$wishes = array(
					array("Kaffemaskine \"Moccamaster KB741 Thermo\" i sort (nederst i venstre side)","http://www.moccamaster.com/dk/")	
					,array("Kitchen aid mixer i chokolade farve (har set farven i butikker)","")	
					,array("Kitchen aid rivejern til mixer","")	
					,array("Rosendahl salatskål","http://www.rosendahl.dk/Produkter.aspx?ProductID=25455&VariantID=&GroupID=SF_GC")	
					,array("Grand Gru ovenfast fad firkantet lille","http://www.rosendahl.dk/Produkter.aspx?ProductID=25601&VariantID=&GroupID=SF_GC")	
					,array("Grand Gru ovenfast fad firkantet mellem","http://www.rosendahl.dk/Produkter.aspx?ProductID=25602&VariantID=&GroupID=SF_GC")	
					,array("Grand gru ovenfast fad firkantet stort","http://www.rosendahl.dk/Produkter.aspx?ProductID=25603&VariantID=&GroupID=SF_GC")	
					,array("Grand Gru termokande (den høje i sort)","http://www.rosendahl.dk/Produkter.aspx?ProductID=25900&VariantID=&GroupID=TK_GC")	
					,array("Brødkurv (ikke en pose)","")	
					,array("OBH el-kedel børstet stål nr. 6420","http://www.obhnordica.dk/Default.aspx?ID=294&ProductID=PROD280")	
					,array("OBH Nordica Sharp X-treme Knivsliber","http://www.obhnordica.dk/Default.aspx?ID=294&ProductID=PROD531")	
					,array("OBH Nordica Supreme steel sauterpande med låg","http://www.obhnordica.dk/Default.aspx?ID=773&ProductID=PROD469")	
					,array("Håndklæder 4 stk. 60cm x 140cm ( i lilla, råhvid og babyblå). Må ikke fnuldre","")	
					,array("Håndklæder 4 stk. 50cm x 100cm ( i lilla, råhvid og babyblå). Må ikke fnuldre","")	
					,array("Sengetøj 200cm x 140cm ( hvidt, lilla, Lysegrå) ensfarvet ","")	
					,array("Strygebræt (ikke for smalt)","")	
					,array("Strygejern Braun Texstyle 7","http://www.braun.com/dk/household/steam-irons/texstyle-7.html")	
					,array("Tilskud til en ny seng","")	
					,array("Gavekort til Tæppeland","http://www.taeppeland.dk/da.aspx")	
					,array("Postkasse Allux model 3000 + matchende stativ, kan fåes i bauhaus","")	
					,array("Støvsuger Bosch BSGL 52235, fåes i Elgiganten","http://www.bosch-home.dk/produkter/st%C3%B8vsugere/st%C3%B8vsugere/BSGL52235.html?source=browse")	
					,array("Håndstøvsuger Electrolux, fåes i Elgiganten","")	
					,array("OBH Nordica supreme nonstick pande 28 cm","http://www.obhnordica.dk/Default.aspx?ID=854&ProductID=PROD622")	
					,array("Margrethe skåle i lilla, alle størrelser","")	
					);
					$i = 0;
					foreach ($wishes as $value) {
						?>
						<div style="height:26px;line-height:26px;<?=($i==1?"background-color:#972eac;color:#fea2fe":"")?>">
							<div style="float:left;width:23px;">
							<?
							if($value[1]!=""){
								?>
								<a href="<?=$value[1]?>">
									<img src="images/link.png" style="border-width:0px;margin-top:4px;padding-top:1px;padding-left:3px;padding-right:3px;">
								</a>
								<?
							}else{
								echo "&nbsp;";
							}
							?>
							</div>
							
							<?=$value[0]?>
						</div>
						<?
						$i = ($i==0?1:0);
						
					}
				?>
		

					</tr>
				</table>

				<?
			}else if($page=="billeder"){
				$dirname = "./images/web/";
				$dirname2 = "./images/thumb/";
				$images = scandir($dirname);
				$ignore = Array(".", "..");
				$firstImg = true;
				$tempCount = 0;
				foreach($images as $curimg){
					if(!in_array($curimg, $ignore)) {
						$filename = $dirname.$curimg;
						$thumbname = $dirname2.$curimg;
						if($firstImg){
							?>
							<table style="float:left;border:solid 0px black" border=0>
								<tr>
									<td style="height:607px;width:807px;" valign="middle" align="center">
									<img id="bigImg" style="margin:0px;padding:0px;border:solid 1px #cdcdcd;" src="<?=$filename?>">
									</td>
									<td style="width:58px;text-align:right;">
									<br><br><br><br><br>
									<img onclick="download()" alt="download original" src="1pic.png" style="position:relative;cursor:pointer;">
									<br><br><br>
									<img id="playBtn" alt="start slideshow" onclick="startSlide()" src="1play.png" style="cursor:pointer;position:relative;">
									<img id="stopBtn" alt="stop slideshow" onclick="endSlide()" style="cursor:pointer;display:none;position:relative;" src="1pause.png">
									<br><br><br>
										<img id="next" alt="forrige billede" onclick="nextImg()" src="1next.png" style="cursor:pointer;position:relative;">
									<img id="prev" alt="næste billede" onclick="prevImg()" style="cursor:pointer;position:relative;" src="1prev.png">
									</td>
								</tr>
							  </table>
								<script>
							currentImgSrc = '<?=$curimg?>';
								</script>
								<div class="imgBrowser">
							<?
							$firstImg = false;
						}
						?>
						<table style="float:left;border:solid 0px #cdcdcd;margin:0px;padding:0px;" cellpadding="0" cellspacing="0">
						<tr>
							<td style="height:82px;width:82px;" valign="middle" align="center">
							<img onclick="setImg('<?=$curimg?>',<?=$tempCount?>)" id="thumb-<?=$tempCount?>" style="cursor:pointer;margin:0px;padding:0px;border:solid 1px #cdcdcd;" src="<?=$thumbname?>">
							</td>
						</tr>
					  </table>
					  <?
						$tempCount++;
					}
				}
				if($tempCount == 0){
				?>
				Der er ingen billeder endnu.
				<?
				}else{
				?>
						<script>
						var imagesCount = <?=$tempCount?>-1;
						var currentImg = 0
						</script>
						
				</div>
				<?
				}
			}
			?>
		</div>
	</body>
</html>