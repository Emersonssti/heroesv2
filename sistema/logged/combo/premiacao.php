<option></option>
<?
 
$sql= "SELECT ID_PREMIACAO, DESCRICAO FROM premiacao";
foreach ($db_heroes->query($sql) as $result) {

?>
    <option <? if($result[0] == $id_premiacao){ echo 'selected';} ?> value="<?= $result[0]; ?>"><?= $result[1]; ?></option>

<? } ?>

