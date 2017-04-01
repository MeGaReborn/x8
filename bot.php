<?php
$botToken = "300049013:AAF7rMGcjvYIYcOjTgX8LgarAuGbr9NvkLI"; // توكن
$website = "https://api.telegram.org/bot".$botToken;
$sudo_id = 325384922;// ایدی سودو
$bot_id = 300049013; // ایدی بوت  
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$chatId = $update["message"]["chat"]["id"];
$nm = $update["message"]["new_chat_member"];
$type = $update["message"]["chat"]["type"];
$user = $update["message"]["from"]["username"];
$name = $update["message"]["chat"]["title"];
$message = $update["message"]["text"];
$mse = $update["message"]["text"];
$for = $update["message"]["from"]["id"];
$nam = $update["message"]["from"]["first_name"];
$sticker = $update["message"]["sticker"];
$photo = $update["message"]["photo"];
$audio = $update["message"]["voice"];
$link = $update["message"]["[Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee]/"];
$fwd = $update["message"]["forward_from"];
$fwd2 = $update["message"]["forward_from"]["id"];
$fwd3 = $update["message"]["forward_to"];
$user2 = $update["message"]["forward_from"]["username"];
$fwd_name = $update["message"]["forward_from"]["first_name"];
$pin = $update["message"]["pinned_message"];
$gif = $update["message"]["document"];
$ed = $update["message"]["edited_channel_post"];
$nt = $update["message"]["new_chat_title"];
$np = $update["message"]["new_chat_photo"];
$dp = $update["message"]["delete_chat_photo"];
$nm = $update["message"]["new_chat_member"];
$left = $update["message"]["left_chat_member"];
$test = $update["message"]["contact"];
$song = $update["message"]["audio"];
$location = $update["message"]["location"];
$memb = $update["message"]["message_id"];
$game = $update["message"]["game"]; 
$reply = $update["message"]["reply_to_message"];
$replay = $update["message"]["reply_to_message"]["from"]["id"];
$replay_user = $update["message"]["reply_to_message"]["from"]["username"];
$user_id = $update['message']['from']['id'];
$replay_name = $update["message"]["reply_to_message"]["from"]["first_name"];
$text = $update['message']['text'];
$token =$botToken ;
$text = $update['message']['text'];
$mensagemID = $update['message']['reply_to_message']['message_id'];
$chatID = $update['message']['reply_to_message']['chat']['id'];
$fwdrep = $update['message']['reply_to_message']['forward_from']['id'];
$mensagemID = $update['message']['reply_to_message']['message_id'];
$number = str_word_count($message);
$numper = strlen($message);
include_once "groups.php";
$file = "ids.php";
include_once("ids.php");
$file2 = "groups.php";
include "twasl.php";
$file4 = "twasl.php";



if ($message == "/setsudo" && $for == $sudo_id){
sendmark($chatId, "done" , $memb);
}

if ($message == "/setchat" && $for == $sudo_id){
sendmark($chatId, "done " , $memb);
}

if ($message == "/setchat" && $for == $sudo_id){
file_put_contents($file4, "<?php" . "\n" . '$twasl[] = ' . $chatId . ";");
}

if ($message == "/setchat" && $for == $sudo_id && $type == "supergroup"){
file_put_contents($file4, "<?php" . "\n" . '$twasl[] = ' . $chatId . ";");
}

if ($message == "/setsudo" && $for == $sudo_id){
file_put_contents($file4, "<?php" . "\n" . '$twasl[] = ' . $sudo_id . ";");
}


if ($message == "/remall"){
file_put_contents($file, "<?php");
}

if ($message == "/remall"){
sendmark ($chatId, "از لیست مدیریتی خارج شد",$memb);
}

if($reply && $message == "/promote" && $for == $sudo_id){
file_put_contents($file, "\n" . '$ids[] = ' . $replay . ";" ,FILE_APPEND);
}

if($message == "/add" && $for != $sudo_id){
sendmark($chatId, "done" , $memb);
}

if($message == "/add" && $for == $sudo_id){
file_put_contents($file2, "\n" . '$gpid[] = ' . $chatId . ";",FILE_APPEND);
}

if($message == "/add" && $for == $sudo_id){
sendmark($chatId, "ربات ادد شد" , $memb);
}

if ($reply && $message == "/promote" && $for == $sudo_id){
sendmark($chatId, "کاربر پرموت شد : "."[$replay_name](https://t.me/$replay_user)",$memb);
}


if($number > 100 && $for != $sudo_id or $numper > 1000 && $for != $sudo_id){
sendmark($chatId, "حداقل 100 " . "\nسيد ❄️ @" . "[$nam](https://t.me/$user)" );
}
	 

if ($message && $chatId != $group && $type == "private" && $for != $sudo_id){
forwardMessage($twasl[0] ,$chatId, $memb);
}

