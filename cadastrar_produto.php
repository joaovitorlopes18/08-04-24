<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeProduto = $_POST['txtNomeProduto']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoProduto'];

$str_sql_cadastrar_Produto = "insert into 'Produto' ('nome','descricao') values
('$txtNomeProduto','$txtDescricaoProduto');";

try {
    $cadastrar_Produto = mysql_query($conexao, $str_sql_cadastrar_Produto);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idProduto'] = $ultimo_id;
    die('idProduto:' . $_SESSION['idProduto']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Produto. str sql: ' . $str_sql_cadastrar_Produto);
}
?>