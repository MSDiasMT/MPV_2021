<?php
namespace Sts\Models;
    if(!defined('URL')) {
        header("Location: /");
        exit();
    }   

class StsServico {
    private $Result;
    public function listar(){
        $listar = new \Sts\Models\helper\StsRead();
        $listar -> exeRead('sts_servicos', 'LIMIT :limit', 'limit=1');
        $this -> Result = $listar -> getResult();

        return $this -> Result;
    }
}
