<?php

/* https://api.telegram.org/bot5142325115:AAHeMDBNjDILUprXvNuFJyuG6qxvdsG0mT4/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$token = "5603560036:AAF17lgktf3ByRwEFna4YaQGNFbzVrvVguo";
$chat_id = "-789568424";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Комментарии' => $comments
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>