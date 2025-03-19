<?php
/*
این سورس نوشته شده توسط :@Arterycode
*/

$admin = "6876634205";
define('TOKEN', "7573034916:AAFX1a-eRaGDQRjBPxIxsIaCKQKw1Wpa1Z8");
//========ورودی========//
$up = json_decode(file_get_contents('php://input'));
// ---------تایم---------//
date_default_timezone_set('Asia/Tehran');
if (isset($up->message)) {
    $from_id   = $up->message->from->id;
    $text      = $up->message->text;
    $first_name=$up->message->from->first_name;
    $ms        = $up->message->message_id;
}
if (isset($up->callback_query)) {
    $from_id   = $up->callback_query->from->id;
    $ms        = $up->callback_query->message->message_id;
    $data      = $up->callback_query->data;
}
function bot($method, $datas) {
    $url = "https://api.telegram.org/bot" . TOKEN . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    return curl_exec($ch);
}
function send($chat_id,$text,$keyboard = null) {
    bot('sendMessage',[
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => "mark_down",
        'reply_markup' => $keyboard
    ]);
}
$key00= json_encode(['keyboard'=>[
   [['text'=>'「بازگشت.」']]
   ], 'resize_keyboard'=>true
   ]);
   
$key = json_encode(['keyboard' => [
    [['text' => '⚜️ | دریافت کانفیگ'],['text'=>'💰| قیمت ها']],
    [['text'=>'🪙 | افزایش موجودی'],['text'=>'👤 | حساب کاربری']],
    [['text' => '💡| راهنما'], ['text' => '🆓 | سرور های رایگان']],
    [['text' => '☎️ | پشتیبانی']]
], 'resize_keyboard' => true]);

$key2 = json_encode(['keyboard' => [
    [['text' => '🔹 | افزودن'],['text'=>'💬 | پیام']],
    [['text'=>'➕ | افزایش موجودی کاربر'],['text'=>'➕ | اضافه کردن کانفیگ']],
    [['text' => '👁️ | آمار'],['text'=>'▫️ | افزودن قیمت']],
    [['text' => '✉️ | پیام همگانی'], ['text' => '📨 | فوروارد همگانی']],
    [['text' => '「بازگشت 」']]
], 'resize_keyboard' => true]);
$key3 = json_encode(['inline_keyboard' => [
    [['text' => "پاسخ", 'callback_data' => "ad"]]
]]);
$key4 = json_encode(['keyboard'=>[
   [['text'=>'قیمت حجم 1'],['text'=>'قیمت حجم 2'],['text'=>'قیمت حجم 3']],
   [['text'=>'قیمت حجم 4'],['text'=>'قیمت حجم 5'],['text'=>'قیمت حجم 6']],
   [['text'=>'「بازگشت.」']]
   ], 'resize_keyboard'=>true
   ]);
$key5 = json_encode(['keyboard' => [
    [['text' => 'تایید و پرداخت']]
], 'resize_keyboard' => true]);
$key0 = json_encode(['keyboard' => [
    [['text' => 'پیام']]
], 'resize_keyboard' => true]);
$key7 = json_encode(['keyboard' => [
    [['text' => '🔙 | بازگشت']]
], 'resize_keyboard' => true]);
$key8 = json_encode(['keyboard' => [
    [['text' => 'برگشت🔙']]
], 'resize_keyboard' => true]);
$key10 = json_encode(['keyboard' => [
    [['text' => 'تنظیم متن استارت'],['text'=>'تنظیم سرور رایگان']],
    [['text' => 'تنظیم متن راهنما'], ['text' => 'تنظیم شماره کارت']],
    [['text' => '「بازگشت.」']]
], 'resize_keyboard' => true]);
$key9= json_encode(['inline_keyboard' => [
    [['text' => "تایید ✅", 'callback_data' => "taa"]]
]]);
$key11= json_encode(['keyboard' => [
    [['text' => '1'],['text'=>'2']],
    [['text' => '3'],['text' => '4']],
    [['text' => '5'],['text'=>'6']],
    [['text'=>'🔙 | بازگشت']]
], 'resize_keyboard' => true]);
$key12= json_encode(['inline_keyboard' => [
    [['text' => " 📨 ارسال رسید", 'callback_data' => "rs"]]
]]);
$key13= json_encode(['keyboard'=>[
   [['text'=>'بازگشت🔘']]
   ],'resize_keyboard'=>true
   ]);
