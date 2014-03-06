<?php
$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, "http://livescore.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); 

$result = curl_exec($ch);
//print $result;
curl_close($ch);

preg_match ('/(<table class="league-table">.+?<\/table> ?)+/',$result, $matches);
print $matches[0];

?>
 
