<?php
$access_token = 'qAvQComCL3LIaF2TYbhegaeJ8ZuP7I/xtCA4Rf53lBtov3ST/FSxlAGC+aJfpRYME88bhT0LjMg9R/NgZaDU6nfCaMbasJjg+N39BgIg4ZTiN5Nt0bzhEB21Kx4ICooFmyiNBEdIrbq4uUprp1qw2wdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			if($text=='สวัสดีค่ะ' || $text=='สวัสดีครับ' || $text=='สวัสดี'){
			    $ReText = 'สวัสดี!! ผมคือ BOT';
			}else if($text=='วันนี้สบายดีไหม'){
				$ReText = 'สบายดี!!! แล้วไม่ทำงานหรา';
			}else{
				$ReText = 'ไม่รู้จะตอบอะไร';
			}
			
			$messages = [
				'type' => 'text',
				'text' => $ReText
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
?>
