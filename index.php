<?php
$arr=json_encode(array(
	"phone"=>"9195XXXXXXXX",  // your phone number
	"body"=>"Hello friend message for testing"
));

$url="https://api.chat-api.com/instance255955/message?token=ciuko9gnwlpyxtesa";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
curl_setopt($ch,CURLOPT_HTTPHEADER,array(
	'Content-type:application/json',
	'Content-length:'.strlen($arr)
));
$result=curl_exec($ch);
curl_close($ch);
echo $result;
?>