$key98 = json_encode([
    'keyboard' => [
        [['text' => 'کانفیگ حجم 1'], ['text' => 'کانفیگ حجم 2'], ['text' => 'کانفیگ حجم 3']],
        [['text' => 'کانفیگ حجم 4'], ['text' => 'کانفیگ حجم 5'], ['text' => 'کانفیگ حجم 6']],
        [['text'=>'「بازگشت.」']]
    ],
    'resize_keyboard' => true
]);
$key99 = json_encode(['keyboard'=>[
   [['text'=>'🔙']]
   ],'resize_keyboard'=>true
   ]);

$time = date("H:i");
$unix = strtotime($time);
$new_time = date("H:i", $unix);
$Date = date("Y/m/d");

if (!is_dir('data')) {
    mkdir('data');
}

if (!is_dir("data/user")) {
    mkdir("data/user");

}
if (!is_dir("data/user/$from_id")) {
    mkdir("data/user/$from_id");
}
//===================≠============
/*
این سورس نوشته شده توسط : @Arterycode
*/

//===========
if (!file_exists("data/smar.txt")) {
   file_put_contents("data/smar.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/ranma.txt")) {
   file_put_contents("data/ranma.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/ser.txt")) {
   file_put_contents("data/ser.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/stp.txt")) {
   file_put_contents("data/stp.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/hagm.txt")) {
   file_put_contents("data/hagm.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/hamg2.txt")) {
   file_put_contents("data/hamg2.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/kk.txt")) {
   file_put_contents("data/kk.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/hhh.txt")) {
   file_put_contents("data/hhh.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/gg.txt")) {
   file_put_contents("data/gg.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/mmd.txt")) {
   file_put_contents("data/mmd.txt","متن را از پنل مدیریت تنظیم کنید.");
}
if (!file_exists("data/azmm.txt")) {
   file_put_contents("data/azmm.txt","متن را از پنل مدیریت تنظبم کنید");
}
if (!file_exists("data/amm2.txt")) {
   file_put_contents("data/amm2.txt","متن را از پنل مدیریت تنظبم کنید");
}
if (!file_exists("data/am33.txt")) {
   file_put_contents("data/am33.txt","متن را از پنل مدیریت تنظبم کنید");
}
if (!file_exists("data/a44.txt")) {
   file_put_contents("data/a44.txt","متن را از پنل مدیریت تنظبم کنید");
}
if (!file_exists("data/ami55.txt")) {
   file_put_contents("data/ami55.txt","متن را از پنل مدیریت تنظبم کنید");
}
if (!file_exists("data/amm66.txt")) {
   file_put_contents("data/amm66.txt","متن را از پنل مدیریت تنظبم کنید");
}
//=======================//
$step  = file_get_contents("data/user/$from_id/step.txt");
$step2 = file_get_contents("data/stp.txt");
$step3 = file_get_contents("data/ser.txt");
$step4 = file_get_contents("data/ranma.txt");
$step5 = file_get_contents("data/smar.txt");
$step6 = file_get_contents("data/hagm.txt");
$step7 = file_get_contents("data/hamg2.txt");
$step8 = file_get_contents("data/kk.txt");
$step9 = file_get_contents("data/hhh.txt");
$step10= file_get_contents("data/mmd.txt");
$step11= file_get_contents("data/gg.txt");
//===========================//
$st = file_get_contents("data/azmm.txt");
$st2 = file_get_contents("data/amm2.txt");
$st3 = file_get_contents("data/am33.txt");
$st4 = file_get_contents("data/a44.txt");
$st5 = file_get_contents("data/ami55.txt");
$st6 = file_get_contents("data/amm66.txt");
//==========================//
if ($text == "/start" ) {
       file_put_contents("data/user/$from_id/step.txt", "none");
    bot('sendMessage', [
        'chat_id' => $from_id,
        'text' => "$step2",
        'reply_markup' => $key
    ]);
}
if ($text=='💰| قیمت ها') {
           file_put_contents("data/user/$from_id/step.txt","none");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"🟢لیست قیمت های کافنیگ V2rayng🟢

🔴 - حجم : 1 گیگ
🔹 - قیمت : $step6

🔴 - حجم : 2 گیگ
🔹- قیمت : $step7

🔴 - حجم : 3 گیگ
🔹- قیمت : $step8

🔴 - حجم : 4 گیگ
🔹- قیمت : $step9

🔴 - حجم : 5 گیگ
🔹- قیمت : $step11

🔴 - حجم : 6 گیگ
🔹- قیمت : $step10

💠 مشکلی بود قسمت پشتیبانی درخدمتم💠",
      'reply_markup'=>$key1
      ]);
}
if ($text == '⚜️ | دریافت کانفیگ') {
    bot('sendMessage', [
        'chat_id' => $from_id,
        'text' => 'مقدار خود را انتخاب کنید .',
        'reply_markup' => $key11
    ]);
    file_put_contents("data/user/$from_id/step.txt", "none");
}

