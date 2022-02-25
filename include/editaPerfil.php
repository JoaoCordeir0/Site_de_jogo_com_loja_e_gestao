<?php
require("connection/conexao_msqli.php");

$idade = 2021 - $lista['idade'];

$email = $_POST['email'];
$user = $_POST['user'];
$name = $_POST['nome'];
$idadeUser = $_POST['idade'];
$senha1 = $_POST['senha1'];
$senha2 = $_POST['senha2'];

$url = $_SERVER['SCRIPT_URI'];

if (isset($email)) {
    $up = "UPDATE usuarios SET email = '$email' WHERE ID = '$id'";
    $resultado_usuario = mysqli_query($conn, $up);
    echo "<script>window.location = '$url'</script>";
}
if (isset($name)) {
    $up = "UPDATE usuarios SET nome = '$name' WHERE ID = '$id'";
    $resultado_usuario = mysqli_query($conn, $up);
    echo "<script>window.location = '$url'</script>";
}
if (isset($user)) {
    $up = "UPDATE usuarios SET user = '$user' WHERE ID = '$id'";
    $resultado_usuario = mysqli_query($conn, $up);
    echo "<script>window.location = '$url'</script>";
}
if (isset($idadeUser)) {
    $up = "UPDATE usuarios SET idade = '$idadeUser' WHERE ID = '$id'";
    $resultado_usuario = mysqli_query($conn, $up);
    echo "<script>window.location = '$url'</script>";
}
if (isset($senha1) && isset($senha2)) {
    if ($senha1 == $senha2) {
        $up = "UPDATE usuarios SET senha = '$senha1' WHERE ID = '$id'";
        $resultado_usuario = mysqli_query($conn, $up);
        echo "<script>window.location = '$url'</script>";
    }
}
?>

<section class="editaPerfil">
    <div class="modal fade" id="editaPerfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Editar perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="d-flex justify-content-center">
                        <img class="rounded-circle" src="../assets/img/default.png" alt="" width="170px" height="155px">
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php echo $lista['nome'] ?>
                    </div>
                    <br>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td> <label class="labelFiltro" for="">E-mail:</label> </td>
                                <td> <input class="inputFiltro" type="text" value="<?php echo $lista['email'] ?>" name="email"> </td>
                            </tr>
                            <tr>
                                <td> <label class="labelFiltro" for="">Nome:</label> </td>
                                <td> <input class="inputFiltro" type="text" value="<?php echo $lista['nome'] ?>" name="nome"> </td>
                            </tr>
                            <tr>
                                <td> <label class="labelFiltro" for="">User:</label> </td>
                                <td> <input class="inputFiltro" type="text" value="<?php echo $lista['user'] ?>" name="user"> </td>
                            </tr>
                            <tr>
                                <td> <label class="labelFiltro" for="">Idade:</label> </td>
                                <td> <input class="inputFiltro" type="text" value="<?php echo $idade ?>" name="idade"> </td>
                            </tr>
                            <tr>
                                <td> <label class="labelFiltro" for="">Nova senha:</label> </td>
                                <td> <input class="inputFiltro" type="password" minlength="6" maxlength="12" name="senha1" value="<?php echo $lista['senha']; ?>"> </td>
                            </tr>
                            <tr>
                                <td> <label class="labelFiltro" for="">Confirme a nova senha:</label> </td>
                                <td> <input class="inputFiltro" type="password" minlength="6" maxlength="12" name="senha2" value="<?php echo $lista['senha']; ?>"> </td>
                            </tr>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>