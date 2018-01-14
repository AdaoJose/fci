<?php
namespace app\mvc\model;
use PDO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model
 *
 * @author Adão José
 */
//include 'config/validacao/validacao.php';
class model {
    private $conn = 0;


    public function __construct() {
        $this->conn = new PDO('mysql:host=localhost;dbname=fci', "root", "root");
       //$data = $this->select('SELECT * FROM conta');
       //var_dump($data);
       //$this->exibeir($data);
       $this->insert();
    }
    public function select($sql)
    {
        $data = $this->conn->query($sql);
        return($data);
    }
    public function insert()
            {
                
                    $stmt = $this->conn->prepare("INSERT INTO conta VALUES(:idConta, :nomeConta, :descricaoConta, :nfConta, :localConta)");
                    $stmt->execute(array(
                      ':idConta' => 1,
                      ':nomeConta' =>2,
                      ':descricaoConta'=>'conta telefonica',
                      ':nfConta'=>2129,
                      ':localConta'=>'corona'
                    ));

                    echo $stmt->rowCount(); 
            }

    public function exibeir($dados)
            {
                if($dados!= FALSE)
                {
                    foreach($dados as $row) {
                        $i = 0;
                        while (TRUE){
                                if(!isset($row[$i]))
                                    {
                                        break;

                                    }
                                    echo $row[$i]."    |    ";
                                    $i++;
                                }
                                echo '<br>';

                            }
                    } 
                    else 
                    {
                        echo 'verifique informações prestadas (PROG_SQL)'; 
                    }   
            }
            
}
