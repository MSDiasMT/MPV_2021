<?php
namespace Sts\Controllers;
   if(!defined('URL')){
        header('location: /');
        exit();
    }
class Home {
    private $Dados;
    public function index(){
        $listar_car = new \Sts\Models\StsCarousel();
        $this -> Dados ['sts_carousels'] = $listar_car -> listar();
        
        $listar_serv = new \Sts\Models\StsServico();
        $this -> Dados['sts_servicos'] = $listar_serv -> listar();
        
        $carregarView = new \Core\ConfigView("sts/Views/home/home", $this -> Dados);
        $carregarView -> renderizar();
    }
}
