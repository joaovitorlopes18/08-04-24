<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeJustificativas = $_POST['txtNomeJustificativas']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoJustificativas'];

$str_sql_cadastrar_Justificativas = "insert into 'Justificativas' ('nome','descricao') values
('$txtNomeJustificativas','$txtDescricaoJustificativas');";

try {
    $cadastrar_Justificativas = mysql_query($conexao, $str_sql_cadastrar_Justificativas);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idJustificativas'] = $ultimo_id;
    die('idJustificativas:' . $_SESSION['idJustificativas']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Justificativas. str sql: ' . $str_sql_cadastrar_Justificativas);
}
?>