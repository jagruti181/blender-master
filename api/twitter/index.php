<?php
date_default_timezone_set("Asia/Kolkata");
require 'scripts/tmhOAuth.php';
require 'scripts/tmhUtilities.php';
$tmhOAuth = new tmhOAuth(array(
   'consumer_key' => 'NxbPJjrZZmHXEKoaWuaQsrs1Q',
   'consumer_secret' => 'OQnOm5JQzLbHNUTVLQ8XKdxLpiSmSmbaL3dc8gEeLWsDOd2cyA',
   'user_token' => '121427044-TltvrL0LoR4hlcikW7h4Bji3S06AKxVVWCh9rl0N',
   'user_secret' => 'rIJQL4G8YtYSkZgSfahMCb18mEjuBr7vs2MUqhfTo3gsa',
       ));
       
       $code = $tmhOAuth->request('GET', $tmhOAuth->url('1.1/search/tweets.json'), array(
   'q' => '#angularjs',
   "count" => "10",
   "lang" => "en",
   "result_type" => "all",
   "since_id" => 531683952675659776
       ));
    header('Content-Type: application/json');
   	echo $tmhOAuth->response['response'];
   
?>