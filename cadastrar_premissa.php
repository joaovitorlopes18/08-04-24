<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomePremissa = $_POST['txtNomePremissa']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoPremissa'];

$str_sql_cadastrar_Premissa = "insert into 'Premissa' ('nome','descricao') values
('$txtNomePremissa','$txtDescricaoPremissa');";

try {
    $cadastrar_Premissa = mysql_query($conexao, $str_sql_cadastrar_Premissa);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idPremissa'] = $ultimo_id;
    die('idPremissa:' . $_SESSION['idPremissa']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Premissa. str sql: ' . $str_sql_cadastrar_Premissa);
}
?>