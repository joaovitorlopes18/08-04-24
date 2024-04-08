<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeObjetivo = $_POST['txtNomeObjetivo']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoObjetivo'];

$str_sql_cadastrar_Objetivo = "insert into 'Objetivo' ('nome','descricao') values
('$txtNomeObjetivo','$txtDescricaoObjetivo');";

try {
    $cadastrar_Objetivo = mysql_query($conexao, $str_sql_cadastrar_Objetivo);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idObjetivo'] = $ultimo_id;
    die('idObjetivo:' . $_SESSION['idObjetivo']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Objetivo. str sql: ' . $str_sql_cadastrar_Objetivo);
}
?>