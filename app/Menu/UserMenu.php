<?php

namespace App\Menu;

class UserMenu
{
    public function __invoke()
    {
        return [

        ];
    }

    public function trans($key)
    {
        return trans("navigation.${key}");
    }
}