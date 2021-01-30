<?php
if (!defined('URL')) {
    header('location: /');
    exit();
}
?>
<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

        </ol>
        <div class="carousel-inner">
            <?php
            $cont_slide = 0;
            foreach ($this->Dados ['sts_carousels'] as $carousel) {
                extract($carousel);
                ?>
                <div class="carousel-item <?php if ($cont_slide == 0) {
                echo 'active';
            } ?>">
                    <img class="first-slide" src="<?php echo 'assets/imagens/carousel/' . $id . '/' . $imagem ?>" alt="First slide">
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
    </div>
</main>