if ($photo && $chatId != $group && $type == "private" or $audio && $type == "private" or $gif && $type == "private" or $test && $type == "private" && $for != $sudo_id){
forwardMessage($twasl[0] ,$chatId, $memb);
}

if ($sticker && $type == "private"){
forwardMessage($twasl[0],$chatId,$memb);
sendMessage($twasl[0], "done :  @" . $user);
}

if ($message && $fwdrep){
sendMessage($fwdrep, " $message " );	
}


$shit = explode(".", $message);
$matches = explode(".", $message); // Group id and msg / done

if($message){
sendmark($matches[0], "$matches[1]");
}

if($fwd2 and $type == "private"){
sendmark($for, "💡Id : " . $fwd2 . "\n💡user : " . "[$fwd_name](https://t.me/$user2)",$memb);	
}

if ($replay && $message == "/id" && in_array($chatId,$gpid)){
sendmark($chatId, "_💡Id_ : " . $replay . "\n_💡User_ : " . "[$replay_name](https://t.me/$replay_user",$memb);
}

if ($nm && in_array($chatId,$gpid)){
sendmark($chatId, "*🔥done *\n[💡done](https://t.me/botreborn_ch)🍂 ",$memb);
}

if($message == "/me" and $for == $sudo_id && $type == "supergroup" && in_array($chatId,$gpid)){
sendmark($chatId, "مشخصات من:| 🕴 : " . "[$nam](https://t.me/$user)",$memb);
}

elseif($message == "/me" && $type == "private"){
sendMessage($chatId, "با عرض پوزش 🍂 این در همه گروه ها 👥❇️");
}

if($message == "/me" && in_array($for,$ids) && $type == "supergroup" && $for != $sudo_id){
sendmark($chatId, "شما معتاد ☘ در ربات 🤖❄️ : " . "[$nam](https://t.me/$user)" , $memb);
}

if($message == "/me" and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "شما عضو مجرد 👤 : " . "[$nam](https://telegram.me/$user)",$memb);
}

