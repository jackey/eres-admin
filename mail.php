<?php

$city = $_GET['city'];
$email = $_GET['email'];
$indate = $_GET['in'];
$outdate = $_GET['out'];
$people = $_GET['pc'];

$to = 'reservation@cres-amgroup.com';

$subject = '有新客户提交租房申请表单';
$content = "您好， 用户 {$email} 提交了住房申请，资料如下: 城市: ${city}; 入住时间: ${indate}; 退房时间: ${outdate}; ${people}个客人; 请您处理好客户需求.";

mail($to, $subject, $content);