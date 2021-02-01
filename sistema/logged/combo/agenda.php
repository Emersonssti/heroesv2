<option></option>
<?
 
$sql= "SELECT ID_AGENDA, DESCRICAO FROM agenda";
foreach ($db_heroes->query($sql) as $result) {

?>
    <option <? if($result[0] == $id_agenda){ echo 'selected';} ?> value="<?= $result[0]; ?>"><?= $result[1]; ?></option>

<? } ?>

