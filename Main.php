<?php

use Ablech\Animals\Bird;
use Ablech\Animals\Ostrich;
use Ablech\Test\Test;

require_once 'vendor/autoload.php';

$test = new Test();
$bird = new Bird();
$bird2 = new Ostrich();

$test->throwFromTheRoof($bird);
$test->throwFromTheRoof($bird2);