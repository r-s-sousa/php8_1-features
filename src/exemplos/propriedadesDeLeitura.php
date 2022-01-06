<?php

namespace app\exemplos;

class exemplo
{
    public function __construct(public readonly string $endpoint)
    {
        echo 'endpoint definido: ' . $this->endpoint;
    }
}

$obPropriedadeReadonly = new exemplo('http://localhost/');
