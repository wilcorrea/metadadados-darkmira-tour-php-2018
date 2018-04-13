<?php

namespace App\Domains;

/**
 * Class Person
 * @package App
 */
class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param string $name
     * @return Person
     */
    public function setName(string $name): Person
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
