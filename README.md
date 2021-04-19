# chat-api-whatsapp-php

$url = 'https://api.chat-api.com/instance'.$instanceId.'/messages?token='.$token;
$result = file_get_contents($url); // Send a request
$data = json_decode($result, 1); // Parse JSON
foreach($data['messages'] as $message){ // Echo every message
    echo "Sender:".$message['author']."<br>";
    echo "Message: ".$message['body']."<br>";
}
