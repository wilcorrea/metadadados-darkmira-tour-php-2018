<?php

namespace App\Domains\Model;

/**
 * Class Person
 * @package App\Domains\Model
 */
class Person
{
    /**
     * @var array
     */
    private $fields = [];

    /**
     * Person constructor.
     */
    public function __construct()
    {
        $this->fields[] = [
            'component' => 'input',
            'id' => 'name',
            'label' => 'Nome',
        ];

        $this->fields[] = [
            'component' => 'select',
            'id' => 'choice',
            'label' => 'Choice',
            'options' => [
                ['label' => 'First Choice', 'value' => 'first'],
                ['label' => 'Second Choice', 'value' => 'second'],
            ],
        ];
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }
}