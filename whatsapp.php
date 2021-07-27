<?php 

	$token ='token';
	$instance='instance';
	$message ='your message';
	
	$data = [
	          "chatId" => "xxxxx380861-162383xxx@g.us",
                'body' => $message, // Message
        ];
	$json = json_encode($data); // Encode data to JSON
	// URL for request POST /message
     $url = 'https://api.chat-api.com/'.$instance.'/message?token='.$token;
	// Make a POST request
	$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
	]);
	// Send a request
	$result = file_get_contents($url, false, $options);
	print_r($result);

?>








