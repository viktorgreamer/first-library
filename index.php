<?php

use viktorgreamer\firstpackagist\MyClass;

require "./vendor/autoload.php";

$class = new MyClass();
echo $class->render().PHP_EOL;

