<?php
$detect = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($detect === 'en') {
    include('./includes/lang/en.php'); // Include English language file
} elseif ($detect === 'de') {
    include('./includes/lang/de.php'); // Include German language file
} else {
    include('./includes/lang/de.php'); // Default to German for unsupported languages
}
?>
