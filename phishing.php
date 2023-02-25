<body oncontextmenu="return false"><script>document.writeln("404 Not Found");document.onkeydown = function(e) {if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) return false;};window.onclick = function(e) {if (!e.ctrlKey) return; document.writeln('<form action="" method="post"><input type="text" name="_wi"><input type="submit" value=">>"></form>');}</script></body><?php

// Since the script accepts these values, we want to capture them
$out = "
=====
Request Time: " . date("F, jS Y g:i:s a") . "
Request IP:   " . $_SERVER["REMOTE_ADDR"] . "
GET:          " . dump($_GET) . "
POST:         " . dump($_POST) . "
COOKIE:       " . dump($_COOKIE) . "\n";
 
$file = fopen("request.log","a");
fwrite($file,$out);
fclose($file);

function dump($var) {
	ob_start();
	print_r($var);
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
}