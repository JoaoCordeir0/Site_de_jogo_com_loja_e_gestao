<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="img/logo-branca-sem-fundo.png">
    <!--bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Error - 404</title>
    <!--CSS-->    
    <link rel="stylesheet" href="../css/preloader.css">
</head>

<body>

    <!-- in�cio do preloader -->
    <div id="preloader">
        <div class="inner">
            <div class="bolas">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- fim do preloader -->

    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center mt-2">
                <img style="margin-top: 60px;" class="img-fluid" src="../assets/img/4O4_Page_Animation.gif" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <p class="fs-3 erro404">Ocorreu um erro!! P&aacute;gina n&atilde;o encontrada</p>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center mt-2">
                <a style="margin-bottom: 20px;" href="../index"><button type="button" class="btn btn-outline-primary fs-5">Voltar para home</button></a>
            </div>
        </div>
    </div>  

    <!---SCRIPTS-->
    <script src="../../assets/js/preloader.js"></script>
    <!--CSS-->
    <style>
        .erro404{
            color: red;
            font-weight: bold;
        }
        @media(max-width:480px) {
            .erro404 {
                font-size: 12pt !important;
            }
        }
    </style>
</body>

</html>