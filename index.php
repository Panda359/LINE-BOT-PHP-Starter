<?php
$access_token = 'wyNwDWmwcKmIUbQG5FkjglxrQiOa75M5LKyCbUWgeBSt7dT3UWkV7FHgdT2mjQkBNJk/8ER9a5jO2hydIZJwSE5q0j/veSV3UU89JAP0hEXiSiPo+1kittDzOTiA4Y254IuTo4t6d/WFtWmh3EGD+QdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	
	$a[0]="Mayume";
	$a[1]="xxxShark";
	$a[2]="Chimerical";
	$a[3]="Aiden";
	$a[4]="Deathover";
	$a[5]="Aunkoz";
	$a[6]="Anagura";
	$a[7]="Rosita";
	$a[8]="เอแคลร์แช่แข็ง";
	$a[9]="Sondamonday";
	$a[10]="Nongmo";
	$a[11]="Imbaboyz";
	$a[12]="หญิงกลาง";
	$a[13]="Urara";
	$a[14]="Meijuan";
	
	/*
	$a[0]="บ.ชาบูจัง จำกัด";
$a[1]="ชายสี่หมี่เกี๊ยว";
$a[2]="ร้านลมเย็น";
$a[3]="ร้านบะหมี่ ป๋าเทพ";
$a[4]="ร้านราดหน้า";
$a[5]="ยิ่งเฮ็งส้มตำเรือนหนองคาย";
$a[6]="ร้านเป็ดย่างคูเมือง";
$a[7]="ก๋วยเตี๋ยวเรือป้าแต๋ว2";
$a[8]="สเต็ก๑๐๐ล้าน";
$a[9]="ร้านข้าวหอม ข้าวตัง";
$a[10]="ร้านข้าวหอม ข้าวตัง";
$a[11]="ร้านยันรันเวย์";
$a[12]="ร้านก๋วยเตี๋ยวเรืออนุเสาวรีย์สาขา2";
$a[13]="ก๋วยเตี๋ยวต้มยำ ต้นท้อน";
$a[14]="คูซิหม่าปิงย่างผ่าเหล่า";

*/
	
	$b[0]="mem1";
	$b[1]="member2";
	$b[2]="member3";
	$b[3]="member4";
	$b[4]="member5";
	$b[5]="member6";
	
	
	
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
	
		$text_mes=$event['message']['text'];
		
		$last_mes = substr(trim($text_mes), -1);
		$first_mes = $text_mes[0];
		
		
			if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $last_mes=='*' && $first_mes == '*' )
		{
		$text_mes = trim($event['message']['text']);
		$text_mes=substr_replace($text_mes, '', -1 , 1);
		$text_mes=substr_replace($text_mes, '', 0 , 1);
		$text_mes = trim($text_mes);
				
			if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $text_mes == "all list")
		{
		
	//	$random_keys=array_rand($a,1);
		
			
			
		//$text = $event['message']['text'];
			$randomnumber='';
			for($i=0;$i<15;$i++)
			{
				$randomnumber = $randomnumber.$a[$i]."\n";
			}
			
				
				
				
				
			//	$randomnumber = "all member";      ////////////////check
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
				
				else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $text_mes == "random")
		{
		//$text = $event['message']['text'];
			
			$randomnumber = rand(0,99);
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
							
				else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && substr( $text_mes, 0, 6 ) === "random")
		{
		//$text = $event['message']['text'];
			
					$array_rand=explode(" ",$text_mes);
					
			$randomnumber = rand($array_rand[1],$array_rand[2]);
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
		
				
				else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $text_mes == "all member")
		{
		
	//	$random_keys=array_rand($a,1);
		
			
			
		//$text = $event['message']['text'];
			$randomnumber='';
			for($i=0;$i<6;$i++)
			{
				$randomnumber = $randomnumber.$b[$i]."\n";
			}
				
			//	$randomnumber ="all vip"; /////////check
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
				
		else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $text_mes == "ran list")
		{
		
	//	$random_keys=array_rand($a,1);
		
			
			
		//$text = $event['message']['text'];
			
			$randomnumber = $a[rand(0,14)];
		//	$randomnumber = "ran member"; ///////check
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
				
				else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $text_mes == "ran member")
		{
		//$random_keys=array_rand($a,1);
		
			
			
		//$text = $event['message']['text'];
			
			$randomnumber = $b[rand(0,5)];
		//	$randomnumber = "ran vip"; /////check
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
			$text = $text_mes;
			
			//$text=$last_mes.'pppppppppppp'.$first_mes;
			
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

