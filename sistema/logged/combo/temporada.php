<option></option>
<?
 
$sql= "SELECT ID_TEMPORADA, NOME_TEMPORADA FROM temporada";
foreach ($db_heroes->query($sql) as $result) {

?>
    <option <? if($result[0] == $id_temporada){ echo 'selected';} ?> value="<?= $result[0]; ?>"><?= $result[1]; ?></option>

<? } ?>

