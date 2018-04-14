<?php

namespace App\Domains\Model;

/**
 * Class PersonWithAnnotations
 * @package App\Domains\Model
 */
class PersonWithAnnotations
{
    /**
     * @var string
     * @required
     * @length(50)
     * @text('label' => 'Full Name')
     */
    public $name;

    /**
     * @var string
     * @length(50)
     * @text('label' => 'Street Address')
     */
    public $address;

    /**
     * @var int
     * @range(0, 100)
     */
    public $age;
}
