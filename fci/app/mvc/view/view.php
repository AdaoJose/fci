<?php
namespace app\mvc\view;
include 'config'.DS."view.ini.php";

class view{
    public function __construct() {
        $argumento = func_get_args();
        
        $num_args = func_num_args();
        if($num_args>0)
        {
            foreach ($argumento as $file){
               include tema.$file.".php"; 
            } 
        }
        //echo $argumento[0];
        //require_once(www.DS."config/view.ini.php");
        //file (tema.$arquivo.".php");
    }
}

