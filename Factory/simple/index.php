<?php
require_once('Notifier.php');
require_once('NotifierFactory.php');

require_once('SMS.php');

$mobile = NotifierFactory::getNotifier("SMS", "08211234567");
echo $mobile->sendNotification();

echo "\n";

require_once('Email.php');
$email = NotifierFactory::getNotifier("Email", "test@test.nl");
echo $email->sendNotification();