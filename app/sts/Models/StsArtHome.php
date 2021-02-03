<?php
namespace Sts\Models;
if(!defined('URL')){
        header('location: /');
        exit();
    }
class StsArtHome {
    private  $Result;
    public function listarArtHome(){
        $listar = new \Sts\Models\helper\StsRead();
        $listar -> fullRead('SELECT id, titulo, descricao, imagem, slug FROM sts_artigos 
                WHERE adms_situacao_id =:adms_situacao_id 
                ORDER BY id DESC 
                LIMIT :limit', 'adms_situacao_id=1&limit=3');
        $this -> Result = $listar -> getResult();
        return $this -> Result;
    }
}
