<?php
use app\classes\helpers;
use app\enums\colors;

require_once __DIR__ . '/../../vendor/autoload.php';

echo 'testando novas funcionalidades do php 8.1';
helpers::adicionarQuebraDeLinha();

function paintColor(colors $colors): void
{
    echo "Paint : " . $colors->getColor() . PHP_EOL;
}

paintColor(colors::Red);
paintColor(colors::Green);
paintColor(colors::Blue);