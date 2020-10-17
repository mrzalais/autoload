<?php

namespace App;

use Ramsey\Uuid\Uuid;

class Person
{
    public \Ramsey\Uuid\UuidInterface $id;

    public function __construct()
    {
        $this->id = (Uuid::uuid1());
    }

    public function getId(): string
    {
        return $this->id->toString();
    }

}