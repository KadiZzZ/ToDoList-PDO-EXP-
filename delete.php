<?php
require "configue DB.php";


$id = $_GET['id'];

$sql =  'DELETE FROM `tasks` WHERE `id` =?';
$query  = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: /');

?>