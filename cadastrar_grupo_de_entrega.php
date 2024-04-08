<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeGrupoDeEntrega = $_POST['txtNomeGrupoDeEntrega']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoGrupoDeEntrega'];

$str_sql_cadastrar_GrupoDeEntrega = "insert into 'GrupoDeEntrega' ('nome','descricao') values
('$txtNomeGrupoDeEntrega','$txtDescricaoGrupoDeEntrega');";

try {
    $cadastrar_GrupoDeEntrega = mysql_query($conexao, $str_sql_cadastrar_GrupoDeEntrega);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idGrupoDeEntrega'] = $ultimo_id;
    die('idGrupoDeEntrega:' . $_SESSION['idGrupoDeEntrega']);
} catch(Exception) {
    die('Não foi possivel cadastrar o GrupoDeEntrega. str sql: ' . $str_sql_cadastrar_GrupoDeEntrega);
}
?>