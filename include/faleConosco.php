<style>
    .tabelacontato{
        width: 100%;
    }
    .tabelainfo{
        width: 100%;
    }
    .tdcontato {
        padding-top: 10px;
    }

    .inputcontato {
        border: 1px solid lightgray;
        border-radius: 10px;
        width: 100%;
    }

    .tabelacontato textarea {
        border: 1px solid lightgray;
        width: 100%;
        height: 150px;
    }

    #botaoContato {
        margin-top: 10px;
        float: right;
    }
    #hrcontato{
        margin-right: -20px;
        margin-left: -20px;
    }
</style>

<div class="modal fade" id="contato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Fale conosco</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../backend/fale-conosco.php" method="POST">
                    <table class="tabelainfo">
                        <tr>
                            <td>
                                <i class="fab fa-whatsapp"></i> (19) 9 9986-6642 <br>
                                <i class="fab fa-instagram"></i> jao_cordeir0 <br>
                                <i class="far fa-envelope"></i> joao.cordeiro@sou.fae.br <br>
                            </td>
                            <td>
                                <i class="fab fa-whatsapp"></i> (19) 9 9271-9648 <br>
                                <i class="fab fa-instagram"></i> lucas <br>
                                <i class="far fa-envelope"></i> lucas.gabryel@sou.fae.br <br>

                            </td>
                        </tr>
                    </table>
                    <hr id="hrcontato">
                    <table class="tabelacontato">
                        <tr>
                            <td class="tdcontato"><label>Seu nome</label></td>
                            <td class="tdcontato"><input class="inputcontato" type="text" required name="nome" maxlength="70"></td>
                        </tr>
                        <tr>
                            <td class="tdcontato"><label>Seu e-mail</label></td>
                            <td class="tdcontato"><input class="inputcontato" type="text" required name="email" maxlength="70"></td>
                        </tr>
                        <tr>
                            <td class="tdcontato"><label>Assunto</label></td>
                            <td class="tdcontato"><input class="inputcontato" type="text" required name="assunto" maxlength="70"></td>
                        </tr>
                        <tr>
                            <td class="tdcontato"><label>Mensagem</label></td>
                            <td class="tdcontato"><textarea type="text" required name="mensagem"></textarea></td>
                        </tr>
                    </table>

                    <button id="botaoContato" type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>