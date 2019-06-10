<!doctype html>
<html lang="en">
<?php
/*
* Title: 
* Author: 
* Additional Authors: 
* Filename: 
* Description: 
* Version: 
* Date: 
* Last Modified: 
* Additional_Notes: 
* Source: 
* Additional_Sources: 
* Credits: 
* Additional Credits: 
* Location_of_the_Video: 
* Embed_YouTube: 
* Website_For_Video: 
*/

/*
Add your license here. Here is a good list of licenses, that you can use:
https://www.gnu.org/licenses/license-list.html
*/

function chos() { if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') { $chos1 = 0; } else { $chos1 = 1; } if (DIRECTORY_SEPARATOR == '\\') { $chos2 = 0; } if (DIRECTORY_SEPARATOR == '/') { $chos2 = 1; } $chosf = $chos1 + $chos2; if ($chosf >= 1) { $DS = "/"; } else { $DS = "\\"; } return $DS; }
$DS = chos();
$URL = "http".(!empty($_SERVER['HTTPS'])?"s":""). "://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
// this is the url $URL of the page
// $DS is the DIRECTORY SEPARATOR depending on the type of server

// start your php script here

?>

<head>
  <meta charset="utf-8">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="AsherSimcha">
	<meta name="viewport" content="width=device-width">
	<meta name="keyword" content="">
	<meta name="description" content="">
<!--   <link rel="stylesheet" href="css/styles.css"> -->
<style>
	body { background-color: Gainsboro; }
</style>
</head>

<body id="body" onload="onLoad()">
<!-- <script src="js/scripts.js"></script> -->
	<header>
		<nav>
			<ul>
				<li>Your menu</li>
				<li>Home</li>
				<li>What's New</li>
				<li>Friends</li>
				<li>Contact</li>
				<li>About</li>
				<li>Settings</li>
			</ul>
		</nav>
	</header>
	
	<section>
	
		<article>
			<header>
				<h2>Article title</h2>
				<p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
			</header>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		</article>
		
		<article>
			<header>
				<h2>Article title</h2>
				<p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
			</header>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		</article>
		
	</section>

	<aside>
		<h2>About section</h2>
		<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
	</aside>

	<footer>
		<p>Copyright 2009 Asher Simcha</p>
	</footer>
<script type="text/javascript">
function onLoad() {
	console.log("The page loaded at onLoad()");
}
</script>
</body>

</html>
