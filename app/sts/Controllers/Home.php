<?php
namespace Sts\Controllers;
   if(!defined('URL')){
        header('location: /');
        exit();
    }
class Home {
    private $Dados;
    public function index(){
        $Home = new \Sts\Models\StsHome();
        $this->Dados = $Home -> index();
        
        $carregarView = new \Core\ConfigView("sts/Views/home/home", $this->Dados);
        $carregarView -> renderizar();
    }
}
