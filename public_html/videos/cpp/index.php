<?php


$DS = checkOS(); // this is the Directory Separator... Windows it's \ and in Unix, Linux, Mac, Android it's /
$init = "..$DS"."..$DS"."..$DS"."php$DS"."initialize.php";
$redirectTo="..$DS"."..$DS" . "index.php";
require_once($init);
redirect_to($redirectTo);
function checkOS() {
	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') { 
		//echo "This is a server using Windows!<br>"; 
		$check_os_1 = 0; 
	} else { 
		//echo "This is a server using a POSTIX like OS!<br>"; 
		$check_os_1 = 1; 
	} 
	// double check to make sure it is not Darwin (aka Mac) last function check to see if win was in the name 
	// and Darwin has the name win... some mac users said the last function did not work for them. So the need for double checking. 
	if (DIRECTORY_SEPARATOR == '\\') { 
		//echo "This is a windows machine<br>"; 
		$check_os_2 = 0; 
	} 
	if (DIRECTORY_SEPARATOR == '/') { 
	   //echo "This is a Linux or some other POSTIX OS<br>"; // in production remove this line 
		$check_os_2 = 1; 
	} 
	$check_os_final = $check_os_1 + $check_os_2; 
	// check to see what OS you are running. Are you running Windows $check_os_final will equal 0 
	// If you are running Linux, FreeBSD, etc, etc $check_os_final will equal 2 
	// If you are running Mac $check_os_final will equal 1 or 2 depending on the version 
	if ($check_os_final >= 1) { 
		//echo "You are running a POSTIX OS<br>"; // in production remove this line 
		return '/';
	} else { 
		//echo "You are running on a Windows Machine<br>"; // in production remove this line 
		return '\\';
	} 	
}

?>
