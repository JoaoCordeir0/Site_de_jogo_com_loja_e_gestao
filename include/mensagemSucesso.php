<div class="modal fade" id="sucesso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Compra finalizada</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <img src="../assets/img/sucesso.gif" alt="" id="imgSucesso">
                </div>
                <div class="d-flex justify-content-center">
                    <h1>Sucesso!!</h1>
                </div>
                <h4>Assim que o pagamento for aprovado voc&ecirc; recebea uma notifica&#x000E7;&atilde;o por e-mail</h4>
            </div>
            <div class="modal-footer">
                <a href="../backend/zeraProdutos.php"><button type="button" class="btn btn-success" data-bs-dismiss="modal">Finalizar</button></a>                
            </div>
        </div>
    </div>
</div>

<style>
    #imgSucesso{
        width:500px;
        height:350px;
    }
    @media(max-width:500px) {
        #imgSucesso{
            width:320px;
            height:250px;
    }
    }
</style>