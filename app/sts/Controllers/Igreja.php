<?php
namespace Sts\Controllers;
   if(!defined('URL')){
        header('location: /');
        exit();
    }
class Igreja {
    public function index(){
        $carregarView = new \Core\ConfigView("sts/Views/igreja/igreja");
        $carregarView -> renderizar();
    }
}
