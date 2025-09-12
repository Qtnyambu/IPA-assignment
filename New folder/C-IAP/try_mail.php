<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'ICS C Community',
    'email_from' => 'no-reply@icsccommunity.com',
    'name_to' => 'Jacob Kamau',
    'email_to' => 'konghover@gmail.com',
    'subject' => 'Welcome to ICS C Community',
    'body' => 'This is a new semester. <b>Let\'s make the most of it and as well as striving for excellence!</b>'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);