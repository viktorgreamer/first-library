<?php

namespace viktorgreamer\packagist;


class MyClass
{

    public function render()
    {
        return "Hello from " . get_called_class();
    }

}