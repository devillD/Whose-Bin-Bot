<?php
////////BENCHAMIN LOUIS//////
//CHANNEL:- T.ME/INDUSBOTS////
error_reporting(0);

set_time_limit(0);

flush();
$API_KEY = $_ENV['BOT_TOKEN']; 
##------------------------------##
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
//==============BENCHAM======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
$name = $from_id = $message->from->first_name;
$from_id = $message->from->id;
$text = $message->text;
$fromid = $update->callback_query->from->id;
$username = $update->message->from->username;
$chatid = $update->callback_query->message->chat->id;
$callback_query = $update->callback_query->data;
$messageid = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message->message_id;
$START_MESSAGE = $_ENV['START_MESSAGE'];
//===============BENCHAM=============//
if ($text == "/start") {

            bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"***$START_MESSAGE

Use*** `/bin xxxxx` ***to check bin on bin-su.***",
 'parse_mode'=>'MarkDown',
            
        ]);
 }if(strpos($text,"/bin") !== false){ 
$bin = trim(str_replace("/bin","",$text)); 

$data = json_decode(file_get_contents("https://bin-checker.net/api/$bin"),true);
$bank = $data['data']['bin'];
$vendor =  $data['data']['vendor'];
$type =  $data['data']['type'];
$level =  $data['data']['level'];
$bank =  $data['data']['bank'];
$name = $data['data']['name'];
$website = $data['data']['website'];
$phone = $data['data']['phone'];
$country =  $data['data']['country'];
$code = $data['data']['code'];
 
if($data['data']){
bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"***VALID BIN✅
               
➤ Bin : $bin

➤ Level : $level

➤ Type : $type

➤ Brand : $vendor

➤ Bank : $bank

➤ Name : $name

➤ Bank Website : $website

➤ Phone : $phone

➤ Country : $country

➤ Country Code : $code

➤ Credit/Debit : $type

***",
'parse_mode'=>"MarkDown",
]);
    }
else {
bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"INVALID BIN❌",
               
]);
}
}

?>
