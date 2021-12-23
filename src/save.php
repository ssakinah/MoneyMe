<?php

$connection = require_once './connection.php';

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// exit;
$id = $_POST['id'] ?? '';
if ($id)
{
	$connection->updateNote($_POST['id'], $_POST['username'], $_POST);
}
else
{
	$connection->addNote($_POST);
}

// $connection->addNote($_POST);

header('Location: displaytodo.php');

?>