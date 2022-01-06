<?php

function transformaEmMaiusculo(string $texto): string
{
    return strtoupper($texto);
}

$method = transformaEmMaiusculo(...);

echo $method('texto');
