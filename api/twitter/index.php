<?php
date_default_timezone_set("Asia/Kolkata");
require 'scripts/tmhOAuth.php';
require 'scripts/tmhUtilities.php';
$tmhOAuth = new tmhOAuth(array(
   'consumer_key' => 'NxbPJjrZZmHXEKoaWuaQsrs1Q',
   'consumer_secret' => 'OQnOm5JQzLbHNUTVLQ8XKdxLpiSmSmbaL3dc8gEeLWsDOd2cyA',
   'user_token' => '121427044-HcXcZQmEpecX1XKLdEC2Ygpgq76bUZRafcYYjq7W',
   'user_secret' => 'gMMCX3ty3yb2udASgj9CT5U6OdjqAk8AMFSqA2JD81TnA',
       ));
       
       $code = $tmhOAuth->request('GET', $tmhOAuth->url('1.1/search/tweets.json'), array(
   'q' => '#angularjs',
   "count" => "100",
   "lang" => "en",
   "result_type" => "all",
   "since_id" => $since_id
       ));
       header('Content-Type: application/json');
       if ($code == 200) {
   		echo $tmhOAuth->response['response'];
   }
?>