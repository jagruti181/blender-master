<?php

$access_token = "43118528.6e367f9.ede6ba4052b84d0a97504b7c511790f4";
if (1) {
  
   $max_id = 0; 
   $maxid = "&min_id=$max_id";
   
} 
//echo "https://api.instagram.com/v1/tags/GoodDeedMarathon/media/recent/?access_token=$access_token$maxid";

header('Content-Type: application/json');
$data = getCurldata("https://api.instagram.com/v1/tags/GoodDeedMarathon/media/recent/?access_token=$access_token$maxid");
print_r($data);


function getCurldata($url) {
   $ch = curl_init();

   curl_setopt($ch, CURLOPT_HEADER, 0);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
   curl_setopt($ch, CURLOPT_URL, $url);

   $data = curl_exec($ch);
   curl_close($ch);

   return $data;
}