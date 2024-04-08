<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeEquipe = $_POST['txtNomeEquipe']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoEquipe'];

$str_sql_cadastrar_Equipe = "insert into 'Equipe' ('nome','descricao') values
('$txtNomeEquipe','$txtDescricaoEquipe');";

try {
    $cadastrar_Equipe = mysql_query($conexao, $str_sql_cadastrar_Equipe);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['id Equipe'] = $ultimo_id;
    die('idEquipe:' . $_SESSION['id Equipe']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Equipe. str sql: ' . $str_sql_cadastrar_Equipe);
}
?>