<?php
$id = $_GET["id"];
$file = "trial" . $id . ".mp4";

if (file_exists($file)) {
readfile('https://mbshealthtech.github.io/lol.txt');
header('Expires: 0');
ob_clean();
flush();
readfile($file);
exit;
}
?>
