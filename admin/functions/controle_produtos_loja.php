
<?php
	require("../../connection/conexao_msqli.php");

	$id = $_GET['id'];

    if(isset($id)){
       
        require("../../connection/conexao.php");
        $listagem = $conexao->prepare("SELECT * FROM loja WHERE id = '$id'");
        $listagem->execute();

        $lista = $listagem->fetch(PDO::FETCH_ASSOC);

        if($lista['status'] > 0)
        {
            $query = "UPDATE loja SET status = 0 WHERE ID = '$id'";
        }
        if($lista['status'] == 0)
        {
            $query = "UPDATE loja SET status = 1 WHERE ID = '$id'";
        }
        
        $resultado = mysqli_query($conn, $query);

        if(mysqli_affected_rows($conn)){
            echo "<script>window.location = '../loja'</script>";
        }else{
            echo "<script>window.location = '../loja'</script>";
        }
    }else{	
        echo "<script>window.location = '../index'</script>";
    }    

?>