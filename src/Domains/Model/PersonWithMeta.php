<?php

namespace App\Domains\Model;

/**
 * Class PersonWithMeta
 * @package App\Domains\Model
 */
class PersonWithMeta
{
    /**
     * @var array
     */
    const CHOICES = [
        ['label' => 'First Choice', 'value' => 'first'],
        ['label' => 'Second Choice', 'value' => 'second'],
    ];

    /**
     * @var array
     */
    private $fields = [];

    /**
     * @var string
     */
    private $last = '';

    /**
     * Person constructor.
     */
    public function __construct()
    {
        $this->add('name')->input()->setLabel('Nome');

        $this->add('choice')->select()->setLabel('Choice')->setOptions(static::CHOICES);
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param string $field
     * @return $this
     */
    private function add(string $field)
    {
        $this->fields[$field] = [
            'id' => $field,
            'name' => $field,
            'component' => 'input',
            'label' => 'Nome',
        ];
        $this->last = $field;
        return $this;
    }

    /**
     * @return $this
     */
    private function input()
    {
        $this->setProperty('component', 'input');
        return $this;
    }

    /**
     * @return $this
     */
    private function select()
    {
        $this->setProperty('component', 'select');
        return $this;
    }

    /**
     * @param string $label
     * @return $this
     */
    private function setLabel(string $label)
    {
        $this->setProperty('label', $label);
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    private function setOptions(array $options)
    {
        $this->setProperty('options', $options);
        return $this;
    }

    /**
     * @param $index
     * @param $value
     * @return $this
     */
    private function setProperty($index, $value)
    {
        if (!isset($this->fields[$this->last])) {
            return $this;
        }
        $this->fields[$this->last][$index] = $value;
    }
}
