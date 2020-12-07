<option value=""></option>
<?
 
$sql_status = "SELECT ID_STATUS, DESCRICAO FROM status_torneio WHERE ID_STATUS IN (".$status.") ORDER BY DESCRICAO DESC";
foreach ($db_heroes->query($sql_status) as $result_status) {

?>
    <option <? if($result_status[0] == $status_){ echo 'selected';} ?> value="<? echo $result_status[0]; ?>"><? echo $result_status[1]; ?></option>

<? } ?>

