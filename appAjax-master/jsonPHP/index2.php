<?php
 
$json1= '["Nam \u0111\u1ecbnh qu\u00ea m\u00ecnh","H\u00e0 n\u1ed9i \u0111\u1ea5t kh\u00e1ch","HCM qu\u00ea ng\u01b0\u1eddi"]';

$json2= '{"name":"L\u01b0\u01a1ng H\u1ea3i Minh","age":22,"location":"Nam \u0111\u1ecbnh em \u01a1i"}';

$convert1 = json_decode($json1);

echo "<pre>";
print_r($convert1);
echo "</pre>";

$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert2);
echo "</pre>";

