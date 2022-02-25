<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<h1>PIX</h1>
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
                <button type="button" class="btn btn-primary" onclick="mostradiv();">GERAR C&Oacute;DIGO</button>
            </div>

            <div id="pix1" style="display: none; margin-top:20px;">
            Aponte sua camera do celular para o qrcode <br>
                <img src="../assets/img/qrcode.jpg" alt="" width="150px" height="150px" style="margin-top: 15px;">
            </div>
            <div id="pix2" class="col-md-12" style="display: none;">
                <table style="margin-top: 30px;">
                    <tr>
                        <td style="width: 150px;">Ou copie o c&oacute;digo</td>
                        <td><input type="text" class="form-control" value="554678901251564433222123458754456745"></td>
                    </tr>
                </table>
            </div>                      
            </div>
        </div>
    </div>

</form>

<script>
    function mostradiv() {
        $('#pix1').css("display", "block")
        $('#pix2').css("display", "block")
    }
</script>