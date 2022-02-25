<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<h1>BOLETO</h1>
<form class="row" name="formpagamento" method="POST">
    <div class="col-md-6">
        <label class="form-label">Digite seu nome completo</label>
        <input type="text" class="form-control" id="validationCustom03" required>
    </div>
    <div class="col-md-4">
        <label class="form-label">Digite seu CPF</label>
        <input type="text" class="form-control" id="validationCustom05" required>
    </div> <br><br>
    <div class="col-md-6">
        <label class="form-label">Informe sua data de nascimento</label>
        <input type="date" class="form-control" id="validationCustom05" required>
    </div>

    <div class="row">
        <div class="col">
            <div class="col-md-6 mt-2">
                <button type="button" class="btn btn-primary" onclick="mostraboleto();">GERAR BOLETO</button>
            </div>

            <div id="msg1" class="col-md-12" style="display: none;">
                <table style="margin-top: 30px;">
                    <tr>
                        <td style="width: 120px;">Copie o c&oacute;digo</td>
                        <td><input type="text" class="form-control" value="123456789012555444332221568754456745"></td>
                    </tr>
                </table>
            </div>
            <div id="msg2" class="col-md-6" style="display: none; margin-top:10px;">
            <table>
                <tr>
                    <td style="width: 120px;">Baixe o boleto</td>
                    <td> <a target="_blank" href="http://cordeirovsk.com.br/img/pdf/boleto.pdf"><button type="button" class="btn btn-outline-primary">Clique aqui</button></a></td>
                </tr>
            </table>
               
            </div>
        </div>
    </div>

</form>

<script>
    function mostraboleto() {
        $('#msg1').css("display", "block")
        $('#msg2').css("display", "block")
    }
</script>