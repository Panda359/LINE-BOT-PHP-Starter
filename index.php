<?php
$access_token = 'wyNwDWmwcKmIUbQG5FkjglxrQiOa75M5LKyCbUWgeBSt7dT3UWkV7FHgdT2mjQkBNJk/8ER9a5jO2hydIZJwSE5q0j/veSV3UU89JAP0hEXiSiPo+1kittDzOTiA4Y254IuTo4t6d/WFtWmh3EGD+QdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	
	$a[0]="member1";
	$a[1]="member2";
	$a[2]="member3";
	$a[3]="member4";
	$a[4]="member5";
	$a[5]="member6";
	
	
	$b[0]="vip1";
	$b[1]="vip2";
	$b[2]="vip3";
	$b[3]="vip4";
	$b[4]="vip5";
	$b[5]="vip6";
	
	
	
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
	
		
		
		
		
			if ($event['type'] == 'message' && $event['message']['type'] == 'text' && substr( $event['message']['text'], 0, 8 ) === "chicken:")
			{
			
				
			if ($event['type'] == 'message' && $event['message']['type'] == 'text' && substr( $event['message']['text'], 9, 10 ) === "all member")
		{
		
	//	$random_keys=array_rand($a,1);
		
			
			
		//$text = $event['message']['text'];
			$randomnumber='';
			for($i=0;$i<6;$i++)
			{
				$randomnumber = $randomnumber.$a[$i]."\n";
			}
				
				//$randomnumber = $a[$random_keys[0]];
			// Get replyToken
			
			
			$replyToken = $event['replyToken'];

			// Build message to reply back
	
			$messages3 = [
				
			
				'type' => 'text',
				'text' => $randomnumber
				
					];
			
			

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages3],
				
				
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
				
				
				else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && substr( $event['message']['text'], 9, 7 ) === "all vip")
		{
		
	//	$random_keys=array_rand($a,1);
		
			
			
		//$text = $event['message']['text'];
			$randomnumber='';
			for($i=0;$i<6;$i++)
			{
				$randomnumber = $randomnumber.$b[$i]."\n";
			}
				
				//$randomnumber = $a[$random_keys[0]];
			// Get replyToken
			
			
			$replyToken = $event['replyToken'];

			// Build message to reply back
	
			$messages3 = [
				
			
				'type' => 'text',
				'text' => $randomnumber
				
					];
			
			

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages3],
				
				
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
				
		else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && substr( $event['message']['text'], 9, 10 ) === "member ran")
		{
		
	//	$random_keys=array_rand($a,1);
		
			
			
		//$text = $event['message']['text'];
			
			$randomnumber = $a[rand(0,5)];
			//$randomnumber = $a[$random_keys[0]];
			// Get replyToken
			
			
			$replyToken = $event['replyToken'];

			// Build message to reply back
	
			$messages3 = [
				
			
				'type' => 'text',
				'text' => $randomnumber
				
					];
			
			

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages3],
				
				
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
				
				else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && substr( $event['message']['text'], 9, 7 ) === "vip ran")
		{
		//$random_keys=array_rand($a,1);
		
			
			
		//$text = $event['message']['text'];
			
			$randomnumber = $b[rand(0,5)];
			//$randomnumber = $a[$random_keys[0]];
			// Get replyToken
			
			
			$replyToken = $event['replyToken'];

			// Build message to reply back
	
			$messages3 = [
				
			
				'type' => 'text',
				'text' => $randomnumber
				
					];
			
			

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages3],
				
				
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
				
		else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && substr( $event['message']['text'], 9, 6 ) === "random")
		{
		$text = $event['message']['text'];
			
			$randomnumber = rand(1,3);
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
	
			$messages3 = [
				
			
				'type' => 'text',
				'text' => $randomnumber
				
					];
			
			

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages3],
				
				
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
		
		else if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = substr( $event['message']['text'], 9);
			
		//	$randomnumber = rand(10,100);
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				
				'type' => 'sticker',
				'packageId' => '4',
				'stickerId' => '630'
				
					];
			
			
							$messages2 = [
				
			
				'type' => 'text',
				'text' => $text
				
					];
			$messages3 = [
				
			
				'type' => 'text',
				'text' => $randomnumber
				
					];
			
			

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages2,$messages],
				
				
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
				
				
			} ///ifff chicken:
	}
}
echo "OK";
