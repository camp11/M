<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'wqwtn+dwQttMLNKVtvNZqN8OahkDoTg1YHCwDIH+MwNCfC7UPodpxFxBI5bCkOPKniJFiTzGspZnrFuUdcohzD+835fTNM79Qleo3szv5icCcgFRyEQ2gFrXoFCxehGbasmp6ItpopIDRVWCi+3lQQdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = 'c5f23601d60054abd20c67564d8ab2d7';//sesuaikan

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp	= $client->parseEvents()[0]['timestamp'];
$message 	= $client->parseEvents()[0]['message'];
$messageid 	= $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

//pesan bergambar
if($message['type']=='text') {
	    if ($command == 'bot' || $command == 'BOT' ) {
        $balas = array(
            'replyToken' => $replyToken,
            'messages' => array(
                array(
                    'type' => 'text',
                    'text' => $profil->displayName.
					'Ada apa sebut saya??'
                )
            )
        );
    }
}
//pesan bergambar
if($message['type']=='text') {
	    if ($command == 'Hai' || $command == 'hay' ) {
        $balas = array(
            'replyToken' => $replyToken,
            'messages' => array(
                array(
                    'type' => 'text',
                    'text' => $profil->displayName.
					'Hai juga ka'
                )
            )
        );
    }
}
//pesan bergambar
if($message['type']=='text') {
	    if ($command == 'Wc' || $command == 'Welcome' ) {
        $balas = array(
            'replyToken' => $replyToken,
            'messages' => array (
  'type' => 'uri',
  'label' => 'WELCOME TO YPH GROUP',
  'linkUri' => 'https://preview.ibb.co/dn8R1c/IMG_000000_000000.jpg',
  'area' => 
  array (
    'x' => 0,
    'y' => 0,
    'width' => 520,
    'height' => 520,
  ),
)
        );
    }
}
//pesan bergambar
if($message['type']=='text')
	if ($command == 'Jadwal' || $command == 'JADWAL' )
	{
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
array (
  'type' => 'template',
  'altText' => 'JADWAL YPH',
  'template' => 
  array (
    'type' => 'carousel',
    'columns' => 
    array (
      0 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/nkVH7H/20180404_130317.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'SENIN',
        'text' => '--> WAJIB COVER',
        'actions' => 
        array (		  
          0 => 
          array (
            'type' => 'message',
            'label' => 'Info Klik',
            'text' => 'Senin',
          ),
        ),
      ),
      1 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/c5tn7H/20180404_130346.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'SELASA',
        'text' => '--> QUIZ / FREE CHAT',
        'actions' => 
        array (		  
          0 => 
          array (
            'type' => 'message',
            'label' => 'Info Klik',
            'text' => 'Selasa',
          ),
        ),
      ),
      2 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/jCpVux/20180404_130423.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'RABU',
        'text' => '--> GREBEK OC',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'message',
            'label' => 'Info Klik',
            'text' => 'Rabu',
          ),
        ),
      ),
      3 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/hXvaSH/20180404_130445.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'KAMIS',
        'text' => '--> YASINAN',
        'actions' => 
        array (	  
          0 => 
          array (
            'type' => 'message',
            'label' => 'Info Klik',
            'text' => 'Kamis',
          ),
        ),
      ),
      4 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/dpMM1c/20180404_130518.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'JUMAT',
        'text' => '--> JUMSIH (NOT TIKEL)',
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'message',
            'label' => 'Info Klik',
            'text' => 'JUMAT',
          ),
        ),
      ),
      5 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/nxjwZx/20180404_130537.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'SABTU',
        'text' => '--> FREE KOJOM',
        'actions' => 
        array (		  
          0 => 
          array (
            'type' => 'message',
            'label' => 'Info Klik',
            'text' => 'Sabtu',
          ),
        ),
      ),
      6 => 
      array (
        'thumbnailImageUrl' => 'https://preview.ibb.co/ffPr1c/20180404_130601.jpg',
        'imageBackgroundColor' => '#FFFFFF',
        'title' => 'MINGGU',
        'text' => '--> ARISAN OC',
        'actions' => 	
        array (			
          0 => 
          array (
            'type' => 'message',
            'label' => 'Info Klik',
            'text' => 'Minggu',
          ),
        ),
      ),
    ),
    'imageAspectRatio' => 'rectangle',
    'imageSize' => 'cover',
  ),
)
							)
						);
				
	}
$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);

?>
