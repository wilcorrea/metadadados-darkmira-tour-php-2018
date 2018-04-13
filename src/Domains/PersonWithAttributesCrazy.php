<?php

namespace App\Domains;

/**
 * Class PersonWithAttributesCrazy
 * @package App
 */
class PersonWithAttributesCrazy
{
    /**
     * @var array
     */
    protected $attributes = [
        'head' => [],
        'body' => [
            'arms' => [
                'left' => [],
                'right' => [],
            ],
            'legs' => [
                'left' => [],
                'right' => [],
            ],
        ],
    ];
}