$coin = intval(file_get_contents("data/user/$from_id/coin")); 

$options = [
    '1' => ['required' => $step6, 'message' => "$st"],
    '2' => ['required' => $step7, 'message' => "$st2"],
    '3' => ['required' => $step8, 'message' => "$st3"],
    '4' => ['required' => $step9, 'message' => "$st4"],
    '5' => ['required' => $step11, 'message' => "$st5"],
    '6' => ['required' => $step10, 'message' => "$st"],
];

if (isset($options[$text])) {
    $required = $options[$text]['required'];
    
    if ($coin >= $required) {
        $new_balance = $coin - $required;
        file_put_contents("data/user/$from_id/coin", $new_balance);
        
        bot('sendMessage', [
            'chat_id' => $from_id,
            'text' => $options[$text]['message']
        ]);
    } else {
        bot('sendMessage', [
            'chat_id' => $from_id,
            'text' => 'موجودی شما برای این سرویس کافی نیست.'
        ]);
        file_put_contents("data/user/$from_id/step.txt", "none");
    }
}
//==================≠=========//
if ($text=='🔹 | افزودن') {
       file_put_contents("data/user/$from_id/step.txt","none");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>'به منو خوش امدید',
      'reply_markup'=>$key10,
      ]);
}
if ($text=='تنظیم شماره کارت') {
   file_put_contents("data/user/$from_id/step.txt","smar");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>".شماره کارت خود را ارسال کنید.\n\n\nمتن فعلی شما:$step5",
      'reply_to_message_id'=>$ms,
      'reply_markup'=>$key8
      
      ]);
} elseif ($step=='smar' && $text != 'برگشت🔙') {
   file_put_contents("data/user/$from_id/step.txt","none");
   file_put_contents("data/smar.txt","$text");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن شما تنطیم شد:$text",
      'reply_to_message_id'=>$ms,
      'reply_markup'=>$key10
      ]);
}
if($text == "تنظیم متن استارت" ){
file_put_contents("data/user/$from_id/step.txt","start");
bot('sendmessage', [
'chat_id' =>$admin,
'text' => "متن فعلی شما:\n$step2\n\n\n برای تغییر متن متن خود را ارسال کنید",
'reply_to_message_id' => $ms,
      'reply_markup'=>$key8
]);
}
elseif ($step == "start" && $text != 'برگشت🔙' ){
file_put_contents("data/user/$from_id/step.txt", 'none');
file_put_contents("data/stp.txt", "$text");
bot('sendmessage', [
'chat_id' =>$admin,
'text' => "متن شما تنظیم شد 
$text",
'reply_to_message_id' => $ms,
 'reply_markup'=>$key10
]);
}

