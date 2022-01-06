<?php

function contar_e_iterar(Iterator&Countable $value)
{
    foreach ($value as $val) {
        echo $val . PHP_EOL;
    }

    echo 'qtd de itens: ' . count($value);
}

class Iterator2 implements Iterator, Countable
{
    private int $position = 0;
    private array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
        $this->position = 0;
    }

    function rewind(): void
    {
        $this->position = 0;
    }

    function current(): mixed
    {
        return $this->array[$this->position];
    }

    function key(): int
    {
        return $this->position;
    }

    function next(): void
    {
        ++$this->position;
    }

    function valid(): bool
    {
        return isset($this->array[$this->position]);
    }

    public function count(): int
    {
        return count($this->array);
    }
}

$it = new Iterator2([1,3,4]);
contar_e_iterar($it);
