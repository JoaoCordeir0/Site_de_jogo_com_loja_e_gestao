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
	0 => 'ID', 
	1 => 'nome',
	2 => 'email',
	3 => 'idade',
	4 => 'acesso',
    5 => 'user',
    6 => 'senha',
	7 => 'dataCadastro',
	8 => 'ip_user'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT ID, nome, idade, user, senha, acesso, email, dataCadastro, ip_user FROM usuarios WHERE acesso != 2";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT ID, nome, idade, user, senha, acesso, email, dataCadastro, ip_user FROM usuarios WHERE acesso != 2";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( nome LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR ID LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR senha LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_usuarios["ID"];
	$dado[] = $row_usuarios["nome"];
	$dado[] = $row_usuarios["email"];
	$dado[] = $row_usuarios["idade"];
	$dado[] = $row_usuarios["user"];
	//$dado[] = $row_usuarios["senha"];    
	$dado[] = '<p>*********</p>';
	$dado[] = $row_usuarios["dataCadastro"];
	$dado[] = $row_usuarios["ip_user"];
	$dado[] = '<a style="text-decoration:none;" href="backend/lembrar_senha?mail='.$row_usuarios['ID'].'"><i style="color:orange;" class="fas fa-paper-plane" title="Enviar senha"></i></a>';
	if($row_usuarios["acesso"] == 0){
		$dado[] = '<a href="functions/controle_usuarios?id='.$row_usuarios['ID'].'"><i style="color:red;" class="fas fa-user-minus"></i></a>';
	}
	if($row_usuarios["acesso"] == 1 || $row_usuarios["acesso"] == 2){
		$dado[] = '<a href="functions/controle_usuarios?id='.$row_usuarios['ID'].'"><i style="color:#198754;" class="fas fa-user-check"></i></a>';
	}
	$dado[] = '<a href="functions/edita_user?id='.$row_usuarios['ID'].'"><i style="color:blue;" class="far fa-edit"></i></a>';	
	$dado[] = '<a href="backend/exclui_user?id='.$row_usuarios['ID'].'"><i style="color:red;" class="far fa-trash-alt"></i></a>';
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
