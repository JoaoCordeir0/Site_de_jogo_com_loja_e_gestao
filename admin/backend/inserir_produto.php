<?php
require("../../connection/conexao_msqli.php");

$msgseguranca = 'A SEGURANÇA É FODA AMIGÃO, CAI FORA';

$produto = $_POST['produto'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];
$qtd = $_POST['qtd'];
$status = $_POST['status'];
$desc = $_POST['desc'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_COOKIE["Identifica_user"])) {
    if (isset($produto) && isset($cor) && isset($preco) && isset($qtd) && isset($status) && isset($desc)) {
        $sql = "INSERT INTO loja (produto, corProduto, qtdProduto, preco, status, descricao) VALUES ('$produto', '$cor', '$qtd', '$preco', '$status', '$desc')";
        if (mysqli_query($conn, $sql)) {
            if (isset($_FILES['imgloja'])) {

                $pasta = "../../assets/img/imgLoja/";

                $tmp_name = $_FILES["imgloja"]["tmp_name"];
                $nome = $_FILES["imgloja"]["name"];

                $tamanho_imagem = $_FILES['imgloja']['size'];
                $tamanho = round($tamanho_imagem / 1024);

                $cod = date("dmYHis") . "-" . $_FILES["imgloja"]["name"];

                if ($tamanho < 1024) {
                    $uploadfile = $pasta . basename($cod);

                    if (move_uploaded_file($tmp_name, $uploadfile)) {                       
                        $up = "UPDATE loja SET imgProduto = '$cod' ORDER BY id DESC LIMIT 1";  
                            $query = mysqli_query($conn, $up);
                    } else {
                        print "Não foi possivel carregar o arquivo" . $nome;
                    }
                }
            }
            echo "<script>window.location = '../loja'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    } else {
        echo "
        <script type='text/javascript'>              
            alert('$msgseguranca')
        </script>";
        echo "<script>window.location = '../../index'</script>";
    }
} else {
    echo "
    <script type='text/javascript'>              
        alert('$msgseguranca')
    </script>";
    echo "<script>window.location = '../../index'</script>";
}
