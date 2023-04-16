<?php

namespace quenull\Data;

class People
{
    public function __construct(private string $name)
    {
    }
    public function sayHello(string $name)
    {
        echo "hello $name, my name is $this->name";
    }
}
