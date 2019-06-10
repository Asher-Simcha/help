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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding"><meta charset="utf-8">
<title></title>
<!-- <script src="js/include.js"></script> -->
<script type="text/javascript"></script>
<style>
body { background-color: Gainsboro; }
</style>
</head>
<body id="body" onload="onLoad()">

<script type="text/javascript">
function onLoad() {
    console.log("The page loaded at onLoad()");
}
</script>
</body>
</html>