if ($text=='تنظیم سرور رایگان') {
   file_put_contents("data/user/$from_id/step.txt","serv");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن فعلی شما:\n$step3\n\n\nبرای تنظیم متن جدید متن خود را ارسال کنید\n",
      'reply_to_message_id'=>$ms,
            'reply_markup'=>$key8
      ]);
} elseif ($step=='serv' && $text != 'برگشت🔙' ) {
         file_put_contents("data/user/$from_id/step.txt","none");
   file_put_contents("data/ser.txt","$text");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن شما با موفیقت اضافه $text",
      'reply_to_message_id'=>$ms,
      'reply_markup'=>$key10
      ]);
} if ($text=='🆓 | سرور های رایگان') {
   file_put_contents("data/user/$from_id/step.txt","none");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"$step3"
      ]);
}

if ($text == 'تنظیم متن راهنما') {
   file_put_contents("data/user/$from_id/step.txt","rah");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن فعلی شما:\n$step4\n
برای تنظیم متن جدید متن خود را ارسال کنید",
      'reply_markup'=>$key8
      ]);
} elseif ($step=='rah' && $text != 'برگشت🔙' ) {
         file_put_contents("data/user/$from_id/step.txt","none");
   file_put_contents("data/ranma.txt","$text");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن شما تظیم شد :\n $text",
      'reply_markup'=>$key10
      ]);
} if ($text=='💡| راهنما') {
   file_put_contents("data/user/$from_id/step.txt","none");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"$step4",
      ]);
}
if ($text=='▫️ | افزودن قیمت') {
   file_put_contents("data/user/$from_id/step.txt","none");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>'به صحفه تغییر قیمت ها خوش امدید.',
      'reply_markup'=>$key4
      ]);
}
//=======================================//
if ($text=='قیمت حجم 1') {
   file_put_contents("data/user/$from_id/step.txt","hg");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"قیمت فعلی شما:$step6\n\n\n برای ثبت قیمت جدید قیمت جدید را ارسال کنید.",
      'reply_markup'=>$key13
      ]);
} elseif ($step=='hg' && $text != 'بازگشت🔘') {
   file_put_contents("data/user/$from_id/step.txt","none");
   file_put_contents("data/hagm.txt","$text");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن شما ذخبره شد:$text",
      'reply_to_message_id'=>$ms,
      'reply_markup'=>$key4
      ]);
}
if ($text=='قیمت حجم 2') {
   file_put_contents("data/user/$from_id/step.txt","hgm2");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن فعلی شما:$step7\n\n\nبرای ثبت قیمت جدید قیمت را ارسال کنید.",
      'reply_markup'=>$key13
      ]);
} elseif ($step=='hgm2' && $text != 'بازگشت🔘') {
   file_put_contents("data/user/$from_id/step.txt","none");
   file_put_contents("data/hamg2.txt","$text");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"قیمت شما تنظیم شد:$text",
      'reply_to_message_id'=>$ms,
      'reply_markup'=>$key4
      ]);
}
if ($text=='قیمت حجم 3') {
   file_put_contents("data/user/$from_id/step.txt","kkk");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن فعلی شما:$step8\n\n\n برای ثبت قیمت جدید قیمت خود را ارسال کنید.",
      'reply_markup'=>$key13
      ]);
} elseif ($step=='kkk' && $text != 'بازگشت🔘') {
   file_put_contents("data/kk.txt","$text");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن شما تنظیم شد:$text",
      'reply_to_message_id'=>$ms,
      'reply_markup'=>$key4
      ]);
    file_put_contents("data/user/$from_id/step.txt","none");
}
if ($text=='قیمت حجم 4') {
   file_put_contents("data/user/$from_id/step.txt","hh4");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"قیمت فعلی شما:$step9\n\n\nبرای ثبت متن جدید را ارسال کنید.",
      'reply_markup'=>$key13
      ]);
} elseif ($step=='hh4' && $text != 'بازگشت🔘') {
   file_put_contents("data/hhh.txt","$text");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن شما ذخیره شد:\n$text",
      'reply_to_message_id'=>$ms,
      'reply_markup'=>$key4
      ]);
      file_put_contents("data/user/$from_id/step.txt","none");
}
if ($text=='قیمت حجم 5') {
   file_put_contents("data/user/$from_id/step.txt","gg5");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن فعلی شما:$step11\n\n\nبرای تنظیم متن جدید را ارسال کنید.",
      'reply_markup'=>$key13
      ]);
} elseif ($step=='gg5' && $text != 'بازگشت🔘') {
   file_put_contents("data/gg.txt","$text");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن شما تنظیم شد:$text",
      'reply_to_message_id'=>$ms,
      'reply_markup'=>$key4
      ]);
      file_put_contents("data/user/$from_id/step.txt","none");
}
if ($text=='قیمت حجم 6') {
   file_put_contents("data/user/$from_id/step.txt","mmd6");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن فعلی:$step10\n\n\n برای ثبت متن جدید خود را ارسال کنید.",
      'reply_markup'=>$key13
      ]);
} elseif ($step=='mmd6' && $text != 'بازگشت🔘') {
   file_put_contents("data/mmd.txt","$text");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"متن شما تنظیم شد:$text",
      'reply_to_message_id'=>$ms,
      'reply_markup'=>$key4
      ]);
      file_put_contents("data/user/$from_id/step.txt","none");
}

