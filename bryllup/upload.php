<?php 
session_start();
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
if(isSet($myusername)&& isSet($mypassword)){
	if($myusername=="mark" && $mypassword=="krammy"){
		$_SESSION['login'] = true;
		$_SESSION['user'] = "Mark";
	}
	if($myusername=="marianne" && $mypassword=="thuun"){
		$_SESSION['login'] = true;
		$_SESSION['user'] = "marianne";
	}
	if($myusername=="dan" && $mypassword=="thuun"){
		$_SESSION['login'] = true;
		$_SESSION['user'] = "Dan";
	}
	if($myusername=="martin" && $mypassword=="thuun"){
		$_SESSION['login'] = true;
		$_SESSION['user'] = "Martin";
	}
	if($myusername=="bruger" && $mypassword=="thuun"){
		$_SESSION['login'] = true;
		$_SESSION['user'] = "Bruger";
	}
}
if(isSet($_SESSION['login'])){
	if($_SESSION['login']){

error_reporting(0);
$change="";
$abc="";
define ("MAX_SIZE","400");
function getExtension($str) {
	$i = strrpos($str,".");
	if (!$i) { return ""; }
	$l = strlen($str) - $i;
	$ext = substr($str,$i+1,$l);
	return $ext;
}
$errors=0;
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name'];
 	//hvis der er en fil
	if ($image){
 		$filename = stripslashes($_FILES['file']['name']);
 		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		//tjek om jpg ellers fejl
		if (($extension != "jpg") && ($extension != "jpeg")){
			$change='<div class="msgdiv">Unknown Image extension </div> ';
 			$errors=1;
 		}else{
			//tjek størrelse
			$size=filesize($_FILES['file']['tmp_name']);
			$uploadedfile = $_FILES['file']['tmp_name'];
			$dirname = "./images/original/";
			$images = scandir($dirname);
			$tempCountImg = 10000-count($images);
			$name = $tempCountImg."-".uniqid()."-".$_SESSION['user'] ;

			move_uploaded_file($uploadedfile, "./images/original/".$name.".jpg" );
			$src = imagecreatefromjpeg("./images/original/".$name.".jpg" );
			list($width,$height)=getimagesize("./images/original/".$name.".jpg" );
			//web billede
			$newMaxWidth = 800;
			$newMaxHeight = 600;
			$newwidth=$newMaxWidth;
			$newheight=($height/$width)*$newwidth;
			if($newheight>$newMaxHeight){
				$newheight = $newMaxHeight;
				$newwidth=($width/$height)*$newheight;
			}
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
			$filename = "images/web/".$name  ;
			imagejpeg($tmp,$filename,100);
			imagedestroy($tmp);
			//thumbnail
			$newMaxWidth1 = 75;
			$newMaxHeight1 = 75;
			$newwidth1=$newMaxWidth1;
			$newheight1=($height/$width)*$newwidth1;
			if($newheight1>$newMaxHeight1){
				$newheight1 = $newMaxHeight1;
				$newwidth1=($width/$height)*$newheight1;
			}
			$tmp1=imagecreatetruecolor($newwidth1,$newheight1);
			imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);
			$filename1 = "images/thumb/".$name ;
			imagejpeg($tmp1,$filename1,100);
			imagedestroy($tmp1);
			
			imagedestroy($src);
			
		}
	}
}

//If no errors registred, print the success message
 if(isset($_POST['Submit']) && !$errors){
 
 	$change=' <div class="msgdiv">Image Uploaded Successfully!</div>';
 }
 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
		<meta content="en-us" http-equiv="Content-Language">
		<title>test</title>
	</head>
	<body>
		<div >
			<?php echo $change; ?>  
		</div>
		<form method="post" action="" enctype="multipart/form-data" name="form1">
			<input size="50" name="file" type="file"/>
			<input type="submit" value="Upload" name="Submit"/>
		</form>
		<?if($change != ""){?>
		  <table style="float:left;border:solid 1px black">
			<tr>
				<td style="height:600px;width:800px;" valign="middle" align="center">
				<img style="border:solid 1px #cdcdcd;" src="<?=$filename?>">
				</td>
			</tr>
		  </table>
		  <table style="float:left;border:solid 1px black">
			<tr>
				<td style="height:75px;width:75px;" valign="middle" align="center">
				<img style="border:solid 1px #cdcdcd;" src="<?=$filename1?>">
				</td>
			</tr>
		  </table>
		<?}?>
	</body>
</html>
<?
}
}else{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
		<meta content="en-us" http-equiv="Content-Language">
		<title>test</title>
	</head>
	<body>
		<form method="post" action="" name="form1">
			<input type="text" name="username">
			<input type="text" name="password">
			<input type="submit" value="Upload" name="Submit"/>
		</form>

	</body>
</html>
<?
}

?>
