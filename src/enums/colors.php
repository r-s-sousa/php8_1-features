<?php

namespace app\enums;

enum colors
{
    case Red;
    case Blue;
    case Green;

    public function getColor(): string
    {
        return $this->name;
    }
}