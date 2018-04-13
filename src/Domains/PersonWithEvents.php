<?php

namespace App\Domains;

/**
 * Class PersonWithMethod
 * @package App
 */
class PersonWithEvents extends PersonWithMethod
{
    /**
     * @param $who
     * @return mixed|null
     */
    public function save($who)
    {
        if ($this->beforeSave() === false) {
            return null;
        }
        $success = parent::save($who);
        if (!$success) {
            return null;
        }
        return $this->afterSave($who);
    }

    /**
     * @return bool
     */
    private function beforeSave()
    {
        return true;
    }

    /**
     * @param $who
     * @return mixed
     */
    private function afterSave($who)
    {
        return $who->id;
    }
}