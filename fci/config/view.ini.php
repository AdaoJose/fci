<?php
//define("www", dirname(__FILE__));
//define("DS", DIRECTORY_SEPARATOR);
$tema = "principal";
$caminho  = "app".DS."mvc".DS."view".DS."tema".DS.$tema.DS;

define("tema", $caminho);
