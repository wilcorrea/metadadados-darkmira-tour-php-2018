<?php

namespace App\Domains;

use App\Infra\Model;

/**
 * Class PersonWithMethod
 * @package App
 */
class PersonWithMethod extends Model
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param $who
     * @return mixed
     */
    public function save($who)
    {
        echo "Where's the code?!", PHP_EOL;
        return $who;
    }

    /**
     * @param string $name
     * @return PersonWithMethod
     */
    public function setName(string $name): PersonWithMethod
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