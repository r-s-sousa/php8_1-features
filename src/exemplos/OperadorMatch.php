<?php

switch (8.0){
    case '8.0':
        $result = "esse não é o esperado";
        break;
    case 8.0:
        $result = "isso é o esperado";
        break;
}

echo $result;

echo match (8.0) {
    '8.0' => 'esse não é o esperado',
    8.0 => 'esse é o esperado'
};