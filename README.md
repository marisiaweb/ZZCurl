# ZZCurl 

Allows you to easily send post data.

### Example
``php

<?php 

require 'vendor/autoload.php';

$data = new Utility\Data(array(
	'field_name' => 'field value'
));

$sender = new Utility\Post('URL Here');
$sender->setData($data);
$sender->send();

``
