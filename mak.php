<?php
$token = "1644223193:AAGVFBkUHlLQuUDnU_9o71UPK6JAOYo1878";
define('API_KEY',$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $Aa = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$Aa";
        $xtxtk = file_get_contents($url);
        return json_decode($xtxtk);
}
function AMEER5 ($chat,$text,$msg ){
 bot('sendMessage',[
 'chat_id'=>$chat,
 'text'=>$text,
 'parse_mode' => "markdown",
'disable_web_page_preview'=>true, 
 'reply_to_message_id'=>$msg , 
 ]);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $update->message->text;
$chat = $update->message->chat->id;
$name= $update->message->from->first_name;
$from = $update->message->from->id;
$msg  = $update->message->message_id;
$replyid = $update->message->reply_to_message->from->id;
$replyname = $update->message->reply_to_message->from->first_name;
$reply = $update->message->reply_to_message;
if(strpos($text,"السلام عليكم") !== false){
AMEER5($chat,"وعليكم السلام ورحمة الله وبركاته حياك الله يا $name",$msg);}