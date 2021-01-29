<?php
if(!defined('URL')){
        header('location: /');
        exit();
    }
//echo " <br> View Home!";
//echo "<a href='blog'>Blog</a> - <a href='contato'>Contato</a> - <a href='sobreEmpresa'>Sobre a Empresa</a>";
    echo "<pre>";
    var_dump($this -> Dados);
    echo "</pre>";