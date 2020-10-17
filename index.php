<?php

require_once 'vendor/autoload.php';

use App\Person;
use Ramsey\Uuid\Uuid;

$person = new Person();

echo $person->getId();