if($location and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع ارسال سایت🏝🔒   " . "[$nam](https://t.me/$user)",$memb);
}

if($game and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع ارسال بازی 🕹🔒  : " . "[$nam](https://t.me/$user)",$memb);
}

if($song and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع ارسال اهنگ 🎵🔒  : " . "[$nam](https://t.me/$user)",$memb);
}

if($message == "نوع گروه" && $type == "supergroup" && in_array($chatId,$gpid)){
sendMessage($chatId, "نوع گروه 👥 : " . $type); 
}

if($message == "ارسالی" && $memb > 1000 && $type == "supergroup" && in_array($chatId,$gpid)){
sendmark($chatId, "عدد ارسالی 👥🔹  : " . "*$memb*" . "\nنهایتنا 💯 ",$memb); 
}
elseif($message == "عدد ارسالی" && $type == "private"){
	sendMessage($chatId, "با عرض پوژش 👥❇️");
}

if($message == "عدد ارسالی" && $memb < 1000 && $type == "supergroup" && in_array($chatId,$gpid)){
sendmark($chatId, "عدد🔹  : " . "*$memb*" . "\ndone💭",$memb); 
}


if($dp && in_array($chatId,$gpid)){
sendmark($chatId, "عکس حذف ✅ گروه 🎑 Boistt : " . "[$nam](https://t.me/$user)",$memb);
}

if($np && in_array($chatId,$gpid)){
sendmark($chatId, "👤 تغییر تصویر گروه 🎑❕ :  " . "[$nam](https://t.me/$user)",$memb);
}

if($nt && in_array($chatId,$gpid)){
sendmark($chatId, "تعقیر اسم گروه : " . "[$nam](https://t.me/$user)",$memb);
}

if($gif and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوعه 🚫 ارسال تصاویر متحرک 🎆🔒 : " . "[$nam](https://t.me/$user)",$memb);
}

if($pin and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوعه 🚫 کار نصب و راه اندازی 📍🔒  " . "[$nam](https://t.me/$user)",$memb);
}



if($fwd && !$photo and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوعه 🚫 بخشنامه کار🔄🔒 : " . "[$nam](https://t.me/$user)",$memb);
}


if($link and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوعه 🚫 ارسال ⚙🔒 لینک : " . "[$nam](https://t.me/$user)",$memb);
}

if($audio and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "ممنوع ارسال تصویر 📣🔒  " . "[$nam](https://t.me/$user)",$memb);
}


if($photo and $for != $sudo_id && $type == "supergroup"){
sendmark($chatId, "done🎆🔒   ". "[$nam](https://t.me/$user)",$memb);
}


if($test and $for != $sudo_id && $type == "supergroup" && in_array($chatId,$gpid) && !in_array($for,$ids)){
sendmark($chatId, "done 📱🔒  : " . "[$nam](https://telegram.me/$user)",$memb);
}

if ($left && in_array($chatId,$gpid)){
sendMessage($chatId, "done 📩");
}

if ($sticker and $for != $sudo_id && $type == "supergroup" && !in_array($for,$ids) && in_array($chatId,$gpid)){
sendmark($chatId, "done : " . "[$nam](https://t.me/$user)", $memb); // OmarReal
}

if ($message == "/start" && $type == "private"){
sendmark($chatId, "سلام : [$nam](https://t.me/$user)" . "\nسورس ربات x 👥 " . "\nاپن شده توسط مگا ریبورن 📵 " . "\n" . "[@boydev ☘](https://telegram.me/botreborn_ch)" ,$memb);
}

// code by omar

if ($message === "/id" && !$replay && in_array($chatId,$gpid)){
	sendmark($chatId, "🎈 Gp Id : " . $chatId 
	. "\n" . "🎈 User : " 
	. "[$nam](https://t.me/$user)"
	. "\n" 
	. "🎈 Gp name : " . $name
	
	. "\n" . "🎈 Msg text : " . $mse
	. "\n" . "🎈 Your Id : " . $for
	. "\n" . "🎈 Msg Number : " . $memb
	. "\n" . "🎈 Type : " . $type
	. "\n" . "🎈 Your Name : " . $nam
	,$memb );
}

// This File By @boydev
/*
if ($message == "/id"){
	sendMessage($chatId, "سلام @" . $user . "\n" . "پا 📩 در درخواست خود را ارسال شی 💡\n شوارسال از دست دادن 📪 پیام خود را به ربات اگر آن را هر چیزی دریافت نمی 💸");
}
*/
$time = time() + (979 * 11 + 1 + 30);
if ($message ==  'الوقت' && in_array($chatId,$gpid)){
sendmark($chatId, "🕛 ایران" . "\n" . "🕛 ساعت : " . date('g', $time) . "\n" . "🕛 دقیقه : " . date('i', $time) ,$memb);
}

if ($message == "التاريخ" && in_array($chatId,$gpid)){
sendmark($chatId, "📆 ایران : ایران \n" . "📆  سال : " . date("Y") . "\n" . "📆 شهر : " . date("n") . "\n" . "📆 امروز :" . date("j"), $memb);	
}
date_default_timezone_set("Asia/Baghdad");

if ($message == "/kickme" && $for != $sudo_id && in_array($chatId,$gpid)){
kick($chatId , $for);
}
if ($message == "/kickme" && $for != $sudo_id && in_array($chatId,$gpid)){
sendmark($chatId, "خداحافظ عزیز 🌝☘ : " . "[$nam](https://t.me/$user",$memb);
}

if ($message == "/kick" && $for == $sudo_id && in_array($chatId,$gpid)){
rekick($chatId,$for,$replay);
}

if ($message == "/kick" && $for == in_array($for,$ids) && in_array($chatId,$gpid)){
rekick($chatId,$for,$replay);
}

if($replay && $message == "/kick" && $for == !in_array($for,$ids) && $for != $sudo_id){
sendmark ($chatId, "فقط ناظران: " ."[$nam](https://t.me/$user)" , $memb);
}

if ($replay && $message == "/kick" && $for == $sudo_id && in_array($chatId,$gpid)){
sendmark($chatId, "اخراج شد کاربر به دلیل خلاف 👤 : " . "[$replay_name](https://t.me/$replay_user)", $memb);	
}

if ($replay && $message == "/kick" && $for == in_array($for,$ids)){
sendmark($chatId, "اخراج شد کاربر به دلیل خلاف : " . "[$replay_name](https://t.me/$replay_user)",$memb);
}
	function forwardMessage ($group, $chatId, $memb){
		   $url = $GLOBALS[website].'/forwardMessage?chat_id='.$group.'&from_chat_id='.$chatId.'&message_id='.$memb;
			file_get_contents($url);
		}
     
     function real ($chatId, $message, $replay){
     	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message).'&message_id='.$replay;
		file_get_contents($url);
     	
     }
     
     
    function sendmark ($chatId, $message, $memb){
    $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=Markdown'.'&text='.urlencode($message).'&reply_to_message_id='.$memb.'&disable_web_page_preview=true';
    file_get_contents($url);
     }
     
     function kick($chatId,$for){
  
    $url = $GLOBALS[website]."/kickChatMember?chat_id=".$chatId."&user_id=".$for."&text=".urlencode($message);
    file_get_contents($url);
    } 
     
     function rekick ($chatId, $for, $replay){
    $url = $GLOBALS[website].'/kickChatMember?chat_id='.$chatId.'&user_id='.$replay.'&text='.urlencode($message).'&reply_to_message_id='.$replay.'&disable_web_page_preview=true';
    file_get_contents($url);
     } 
     
	function sendMessage ($chatId, $message){
		

		$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
		file_get_contents($url);
		}

function send($fwdrep, $photo, $replay){
		   $url = $GLOBALS[website].'/senddMessage?chat_id='.$fwdrep."&$message=".$photo.'&message_id='.$replay;
			file_get_contents($url);
		}
		
	?>
