<option></option>
<?
 
$sql= "SELECT ID_REGRA, DESCRICAO FROM regras";
foreach ($db_heroes->query($sql) as $result) {

?>
    <option <? if($result[0] == $id_regras){ echo 'selected';} ?> value="<?= $result[0]; ?>"><?= $result[1]; ?></option>

<? } ?>

