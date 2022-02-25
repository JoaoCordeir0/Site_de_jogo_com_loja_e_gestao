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
	1 => 'data_acesso',
	2 => 'pagina_acesso',
	3 => 'host',
	4 => 'ip',
	5 => 'user',
	6 => 'login_gestao',
	7 => 'login_site'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT id, data_acesso, pagina_acesso, host, ip, user, login_gestao, login_site FROM acesso";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT id, data_acesso, pagina_acesso, host, ip, user, login_gestao, login_site FROM acesso WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( ip LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR id LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR data_acesso LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_acesso =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_acesso["id"];
	$dado[] = date("d/m/Y - H:i:s", strtotime($row_acesso["data_acesso"]));
	$dado[] = $row_acesso["pagina_acesso"];
	$dado[] = $row_acesso["host"];
	$dado[] = '<a target="_blank" href="https://ipinfo.io/'.$row_acesso["ip"].'/json">'.$row_acesso["ip"].'</a>';	
	$dado[] = $row_acesso["user"];	
	$dado[] = $row_acesso["login_gestao"];	
	$dado[] = $row_acesso["login_site"];	
    $dado[] = '<a href="backend/exclui_acesso?id='.$row_acesso['id'].'"><i style="color:red;" class="far fa-trash-alt"></i></a>';
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

?>

