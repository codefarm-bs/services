<?php

namespace App\Utils;

class SampleContainer
{
    protected array $bindings = [];

    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }

    public function make($key)
    {
        if (isset($this->bindings[$key])) {
            if (is_callable($this->bindings[$key])) {
                return call_user_func($this->bindings[$key]);
            } else {
                return $this->bindings[$key];
            }
        }
    }
}
