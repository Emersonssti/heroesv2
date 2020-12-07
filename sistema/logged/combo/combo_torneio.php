<option></option>
<?
 
$sql_torneio= "SELECT ID_TORNEIO, NOME FROM torneio WHERE ID_STATUS IN (".$status_torneio.")";
foreach ($db_heroes->query($sql_torneio) as $result_torneio) {

?>
    <option <? if($result_torneio[0] == $torneio_){ echo 'selected';} ?> value="<? echo $result_torneio[0]; ?>"><? echo utf8_encode($result_torneio[1]); ?></option>

<? } ?>

