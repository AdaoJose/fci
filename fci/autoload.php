<?php

function __autoload($class)
{
    $class = www.DS.str_replace("\\", DS, $class).".php";
    if(!file_exists($class))
        {
        throw new Exception("Arquivo não encontrado");
    }
    //if caminho for valido carrega ele abaixo
    require_once($class);
}