//==============================================//

if ($text == '☎️ | پشتیبانی') {
    file_put_contents("data/user/$from_id/step.txt", "sup");
    bot('sendMessage', [
        'chat_id' => $from_id,
        'text' => 'پیام خود را ارسال کنید.',
        'reply_markup' => $key7
    ]);
} elseif ($step == 'sup' && $text != '🔙 | بازگشت') {
    if (isset($text)) {
        bot('sendMessage', [
            'chat_id' => $admin,
            'text' => "اطلاعات کاربر:\nایدی عددی:  $from_id\nنام: $first_name\nساعت: $time\nتاریخ :$Date\n•°•°•°•°•°•°•°•°•°•°•°•°•°•°•°•\nپیام کاربر:\n«  $text  »",
            'reply_markup' => $key3
        ]);
        bot('sendMessage', [
            'chat_id' => $from_id,
            'text' => 'پیام شما ارسال شد.',
            'reply_markup' => $key
        ]);
        file_put_contents("data/user/$from_id/step.txt", "none");
    }
}
if ($text == '🪙 | افزایش موجودی') {
   file_put_contents("data/user/$from_id/step.txt", "charg");
   bot('sendMessage', [
        'chat_id' => $from_id,
        'text' => "لطفاً مقدار مبلغ شارژ خود را ارسال کنید.",
        'reply_markup'=>$key7
    ]);
} elseif ($step == 'charg') {
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"مبلغ شارژ شما:$text\n\n🔹 مایل به پرداخت ان هستید تایید را بزنید.",
      'reply_markup'=>$key9,
   
      ]);
}
if ($data=='taa') {
           file_put_contents("data/user/$from_id/step.txt","none");
   bot('editMessageText',[
      'chat_id'=>$from_id,
          'message_id' => $ms,
      'text'=>"💳 برای شارژ حساب خود ابتدا مبلغ مورد نظر خود را به کارت زیر واریز کنید سپس از طریق دکمه ارسال رسید ، رسید بانکی را ارسال کنید .

شماره کارت :
`$step5`

با کلیک روی شماره کارت به صورت خودکار برای شما کپی می شود .",
      'parse_mode'=>'Markdown',
      'reply_markup'=>$key12
      ]);
}
elseif ($data=='rs') {
   file_put_contents("data/user/$from_id/step.txt","rsed");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>'رسید خود را ارسال کنید ',
      'reply_markup'=>$key7
      ]);
} elseif ($step=='rsed' && $text != '🔙 | بازگشت'){
   $photo = $up->message->photo;
   $file = $up->message->photo[count($up->message->photo) - 1]->file_id;
   bot('sendphoto',[
      'chat_id'=>$admin,
      'photo'=>$file,
      'caption'=>"ادمین گرامی:\n\n کاربر:$from_id\n در ساعت:$time\n و و در تاریخ:$Date\n رسید خود را ارسال کرد
      ",
      'reply_markup'=>$key3
      ]);
      bot('sendMessage',[
         'chat_id'=>$from_id,
         'text'=>"رسید شما ارسال شد.\n\nبعد از تایید شدن موجودی شما شارژ خواهد شد.",
         'reply_to_message_id'=>$ms,
         'reply_markup'=>$key
         ]);
         file_put_contents("data/user/$from_id/step.txt","none");
}
//=====================//

