<?php 
require 'vendor/autoload.php';
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
$gi = geoip_open('GeoIP.dat', GEOIP_STANDARD);

echo geoip_country_name_by_addr($gi, "117.102.64.81");

geoip_close($gi);
 ?>