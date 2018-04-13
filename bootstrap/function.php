<?php

if (!function_exists('pick')) {
    /**
     * @param mixed $value
     * @param string|int $property (null)
     * @param mixed $default (null)
     *
     * @return mixed
     */
    function pick($value, $property = null, $default = null)
    {
        if (is_null($property)) {
            return $default;
        }
        if (!$value) {
            return $default;
        }
        if (is_array($value)) {
            return search($value, $property, $default);
        }
        /** @noinspection PhpVariableVariableInspection */
        if ($value && is_object($value) && isset($value->$property)) {
            /** @noinspection PhpVariableVariableInspection */
            return $value->$property;
        }
        return $default;
    }
}

if (!function_exists('search')) {
    /**
     * @param array $context
     * @param array|string $path
     * @param mixed $default (null)
     * @return mixed|null
     */
    function search(array $context, $path, $default = null)
    {
        if (!is_array($path)) {
            $path = explode('.', $path);
        }
        foreach ($path as $piece) {
            if (!is_array($context) || !array_key_exists($piece, $context)) {
                return $default;
            }
            $context = $context[$piece];
        }
        return $context;
    }
}
