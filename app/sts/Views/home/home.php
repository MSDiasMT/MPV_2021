<?php
if (!defined('URL')) {
    header('location: /');
    exit();
}
?>
<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $cont_mark = 0;
            foreach ($this->Dados ['sts_carousels'] as $carousel) {
                echo "<li data-target='#myCarousel' data-slide-to='$cont_mark'></li>";
                $cont_mark++;
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $cont_slide = 0;
            foreach ($this->Dados ['sts_carousels'] as $carousel) {
                extract($carousel);
                ?>
                <div class="carousel-item <?php
                if ($cont_slide == 0) {
                    echo 'active';
                }
                ?>">
                    <img class="first-slide" src="<?php echo 'assets/imagens/carousel/' . $id . '/' . $imagem ?>">
                    <div class="container">
                        <div class="carousel-caption <?php echo $posicao_text; ?>">
                            <h1><span><?php echo $titulo; ?></span></h1>
                            <p><span><?php echo $descricao; ?></span></p>
                            <a class="btn btn-lg btn-primary" href="textbanner.html#bn1" role="button"><?php echo $titulo_botao; ?></a>
                        </div>
                    </div>
                </div>   

                <?php
                $cont_slide++;
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Avançar</span>
        </a>
<!-- fim carousel -->  
    </div>    
     <?php extract($this -> Dados ['sts_servicos'][0]); ?>
        <div class="container marketing">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Serviços</h1>
            </div> 
        <div class="row">   
            <div class="col-lg-4">
                <div class="icon-serv">
                    <i class="icon <?php echo $icone1; ?>"></i>
                </div>
                <h2><?php echo $nome1; ?></h2>
                <p><?php echo $descricao1; ?></p>
            </div>
            <div class="col-lg-4">
                <div class="icon-serv">
                    <i class="icon <?php echo $icone2; ?>"></i>
                </div>
                <h2><?php echo $nome2; ?></h2>
                <p><?php echo $descricao2; ?></p>
            </div>
            <div class="col-lg-4">
                <div class="icon-serv">
                    <i class="icon <?php echo $icone3; ?>"></i>
                </div>
                <h2><?php echo $nome3; ?></h2>
                <p><?php echo $descricao3; ?></p>
            </div>
        </div>
    </div>
</main>

