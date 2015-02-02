# ZZCurl 

Allows you to easily send post data.

### Example
```php
<?php

require 'vendor/autoload.php';

use Utility\Data;
use Utility\Post;

try {

    $data = new Data([
        'test_field' => 'test data',
        'test_field_2' => 'test data 2'
    ]);
    
    $post = new Post('http://www.webomg.com');
    $post->setData($data);
    
    $response = $post->send(); // Returns true if successful

} catch(Exception $exception) {
    echo $exception->getMessage();
}
```