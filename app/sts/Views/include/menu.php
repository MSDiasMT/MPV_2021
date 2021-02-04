<header>   
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">   
            <a class="navbar-brand" href="#"><img src="assets/imagens/logo4.png" class="imgLogo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo URL;?>">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Igreja</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="agenda.html">Agenda</a>
                            <a class="dropdown-item" href="doacoes.html">Doações</a>
                            <a class="dropdown-item" href="eventos.html">Eventos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo URL.'igreja';?>">Igrejas</a>
                            <a class="dropdown-item" href="institucional.html">Institucional</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Palavra</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="construcao.html">Estudo</a>
                            <a class="dropdown-item" href="construcao.html">Mensagem</a>
                            <a class="dropdown-item" href="construcao.html">Programação</a>
                        </div>     
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL.'album';?>">Fotos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL.'contato';?>">Contato</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="fa fa-sitemap" title="Mapa do site"></a>
        </div> 
    </nav>
    <div class="social">
        <a href="https://www.facebook.com/mpvroo/" class="fa fa-facebook-square"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-rss"></a>
        <a href="https://www.youtube.com/channel/UC1knWY-Ecqy8fPCdt91s9gw" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-twitter"></a>
    </div>
</header>