<?php
	header('Content-Type:text/html; charset=UTF-8');
	mb_internal_encoding('UTF-8');
	/* ********************** Google api credentials and configurations ************************ */
	$apiKey = 'AIzaSyDmkcvlAIXbfVqSNsqLHCDtaThCdJTHWJw';
	if($_REQUEST['action'] == 'translate'){	
		$text=$_REQUEST["search"];
		
		/* *************************** Detect Language *************************** */
		$deteact_language = 'https://www.googleapis.com/language/translate/v2/detect?q='.rawurlencode($text).'&key='.$apiKey;
		$language = json_decode(file_get_contents($deteact_language),true);
		$language = $language['data']['detections'][0][0]['language'];
		
		if($_REQUEST['from'] != ""){
			$from=$_REQUEST["from"];
		}
		else{
			$from=$language;
		}
		if($_REQUEST['to'] !="" ){
			$to=$_REQUEST['to'];
		} else {
			$to='ur';
			
		}	
		/* *************************** get Language Translation *************************** */
		$url = 'https://www.googleapis.com/language/translate/v2?key=' . $apiKey . '&q=' . rawurlencode($text) . '&source='.$from.'&target='.$to;	
		$content = file_get_contents($url);
		$responseDecoded = json_decode($content, true);
		$translation =  $responseDecoded['data']['translations'][0]['translatedText']; 
		
		/* ********************************** Create Mp3 File ********************************** */
		/* if($to != 'ur'){
			
			$file = md5($to."?".urlencode($text));
			$file = "audio/" . $file . ".mp3";
			// Verify if folder exists, if it doesn't, create it, if exists, verify CHMOD
			if (!is_dir("audio/"))
				mkdir("audio/");
			else if (substr(sprintf('%o', fileperms('audio/')), -4) != "0777")
				chmod("audio/", 0777);
					
			// If the MP3 file exists, do not create a new request
			if (!file_exists($file)){
				// Download the content
				$mp3 = file_get_contents(
				'http://translate.google.com/translate_tts?ie=UTF-8&q='. urlencode($translation) .'&tl='. $to .'&total=1&idx=0&textlen=5000&prev=input');
				file_put_contents($file, $mp3);
			} 
		} */
		
			$data = array('translation' => $translation ,'source' => $from,'destination'=>$to);
			//print_r($data);
		
	}
	echo json_encode($data);
?>