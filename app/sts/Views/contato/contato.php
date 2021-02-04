<?php
if (!defined('URL')) {
    header('location: /');
    exit();
}
?>
<main role="main">
    <!-- Formulário -->
    <div class="form1 container">
        <form method="post" action="confirmaMsg.php">
            <div class="col-12 col-md"><h3 class="titleLocation text-center">ENVIE-NOS UMA MENSAGEM</h3></div>
            <div class="row">
                <div class="col-12 col-md">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" name="email" placeholder="nome@provedor-email.com" required>
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefone</label>
                        <input type="text" class="form-control" name="fone" placeholder="(66) 99999 - 9999" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Escreva aqui a sua mensagem</label>
                <textarea class="form-control" name="texto" rows="5"></textarea>
            </div>
            <button class="btn btn-success btContact" type="submit" value="salvar">Enviar Mensagem</button>
            <button class="btn btn-danger btContact"  type="reset" value="limpar">Limpar campos</button>
            <!--<a class="btn btn-lg btn-danger" href="" role="button">Enviar Mensagem</a>
            <!--<button type="submit" class="btn btn-primary">Enviar Mensagem</button>-->	
        </form> 
        <div class="row">
            <div class="col-12 col-md">
                <h3 class="titleLocation text-center">LOCALIZAÇÃO DA IGREJA</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402.17655388801535!2d-54.62588354475385!3d-16.466939886436506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9379c8135504a8ad%3A0xdadc283d017fad23!2sMINIST%C3%89RIO%20PALAVRA%20VIVA!5e0!3m2!1spt-BR!2sbr!4v1581483890587!5m2!1spt-BR!2sbr" width="100%" height="340px" frameborder="0" style="border:#CCC 1px solid" allowfullscreen=""></iframe>   
            </div>
        </div> 
        <br/>
</main>