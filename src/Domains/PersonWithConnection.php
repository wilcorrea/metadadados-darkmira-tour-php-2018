<?php

namespace App\Domains;

/**
 * Class PersonWithConnection
 * @package App
 */
class PersonWithConnection
{
    /**
     * @var string
     */
    protected $connection = 'tenant';

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param string $name
     * @return PersonWithConnection
     */
    public function setName(string $name): PersonWithConnection
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