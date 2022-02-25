<?php include("backend/valida_dados_secao.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <?php include("include/head.php") ?>

    <title><?php echo $gestao;
            echo 'Acessos'; ?></title>

    <link rel="stylesheet" href="../assets/css/gestao.css">

    <script type="text/javascript" languege="javascript">
        $(document).ready(function() {
            $('#usuarios').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
                },
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "backend/processa_datatable_acesso.php",
                    "type": "POST"
                }
            });
        });
    </script>
</head>

<body>
    <div class="pagina">
        <?php include("include/menu_superior.php"); ?>
        <?php include("include/menu.php"); ?>

        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu'></i>

                <div class="container-fluid" style="margin:30px auto auto auto;">

                    <div class="tabela">
                        <table id="usuarios" class="display" style="width:100%;">
                            <thead>
                                <tr>
                                    <th class="corTH">ID</th>
                                    <th class="corTH">Data</th>
                                    <th class="corTH">Pagina</th>
                                    <th class="corTH">Host</th>
                                    <th class="corTH">ip</th>
                                    <th class="corTH">Usuario</th>
                                    <th class="corTH">L G</th>
                                    <th class="corTH">L S</th>
                                    <th class="corTH"></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <?php include("include/notificacoes.php"); ?>
                    <?php include("include/apaga_acesso_em_massa.php") ?>
                    <?php include("include/footer.php"); ?>

                </div>
            </div>
        </section>
    </div>
<!-- 
    <div class="mensagemNaoDisponivel">
        <h3 class="mt-3"><i style="color:red;" class="fas fa-exclamation-triangle"></i> ATEN&Ccedil;&Atilde;O</h3>

        <p>A gest&atilde;o n&atilde;o est&aacute; dispon&iacute;vel para celulares ou tablets, acesse a gest&atilde;o por um computador</p>
    </div> -->

    <script src="js/menu.js"></script>
    <script src="js/notificacoes.js"></script>
    <script src="js/relogio.js"></script>
    <script src="../assets/js/sweetalert.js"></script>
    <?php include("functions/alerts.php");?>
    
</body>

</html>