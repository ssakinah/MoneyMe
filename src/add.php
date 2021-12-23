<?php include('server.php'); ?>

<?php
 
 $connection = require_once './connection.php';

$note = $connection->getNOtes();

$currentNote = [
	'id' => '',
	'title' => '',
	'username' => '',
];

if (isset($_GET['id']))
{
	$currentNote = $connection->getNoteById($_GET['id']);
}
 
 
 
 $connection = require_once './connection.php';
 
 // $connection->addNote($_POST);
 
 // header('Location: index.php');
 
 ?>




<html>
<head>
   <title>ADD NEW TO-DO LIST</title>
   <link rel="stylesheet" href="style2.css" />
	<link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet"> <!--WELCOME FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300&display=swap" rel="stylesheet"> <!--quote money-->
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Kaushan+Script&display=swap" rel="stylesheet">
 
</head>
<body>
	<br>
	<div class="box">
    <header>   
		<h1><strong>To-Do List</strong><br /><small>Add new to do list.</small></h1>
		
	</header>
	<br><br><br><br>
		<form class="new-note" action="save.php" method="post">
			<input type="hidden" name="username" value="<?php echo $_SESSION['username']?>">
			<input type="hidden" name="id" value="<?php echo $currentNote['id']?>">
			<input type="text" name="title" placeholder="To-do list" 
			autocomplete="off" value="<?php echo $currentNote['title']?>">
		
			<button>
					Add
			</button>
		</form>
		

</body>
</html> 


<?php

 
 // $connection = require_once './connection.php';
 
 // $connection->addNote($_POST);
 
 // header('Location: index1.php');
 
 ?>


