<?php include("include/rotas.php"); ?>

<a href="#topoSite" id="iconeTopo"><i class="fas fa-chevron-circle-up"></i></a>

<footer class="container-fluid heightfooter">
    <div class="container-fluid">
        <table>
            <tr class="rodapelinks">
                <td rowspan="2"> <img src="assets/img/logo-preta.png" width="100px" alt=""> </td>
                <td>Navegue</td>
                <td>Recursos</td>
                <td>Zombie Store</td>
                <td>Contato</td>
                <td rowspan="2"> <img src="assets/img/idade.png" width="160px" alt=""> <br> <i class="fab fa-steam plataforma"></i> <i class="fab fa-google-play plataforma"></i> <i class="fab fa-playstation plataforma"></i><i class="fab fa-xbox plataforma"></i></td>
            </tr>
            <tr class="rodapelinks">
                <td><a href="<?= $url_index ?>">Home</a> <br>
                    <a href="<?= $url_loja ?>">Loja</a> <br>
                    <a href="<?= $url_comunidade ?>">Comunidade</a>
                </td>

                <td><a href="<?= $url_noticias ?>">Noticias</a><br> Suporte
                    <br> Feedback
                </td>

                <td>Conta Zombie<br>Suporte da loja<br>Rastreamento de pedidos</td>
                <td>
                    <i class="fab fa-whatsapp-square iconrodape"></i>
                    <i class="fab fa-instagram-square iconrodape"></i>
                    <i class="fab fa-discord iconrodape"></i>
                </td>
            </tr>
        </table>
    </div>
</footer>

<footer id="colorblack" class="container-fluid">
    <div class="container-fluid">
        <table id="table2">
            <tr>
                <td id="subfooter">
                    <i class="far fa-copyright"></i> 2021 - Todos os Direitos Reservados a J.L Games Studio
                </td>
            </tr>
        </table>
    </div>
</footer>
</main>

<!--FOOTER MOBILE-->

<div class="MobileFooter">
    <div class="container-fluid">
        <table>
            <tr class="rodapelinks">
                <td><b>Navegue</b></td>
                <td><b>Contato</b></td>
                <td><b>Plataformas</b> </td>
            </tr>
            <tr class="rodapelinks">
                <td>
                    <a href="<?= $url_index ?>">Home</a> <br>
                    <a href="<?= $url_loja ?>">Loja</a> <br>
                    <a href="<?= $url_comunidade ?>">Comunidade</a>
                </td>
                <td>
                    <i class="fab fa-whatsapp-square"></i> <br>
                    <i class="fab fa-instagram-square"></i> <br>
                    <i class="fab fa-discord"></i>
                </td>
                <td>
                    <i class="fab fa-steam"></i> <br>
                    <i class="fab fa-google-play"></i><br>
                    <i class="fab fa-playstation"></i><br>
                    <i class="fab fa-xbox"></i>
                </td>
            </tr>
        </table>
    </div>
    <div id="colorblack" class="container-fluid">
        <div class="container-fluid">
            <table id="table2" style="margin-top: 30px;">
                <tr>
                    <td id="subfooter">
                        <i class="far fa-copyright"></i> 2021 - Todos os Direitos Reservados a J.L Games Studio
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script>
    $("a[href='#topoSite']").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
</script>