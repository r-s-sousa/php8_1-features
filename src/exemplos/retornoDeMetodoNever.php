<?php

function redirect(string $uri): never
{
    echo 'redirecionando para página x';
    //header('Location:' . $uri);
    exit();
}

redirect('teste');