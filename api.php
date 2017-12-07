<?php

// configuration of the Rest API
$app_id = '46e5619e';
$app_key = 'b8926fa383c0ad6326d1e7aae6cb9050';
    
    


$word_id = $_GET['word'];

$language = $_GET['lng'];
    
    
$url = "https://od-api.oxforddictionaries.com:443/api/v1/entries/$language/$word_id";
 
// Configuration of the API Headers
$headers = array("app_id:$app_id", "app_key:$app_key");


// Connection to Oxford API

$curl_handle=curl_init();

curl_setopt($curl_handle, CURLOPT_URL,$url);

curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $headers); 

 
// $query is the JSON Response

$query = curl_exec($curl_handle);

curl_close($curl_handle);


?>