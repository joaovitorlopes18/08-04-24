<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeRisco = $_POST['txtNomeRisco']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoRisco'];

$str_sql_cadastrar_Risco = "insert into 'Risco' ('nome','descricao') values
('$txtNomeRisco','$txtDescricaoRisco');";

try {
    $cadastrar_Risco = mysql_query($conexao, $str_sql_cadastrar_Risco);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idRisco'] = $ultimo_id;
    die('idRisco:' . $_SESSION['idRisco']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Risco. str sql: ' . $str_sql_cadastrar_Risco);
}
?>