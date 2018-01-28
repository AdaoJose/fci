<?php
namespace app\mvc\view;
include 'config'.DS."view.ini.php";

class view{
    public  $arg;
    public function __construct($arg0, $arg1) {
        $argumento = func_get_args();
        
        $num_args = func_num_args();
        if($num_args>0)
        {
            //echo $argumento[0];
            call_user_func($arg1,"ola","fala ae");
            $sts_tratada  = $arg0;
            $sts_tratada  = explode("/", $sts_tratada);
            echo "<br><br>".$sts_tratada[1]."<br><br>";
            echo substr($sts_tratada[1], 0,1);
            
            
            
            
            /*foreach ($argumento as $file){
               include tema.$file.".php"; 
            } */
        }
        //echo $argumento[0];
        //require_once(www.DS."config/view.ini.php");
        //file (tema.$arquivo.".php");
    }
}

