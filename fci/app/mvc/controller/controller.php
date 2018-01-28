<?php

namespace app\mvc\controller;
use app\mvc\model as model;
use app\mvc\view as view;

/**
 * Description of controller
 *
 * @author aristides01
 */

new view\view("login/teste", function($var,$var1){
    echo"<br><br><h1>Ola Mundo</h1><br>";
    echo $var;
    echo "var1 = ".$var1."<br>";
} );
class controller {
    public  $contato;
    public function __construct($url) {
        
        if( !method_exists($this, $url))
        {
            $this->erro(404);
        } else {
           $this->$url(); 
        }
        
       
    }
    public function home()
            {
                 echo '<h1>home</h1><br>';
                 
                
                 
            }
    public function contato()
    {
        echo '<br>Area de contato<br>';
        return TRUE;
    }
    public function login()
            {
                $file = file(www.DS."app\mvc\\view\login.php");
                foreach ($file as $arquivo)
                    {
                    str_replace($arquivo, "@logo" , "Logotipo da empresa");
                        echo $arquivo;
                    }
                
            }
   
    public function bd()
    {
        new model\model();
    }
    
    
    //***************************TRATAMENTO DE TIPO DE ERROS CONHECIDOS************************************************//
    
     public function erro($tipoErro){
        switch ($tipoErro):
        case 404:
            echo '<H1 style="text-align:center;margin-top:20%;font-size:5em;">PAGINA NÃO ENCONTRADA</h1>';
        endswitch;
    }
}
//var_dump(property_exists('controller', 'contato'));   //true
