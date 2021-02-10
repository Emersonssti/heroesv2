<option></option>
<?
 
$sql= "SELECT ID_STREAMER, NOME_CANAL FROM streamer ORDER BY NOME_CANAL";
foreach ($db_heroes->query($sql) as $result) {

?>
    <option <? if($result[0] == $id_canal_){ echo 'selected';} ?> value="<?= $result[0]; ?>"><?= $result[1]; ?></option>

<? } ?>

