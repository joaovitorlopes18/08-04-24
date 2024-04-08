<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeStakeholser = $_POST['txtNomeStakeholser']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoStakeholser'];

$str_sql_cadastrar_Stakeholser = "insert into 'Stakeholser' ('nome','descricao') values
('$txtNomeStakeholser','$txtDescricaoStakeholser');";

try {
    $cadastrar_Stakeholser = mysql_query($conexao, $str_sql_cadastrar_Stakeholser);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idStakeholser'] = $ultimo_id;
    die('idStakeholser:' . $_SESSION['idStakeholser']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Stakeholser. str sql: ' . $str_sql_cadastrar_Stakeholser);
}
?>