if ($text == "➕ | افزایش موجودی کاربر" && $from_id == $admin) {
    file_put_contents("data/user/$from_id/step.txt", "GivePoints");
    bot('SendMessage', [
        'chat_id' => $from_id,
        'text' => "لطفاً آیدی کاربر را وارد کنید که می‌خواهید امتیاز را به او اهدا کنید:",
        'reply_markup' =>$key00
    ]);
}

if ($step == "GivePoints" && $text != "「بازگشت.」") {
    file_put_contents("data/user/$from_id/receiver.txt", $text);
    file_put_contents("data/user/$from_id/step.txt", "GivePointsAmount");

    bot('SendMessage', [
        'chat_id' => $from_id,
        'text' => "لطفاً مقدار امتیاز را وارد کنید که می‌خواهید اهدا کنید:"
    ]);
}

if ($step == "GivePointsAmount" && $text != "「بازگشت.」") {
    $userr = file_get_contents("data/user/$from_id/receiver.txt");
    $amount = intval($text); 
    $user_points = intval(file_get_contents("data/user/$userr/coin"));

    bot('SendMessage', [
        'chat_id' => $admin,
        'text' => "📥اهدای امتیاز\nکاربر: $userr\nموجودی قبلی: $user_points\nمقدار اهدا شده: $amount"
    ]);

    $user_points += $amount;
    file_put_contents("data/user/$userr/coin", $user_points);
    file_put_contents("data/user/$from_id/step.txt", "none");
    bot('SendMessage', [
        'chat_id' => $admin,
        'text' => "✅ امتیاز به کاربر$userrبه مقدار $amount اهدا شد.",
        'reply_markup'=>$key2
    ]);
    bot('SendMessage', [
        'chat_id' => $userr,
        'text' => "🌟 شما از طرف مدیر امتیاز به مقدار $amount دریافت کردید."
    ]);
}
//========================//
if ($from_id == $admin) {
    if ($text == "/admin") {
        bot('sendMessage', [
            'chat_id' => $from_id,
            'text' => 'سلام ادمین به پنل مدیریت خوش آمدید.',
            'reply_markup' => $key2
        ]);
    } elseif ($text == '👁️ | آمار') {
        $sc = scandir('data/user');
        $am = count($sc) - 2; 
        
        bot('sendMessage', [
            'chat_id' => $from_id,
            'text' => "تعداد کاربرانی ربات:$am",
            'reply_markup'=>$key1
        ]);
    }
}
///=========پاسخ به کاربر========//
if ($data == "ad") {
    bot('sendMessage', [
        'chat_id' => $admin,
        'text' => "در لاین اول آیدی عددی کاربر و در لاین دوم متن خود را وارد کنید:\nمثال:\n123456789\n متن خود را اینجا وارد کنید.",
        'reply_to_message_id' => $ms,
    ]);
    file_put_contents("data/user/$from_id/step.txt", "sender");
} elseif ($step == "sender") {
    $texted = explode("\n", $text);
    if (count($texted) >= 2) {
        $text0 = trim($texted[0]);
        array_shift($texted);
        $text1 = implode("\n", array_map('trim', $texted));
        bot('sendMessage', [
            'chat_id' => $text0,
            'text' => "🔹 پیامی از طرف ادمین دریافت کردید:\n\n$text1",
        ]);
        bot('sendMessage', [
            'chat_id' => $admin,
            'text' => "ادمین پیام به کاربر ارسال شد.",
            'parse_mode' => "Markdown",
            'reply_to_message_id' => $ms,
        ]);
    } else {
        bot('sendMessage', [
            'chat_id' => $admin,
            'text' => "لطفا آیدی کاربر و پیام را به درستی وارد کنید.",
            'reply_to_message_id' => $ms,
        ]);
    }
    file_put_contents("data/user/$from_id/step.txt", "none");
}
//=====================//
    if ($text=='👤 | حساب کاربری') {
       bot('sendMessage',[
          'chat_id'=>$from_id,
          'text'=>"کاربر:$from_id\nموجودی:$coin\nساعت:$new_time\nتاربخ:$Date",
          ]);
    }
    
    //======================//
