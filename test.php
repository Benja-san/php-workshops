<?php

$globalName = "Stranger";

function sayHello(?string $name = null) : string
{
    global $globalName;
    if($name === null){
        $name = $globalName;
    }

    return "Hello $name";
}

echo sayHello();