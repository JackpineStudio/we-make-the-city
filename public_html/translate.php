<?PHP
// find translated page if it exists
$translated = NULL;
$filename = $_SERVER['PHP_SELF'];

$pos = strpos($filename, "-en.php");
if ($pos !== false) { 
	$filename = str_replace("-en.php", "-fr.php", $filename);
	$translate_msg = "Fr";
	if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filename)) {
  		$translated = basename ($filename);
	} else {
		$translated = basename ("index-fr.php");
	}

} else {
	$pos = strpos($filename, "-fr.php");
	if ($pos !== false) { 
		$filename = str_replace("-fr.php", "-en.php", $filename);
		$translate_msg = "En";
		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $filename)) {
  			$translated = basename ($filename);
		} else {
			$translated = basename ("index-en.php");
		}
	}
}

if (!is_null($translated)) {
	echo "<a href='$translated' class='nav'>$translate_msg</a>";
}
?>