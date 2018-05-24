<?php 

$url = 'https://hooks.slack.com/services/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';

$data = array('text'=>"<h1>Hagrid</h1>");                                                                    
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);

var_dump($result);