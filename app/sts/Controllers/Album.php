<?php
namespace Sts\Controllers;
    if(!defined('URL')){
        header('location: /');
        exit();
    }
class Album {
    public function index(){
        $carregarView = new \Core\ConfigView("sts/Views/album/album");
        $carregarView -> renderizar();
    }
}
