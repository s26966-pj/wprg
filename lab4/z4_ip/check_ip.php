<?php
$ip = $_SERVER['REMOTE_ADDR'];
$privileged = file('ip.txt',FILE_IGNORE_NEW_LINES);
foreach($privileged as $ip) {
    echo $ip;
}
if (in_array($ip, $privileged)) {
    include 'privileged.html';
} else {
    include 'not_privileged.html';
}
?>