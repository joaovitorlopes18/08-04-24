
<?php

$txt_usuario = trim(@$_POST['txt_usuario']); // trim= comando para tirar espaços do lado direito e esquerdo da variável
$txt_senha = md5(trim(@$_POST['txt_senha'])); // md5= codificar senha, não precisa usar no usuário 

@session_start(); //iniciar sessão 
$_SESSION['usuario'] = NULL; //"_" =variável de ambiente
$_SESSION['senha'] = NULL;
if ($txt_usuario && $txt_senha != '') { //!= operador(vazio). Condicional 
    $_SESSION['usuario'] = $txt_usuario;
    $_SESSION['senha'] = $txt_senha;
}

$host = 'localhost'; // servidor
if ($_SERVER['SERVER_NAME'] != 'localhost') { //condicional 
    $host = 'otherhost.mysql.com'; //nome do host 
}//conector

$db = 'canvas'; //database (banco de dados)
$usuario = 'root'; // variável do usuário
$senha = ''; 

try{
    $conexao = mysqli_connect($host, $usuario, $senha);
    echo 'Conexão bem sucedida.';
} catch (Exception $e){
    die('Não foi possível conectar ao banco de dados. Erro: ' . $e);
}

mysqli_select_db($conexao,$db); // comando para selecionar a base de dados 
?>