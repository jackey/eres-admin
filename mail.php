<?php

$city = $_GET['city'];
$email = $_GET['email'];
$indate = $_GET['in'];
$outdate = $_GET['out'];
$people = $_GET['pc'];

$to = 'jackey@fumer.cn';

$subject = '有新客户提交租房申请表单';
$content = 'nihao 新内容';

mail($to, $subject, $content);