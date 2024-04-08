<?php
require_once('./conexao.php'); // é um código que vai chamar outro arquivo

$txtNomeCusto = $_POST['txtNomeCusto']; // declaração de variavel em php ($) ou colocar na memória do computador   (= significa atribuir uma coisa para outra)
$txtDescricaoPrijeto = $_POST['txtDescriçãoCusto'];

$str_sql_cadastrar_Custo = "insert into 'Custo' ('nome','descricao') values
('$txtNomeCusto','$txtDescricaoCusto');";

try {
    $cadastrar_Custo = mysql_query($conexao, $str_sql_cadastrar_Custo);
    $ultimo_id = $conexao0->insert_id;
    $_SESSION['idCusto'] = $ultimo_id;
    die('idCusto:' . $_SESSION['idCusto']);
} catch(Exception) {
    die('Não foi possivel cadastrar o Custo. str sql: ' . $str_sql_cadastrar_Custo);
}
?>