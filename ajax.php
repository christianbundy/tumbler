<?php
$array = array(
	"christianbundy.tumblr.com",
	"blitz3n.tumblr.com",
	"jamieryandee.com",
	"int0xication.com",
	"-sparks.tumblr.com",
	"aformofcreationisdestruction.tumblr.com",
	"fuckmenumb.tumblr.com",
	"gofuckingnuts.tumblr.com",
	"-fate-.tumblr.com",
	"crazed-kids.tumblr.com",
	"emilysteaparty.tumblr.com",
	"theslowasssloth.tumblr.com",
	"sp1ns.tumblr.com",
	"ashleylaurenhill.com",
	"h-rd.tumblr.com",
	"whoresa.tumblr.com",
	"hydr0thunder.tumblr.com",
	"0355.tumblr.com",
	"chantelroseee.tumblr.com",
	"whatafuckinfamilypicture.tumblr.com",
	);
/*
http:///
http:///
http:///
http:///
http:///
http:///
http:///
http:///
http://w0nderhill.tumblr.com/
*/

	
shuffle($array);
$random = array_rand($array);
echo 'http://' . $array[$random];
?>