/*
این سورس نوشته شده توسط : @Arterycode
*/

//======================//
if ($text == '🔙 | بازگشت') {
           file_put_contents("data/user/$from_id/step.txt","none");
    bot('sendMessage', [
        'chat_id' => $from_id,
        'text' => 'برگشتید به منو اصلی.',
        'reply_markup' => $key
    ]);
} if ($text=='「بازگشت 」') {
           file_put_contents("data/user/$from_id/step.txt","none");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"به منو کاربر برگشتید.",
      'reply_markup'=>$key
      
      ]);
}
if ($text=='「بازگشت.」') {
           file_put_contents("data/user/$from_id/step.txt","none");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>'به پنل اصلی خوش امدید.',
      'reply_markup'=>$key2
      ]);
}
if ($text=='برگشت🔙') {
           file_put_contents("data/user/$from_id/step.txt","none");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>'به منو قبلی برکشتید.',
      'reply_markup'=>$key10
      ]);
}
if ($text=='بازگشت🔘') {
          file_put_contents("data/user/$from_id/step.txt","none");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>'به منو برگشتید ',
      'reply_markup'=>$key4
      ]);
}
//======================//
if ($text == '📨 | فوروارد همگانی') {
   file_put_contents("data/user/$from_id/step.txt","forpm");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>'پیام را ارسال کنید',
      'reply_markup'=>$key00,
      ]);
} elseif ($step=='forpm' && $text != '「بازگشت.」') {
      $pm= scandir('data/user');
      unset($pm[0]);
      unset($pm[1]);
      foreach ($pm as $idpm){
         bot('forwardmessage',[
            'from_chat_id'=>$from_id,
            'message_id'=>$ms,
            'chat_id'=>$idpm,
          
            ]);
            file_put_contents("data/user/$from_id/step.txt","none");
         
      }
      bot('sendMessage',[
         'chat_id'=>$admin,
         'text'=>'پیام شما به تمامی کاربران فوروارد شد.',
         ]);
}
//======================//
/*
این سورس نوشته شده توسط : @Arterycode
*/

//=====================//
if ($text == '✉️ | پیام همگانی') {
   file_put_contents("data/user/$from_id/step.txt","pmham");
   bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>'پیام را ارسال کنید',
      'reply_markup'=>$key00
      ]);
} elseif ($step=='pmham' && $text != '「بازگشت.」') {
   if ($text) {
      $pm= scandir('data/user');
      unset($pm[0]);
      unset($pm[1]);
      foreach ($pm as $idpm){
         bot('sendMessage',[
            'chat_id'=>$idpm,
            'text'=>$text,
            ]);
            file_put_contents("data/user/$from_id/step.txt","none");
         
      }
      bot('sendMessage',[
         'chat_id'=>$admin,
         'text'=>'پیام شما به تمامی کاربران ارسال شد.',
         ]);
   } else {
      bot('sendMessage',[
         'chat_id'=>$admin,
         'text'=>'فقط میتوانید پیام ارسال ارسال کنید.',
         ]);
   }
}

if ($text == '➕ | اضافه کردن کانفیگ') {
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>'nn',
      'reply_markup'=>$key98
      ]);
}

