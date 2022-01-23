<?php
require_once 'lib/Request.php';
$requestModel = new Request();
$ip = $requestModel->getIpAddress();
$isValidIpAddress = $requestModel->isValidIpAddress($ip);
?>
<HTML>
<HEAD>
<TITLE>Get Geo Location by the IP address</TITLE>
<link href="assets/css/style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
	<div class="txt-heading">Get Geo Location by the IP address</div>
			<?php
if ($isValidIpAddress == "") {
    echo "<div class='error'>Invalid IP address $ip</div>";
} else {
    $geoLocationData = $requestModel->getLocation($ip);
    ?>
	<div id="location">
		<div class="geo-location-detail">

			<div class="row">
				<div class="form-label">
					Country Name: <?php  echo $geoLocationData['country'];?>
				</div>
			</div>
			<div class="row">
				<div class="form-label">
					Country Code: <?php   echo $geoLocationData['country_code'];?>
				</div>
			</div>
			<div class="row">
				<div class="form-label">
					Ip Address: <?php  echo $geoLocationData['ip'];?>
				</div>
			</div>
		</div>
	</div>
<?php }?>
</BODY>
</HTML>