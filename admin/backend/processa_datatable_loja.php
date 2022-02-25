<?php
$servername = "fdb32.awardspace.net";
$database = "3967906_cordeiro";
$username = "3967906_cordeiro";
$password = "vsk@dm2134";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array( 
	0 => 'id', 
	1 => 'produto',
	2 => 'corProduto',
	3 => 'preco',
	4 => 'qtdProduto',
    5 => 'imgProduto',    
	6 => 'descricao'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT id, produto, corProduto, status, preco, imgProduto, qtdProduto, descricao FROM loja";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT id, produto, corProduto, status, preco, imgProduto, qtdProduto, descricao FROM loja WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( produto LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR id LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR produto LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_loja =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_loja["id"];
	$dado[] = $row_loja["produto"];
	$dado[] = $row_loja["corProduto"];
	$dado[] = $row_loja["descricao"];
	$dado[] = 'R$'.$row_loja["preco"].',00';
	$dado[] = $row_loja["qtdProduto"];
	$dado[] = '<a href="../../assets/img/imgLoja/'.$row_loja["imgProduto"].'"><img style="width:20px;" src="../../assets/img/imgLoja/'.$row_loja["imgProduto"].'"/> Visualizar</a>';    
	if($row_loja["status"] == 0){
		$dado[] = '<a href="functions/controle_produtos_loja?id='.$row_loja['id'].'"><i style="color:red;" class="far fa-times-circle"></i></a>';
	}
	if($row_loja["status"] > 0){
		$dado[] = '<a href="functions/controle_produtos_loja?id='.$row_loja['id'].'"><i style="color:#198754;" class="far fa-check-circle"></i></a>';
	}
	if($row_loja["status"] == 2){
		$dado[] = '<i style="color:#f2da02;" class="fas fa-cart-arrow-down"></i>';
	}
	if($row_loja["status"] == 1 || $row_loja["status"] == 0){
		$dado[] = '<i style="color:red;" class="fas fa-cart-arrow-down"></i>';
	}
	$dado[] = '<a href="functions/edita_loja?id='.$row_loja['id'].'"><i style="color:blue;" class="far fa-edit"></i></a>';	
	$dado[] = '<a href="backend/exclui_produto?id='.$row_loja['id'].'"><i style="color:red;" class="far fa-trash-alt"></i></a>';
	$dados[] = $dado;
}

//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