if ($text == 'کانفیگ حجم 1') {
   file_put_contents("data/user/$from_id/step.txt","azaz");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"کانفیگ فعلی شما :$st\n\nکافنیگ جدید خود را ارسال کنید.",
       'reply_markup'=>$key99
      ]);
}elseif ($step == 'azaz' && $text != '🔙') {
   file_put_contents("data/user/$from_id/step.txt","noen");
   file_put_contents("data/azmm.txt","$text");
   bot('sendMessage',[
     'chat_id'=>$from_id, 
     'text'=>'متن شما با موفقیت  اضافه شد.',
      'reply_markup'=>$key98
      ]);
}


if ($text == 'کانفیگ حجم 2') {
   file_put_contents("data/user/$from_id/step.txt","azaz2");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"کانفیگ فعلی شما :$st2\n\nکافنیگ جدید خود را ارسال کنید.",
       'reply_markup'=>$key99
      ]);
}elseif ($step == 'azaz2' && $text != '🔙') {
   file_put_contents("data/user/$from_id/step.txt","noen");
   file_put_contents("data/amm2.txt","$text");
   bot('sendMessage',[
     'chat_id'=>$from_id, 
     'text'=>'متن شما با موفقیت  اضافه شد.',
      'reply_markup'=>$key98
      ]);
        
}


if ($text == 'کانفیگ حجم 3') {
   file_put_contents("data/user/$from_id/step.txt","azaz33");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"کانفیگ فعلی شما :$st3\n\nکافنیگ جدید خود را ارسال کنید.",
       'reply_markup'=>$key99
      ]);
}elseif ($step == 'azaz33' && $text != '🔙') {
   file_put_contents("data/user/$from_id/step.txt","noen");
   file_put_contents("data/am33.txt","$text");
   bot('sendMessage',[
     'chat_id'=>$from_id, 
     'text'=>'متن شما با موفقیت  اضافه شد.',
      'reply_markup'=>$key98
      ]);
       
}


if ($text == 'کانفیگ حجم 4') {
   file_put_contents("data/user/$from_id/step.txt","aza44");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"کانفیگ فعلی شما :$st4\n\nکافنیگ جدید خود را ارسال کنید.",
       'reply_markup'=>$key99
      ]);
}elseif ($step == 'aza44' && $text != '🔙') {
   file_put_contents("data/user/$from_id/step.txt","noen");
   file_put_contents("data/a44.txt","$text");
   bot('sendMessage',[
     'chat_id'=>$from_id, 
     'text'=>'متن شما با موفقیت  اضافه شد.',
      'reply_markup'=>$key98
      ]);
       
}


if ($text == 'کانفیگ حجم 5') {
   file_put_contents("data/user/$from_id/step.txt","a55");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"کانفیگ فعلی شما :$st5\n\nکافنیگ جدید خود را ارسال کنید.",
       'reply_markup'=>$key99
      ]);
}elseif ($step == 'a55' && $text != '🔙') {
   file_put_contents("data/user/$from_id/step.txt","noen");
   file_put_contents("data/ami55.txt","$text");
   bot('sendMessage',[
     'chat_id'=>$from_id, 
     'text'=>'متن شما با موفقیت  اضافه شد.',
      'reply_markup'=>$key98
      ]);
         
}


if ($text == 'کانفیگ حجم 6') {
   file_put_contents("data/user/$from_id/step.txt","lkkk66");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>"کانفیگ فعلی شما :$st6\n\nکافنیگ جدید خود را ارسال کنید.",
      'reply_markup'=>$key99
      ]);
}elseif ($step == 'lkkk66' && $text != '🔙') {
   file_put_contents("data/user/$from_id/step.txt","noen");
   file_put_contents("data/amm66.txt","$text");
   bot('sendMessage',[
     'chat_id'=>$from_id, 
     'text'=>'متن شما با موفقیت  اضافه شد.',
     'reply_markup'=>$key98
      ]);
        
}
if ($text == '🔙') {
      file_put_contents("data/user/$from_id/step.txt","noen");
   bot('sendMessage',[
      'chat_id'=>$from_id,
      'text'=>'به صفحه قبلی برگشتید',
      'reply_markup'=>$key98,
      ]);
}
/*
این سورس نوشته شده توسط : @Arterycode
*/

?>