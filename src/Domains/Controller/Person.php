<?php

namespace App\Domains\Controller;

use App\Domains\Model\PersonWithMeta as Model;
use ErrorException;

/**
 * Class Person
 * @package App\Domains\Controller
 */
class Person
{
    /**
     * @var Model
     */
    private $model;

    /**
     * Person constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $data
     * @throws ErrorException
     */
    public function renderForm(array $data = [])
    {
        $filename = $this->fromTheme('form');

        /** @noinspection PhpIncludeInspection */
        $template = require_once $filename;
        if (is_callable($template)) {
            $template($this->model->getFields(), $data);
        }
    }

    /**
     * @param array $field
     * @param mixed $value
     * @throws ErrorException
     */
    protected function renderField(array $field, $value)
    {
        $filename = $this->fromTheme('fields/' . pick($field, 'component'));

        /** @noinspection PhpIncludeInspection */
        $template = require_once $filename;
        if (is_callable($template)) {
            $template($field, $value);
        }
    }

    /**
     * @param string $path
     * @return string
     * @throws ErrorException
     */
    private function fromTheme(string $path)
    {
        $filename = __APP_ROOT__ . '/resources/template/' . __APP_TEMPLATE__ . '/' . $path . '.phtml';
        if (file_exists($filename)) {
            return $filename;
        }
        throw new ErrorException("File not found: `{$filename}`");
    }
}
