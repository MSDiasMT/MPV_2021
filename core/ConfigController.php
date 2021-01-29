<?php
namespace Core;
class ConfigController {
    private  $Url;
    private  $UrlConjunto;
    private  $UrlController;
    private  $UrlParametro;
    public static $Format;
    public function __construct() {
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this -> Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this -> limparUrl();
            $this -> UrlConjunto = explode("/", $this->Url);

            if (isset($this->UrlConjunto[0])) {
                $this -> UrlController = $this -> slugController($this -> UrlConjunto[0]);
            } else {
                $this -> UrlController = CONTROLLER;
            }

            if (isset($this -> UrlConjunto[1])) {
                $this -> UrlParametro = $this -> UrlConjunto[1];
            } else {
                $this -> UrlParametro = null;
            }
            //echo "URL: {$this->Url} <br>";
            //echo "Controller: {$this -> UrlController} <br>";
            //echo "Parâmetro: {$this -> UrlParametro}";
        }else{
            $this -> UrlController = CONTROLLER;
            $this -> UrlParametro = null;
        }
    }
    
    private function limparUrl(){
        // limpar tags
        $this -> Url = strip_tags($this->Url);
        //limpar espaços em branco
        $this -> Url = trim($this -> Url);
        // eliminar ultima barra se houver
        $this -> Url = rtrim($this -> Url, "/");
        //limpar caracteres especiais
        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr--------------------------------';
    
        $this->Url = strtr(utf8_decode($this->Url), utf8_decode(self::$Format['a']), self::$Format['b']);
    }
    public function slugController($SlugController)
    {
        //$UrlController = strtolower($SlugController);
        //$UrlController = explode("-", $UrlController);
        //$UrlController = implode(" ", $UrlController);
        //$UrlController = ucwords($UrlController);
        //$UrlController = str_replace(" ", "", $UrlController);
        $UrlController = str_replace(" ", "", ucwords(implode(" ", explode("-", strtolower($SlugController)))));
        return $UrlController;
    }
    
    public function carregar(){
        $classe = "\\Sts\\Controllers\\".$this->UrlController;
        $classeCarregar = new $classe;
        $classeCarregar -> index();
    }
}
