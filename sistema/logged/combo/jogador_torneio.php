<option value=""></option>
<?

$sql_torneio = "SELECT 
ID_INSCRICAO,
NOME_VILA, 
NOME
FROM inscricao
WHERE ID_TORNEIO IN (".$id_torneio.")";
foreach ($db_heroes->query($sql_torneio) as $result_torneio) {

?>
    <option value="<? echo $result_torneio[0]; ?>"><? echo $result_torneio[1]; ?> - <? echo $result_torneio[2]; ?></option>

<? } ?>

