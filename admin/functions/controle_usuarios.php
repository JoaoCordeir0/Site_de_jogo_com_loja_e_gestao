<?php
	require("../../connection/conexao_msqli.php");

	$id = $_GET['id'];

    if(isset($id)){
       
        require("../../connection/conexao.php");
        $listagem = $conexao->prepare("SELECT * FROM usuarios WHERE ID = '$id'");
        $listagem->execute();

        $lista = $listagem->fetch(PDO::FETCH_ASSOC);

        if($lista['acesso'] > 0)
        {
            $query = "UPDATE usuarios SET acesso = 0 WHERE ID = '$id'";
        }
        if($lista['acesso'] == 0)
        {
            $query = "UPDATE usuarios SET acesso = 1 WHERE ID = '$id'";
        }
        if($lista['ID'] == 000)
        {
            echo "<script>window.location = '../user'</script>";
        }

        $resultado = mysqli_query($conn, $query);

        if(mysqli_affected_rows($conn)){
            echo "<script>window.location = '../user'</script>";
        }else{
            echo "<script>window.location = '../user'</script>";
        }
    }else{	
        echo "<script>window.location = '../index'</script>";
    }    

?>