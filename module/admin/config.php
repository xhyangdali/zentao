<?php
$config->url = new stdclass();
$config->url->community = 'http://www.letour.im/';
$config->url->ask       = 'http://www.letour.im/message/';
$config->url->document  = 'http://www.letour.im/';
$config->url->feedback  = 'http://www.letour.im/';
$config->url->faq       = 'http://www.letour.im/';
$config->url->extension = 'http://www.letour.im/';
$config->url->donation  = 'http://www.letour.im/';
$config->url->service   = 'http://www.letour.im/';

$config->admin->apiRoot = 'http://www.letour.im';

$config->admin->log = new stdclass();
$config->admin->log->saveDays = 30;

if(!isset($config->safe))       $config->safe = new stdclass();
if(!isset($config->safe->weak)) $config->safe->weak = '123456,password,12345,12345678,qwerty,123456789,1234,1234567,abc123,111111,123123';
