<?php session_start();?>
<?php include("backend/valida_dados_secao.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include("include/head.php") ?>

    <title><?php echo $gestao;
            echo 'Dashboard'; ?></title>

    <script src="js/chart.js"></script>

    <style>
        #conteudo {
            margin: auto;
        }
    </style>

</head>

<body>
    <div class="pagina">
        <!-- inicio do preloader -->
        <div id="preloader">
            <div class="inner">
                <img src="../assets/img/carregamento_gestao.gif" alt="">
            </div>
        </div>
        <!-- fim do preloader -->

        <?php include("include/menu_superior.php"); ?>
        <?php include("include/menu.php"); ?>

        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu'></i>

                <div id="conteudo">
                    <canvas id="myChart" width="1000" height="400"></canvas>
                    <script>
                        const ctx = document.getElementById('myChart').getContext('2d');
                        const myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['Home', 'Noticias', 'Loja', 'Sobre o jogo', 'Gestao', 'Site', 'Total'],
                                datasets: [{
                                    label: 'Total de acesso no site',
                                    data: [<?php echo $t_home; ?>, <?php echo $t_noticias; ?>, <?php echo $t_loja; ?>, <?php echo $t_sobrejogo; ?>, <?php echo $t_gestao ?>, <?php echo $t_site ?>, <?php echo $total ?>],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(138, 43, 226, 0.2)',
                                        'rgba(173, 255, 47, 0.2)',
                                        'rgba(255, 99, 71, 0.2)',
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(138, 43, 226, 1)',
                                        'rgba(173, 255, 47, 1)',
                                        'rgba(255, 99, 71, 1)',
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>

                    <div class="ajuda">
                        <div class="row">
                            <div class="col">
                                <div class="quadrado1">
                                    <p><i class='bx bxs-home'></i> Total de acessos na home: <?php if ($t_home >= 1) {
                                                                        echo $t_home;
                                                                    } else {
                                                                        echo 0;
                                                                    } ?></p>
                                </div>

                                <div class="quadrado2">
                                    <p><i class='bx bxs-book-open'></i> Total de acessos na página noticias: <?php if ($t_noticias >= 1) {
                                                                                echo $t_noticias;
                                                                            } else {
                                                                                echo 0;
                                                                            } ?></p>
                                </div>

                                <div class="quadrado3">
                                    <p><i class='bx bxs-store'></i> Total de acessos na loja: <?php if ($t_loja >= 1) {
                                                                        echo $t_loja;
                                                                    } else {
                                                                        echo 0;
                                                                    } ?></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="quadrado4">
                                    <p><i class='bx bxs-joystick'></i> Total de acesso na página do jogo: <?php if ($t_sobrejogo >= 1) {
                                                                                echo $t_sobrejogo;
                                                                            } else {
                                                                                echo 0;
                                                                            } ?></p>
                                </div>

                                <div class="quadrado5">
                                    <p><i class='bx bx-slider'></i> Total de logins na gestão: <?php if ($t_gestao >= 1) {
                                                                        echo $t_gestao;
                                                                    } else {
                                                                        echo 0;
                                                                    } ?></p>
                                </div>

                                <div class="quadrado6">
                                    <p><i class='bx bx-sitemap' ></i> Total de logins no site: <?php if ($t_site >= 1) {
                                                                    echo $t_site;
                                                                } else {
                                                                    echo 0;
                                                                } ?></p>
                                </div>
                            </div>
                            <div class="col total">
                                <div class="quadrado7">
                                    <p><i class='bx bx-sort-alt-2'></i> Total: <?php echo $total ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include("include/notificacoes.php"); ?>
                    <?php include("include/footer.php"); ?>
                </div>
            </div>
        </section>
    </div>

    <!-- <div class="mensagemNaoDisponivel">
        <h3 class="mt-3"><i style="color:red;" class="fas fa-exclamation-triangle"></i> ATEN&Ccedil;&Atilde;O</h3>

        <p>A gest&atilde;o n&atilde;o est&aacute; dispon&iacute;vel para celulares ou tablets, acesse a gest&atilde;o por um computador</p>
    </div> -->

    <script src="js/menu.js"></script>
    <script src="js/relogio.js"></script>
    <script src="js/notificacoes.js"></script>
    <script src="../assets/js/preloader.js"></script>
    <script src="../assets/js/sweetalert.js"></script>
    <?php include("functions/alerts.php");?>                                            

</body>

</html>