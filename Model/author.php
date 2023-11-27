<?php

declare(strict_types=1);

class Author
{
    public $id;
    public string $name;

    public function __construct($id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
