<?php

namespace app\mvc\controller;

/**
 * Description of controller
 *
 * @author aristides01
 */

class controller {
    public  $contato;
    public function __construct($url) {
        
        if( !method_exists($this, $url))
        {
            throw new Exception("não encontrado");
        }
        $this->$url();
       
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
}
//var_dump(property_exists('controller', 'contato'));   //true
