<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeProjeto = $_POST['txtNomeProjeto']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoProjeto'];

$str_sql_cadastrar_projeto = "insert into 'projeto' ('nome','descricao') values
('$txtNomeProjeto','$txtDescricaoProjeto');";

try {
    $cadastrar_projeto = mysql_query($conexao, $str_sql_cadastrar_projeto);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idProjeto'] = $ultimo_id;
    die('idProjeto:' . $_SESSION['idProjeto']);
} catch(Exception) {
    die('Não foi possivel cadastrar o projeto. str sql: ' . $str_sql_cadastrar_projeto);
}
?>