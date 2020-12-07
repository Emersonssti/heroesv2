<?php
session_start();
$sair =  $_GET["sair"];

if($sair == 1){
session_destroy();

echo 0;
} ?>