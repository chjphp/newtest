<?php
require ('./Express.php');
header('Content-Type:text/html; charset=utf-8');
$express = new Express();
$result  = $express -> getorder('shunfeng','906343289973');
var_dump($result);
?>