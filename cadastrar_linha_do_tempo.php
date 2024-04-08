<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeLinhaDoTempo = $_POST['txtNomeLinhaDoTempo']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoLinhaDoTempo'];

$str_sql_cadastrar_LinhaDoTempo = "insert into 'LinhaDoTempo' ('nome','descricao') values
('$txtNomeLinhaDoTempo','$txtDescricaoLinhaDoTempo');";

try {
    $cadastrar_LinhaDoTempo = mysql_query($conexao, $str_sql_cadastrar_LinhaDoTempo);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idLinhaDoTempo'] = $ultimo_id;
    die('idLinhaDoTempo:' . $_SESSION['idLinhaDoTempo']);
} catch(Exception) {
    die('Não foi possivel cadastrar o LinhaDoTempo. str sql: ' . $str_sql_cadastrar_LinhaDoTempo);
}
?>