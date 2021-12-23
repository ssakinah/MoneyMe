 <?php
 
 $connection = require_once './connection.php';

$note = $connection->getNOtes();

$currentNote = [
	'id' => '',
	'title' => '',
];

if (isset($_GET['id']))
{
	$currentNote = $connection->getNoteById($_GET['id']);
}
 
 
 
 $connection = require_once './connection.php';
 
 // $connection->addNote($_POST);
 
 // header('Location: displaytodo.php');
 
 ?>




<html>
<head>
   <title>Bla bla bla</title>
   <link rel="stylesheet" href="style2.css" />

</head>
<body>
	<br>
	<div class="box">
    <header>   
		<h1><strong>MoneyMe</strong><br /><small>Bla bla bla.</small></h1>
		
	</header>
	<br><br><br>
<form class="new-note" action="save.php" method="post">
			<input type="hidden" name="id" value="<?php echo $currentNote['id']?>">
			<input type="text" name="title" placeholder="Note title" 
			autocomplete="off" value="<?php echo $currentNote['title']?>">
			
			<button>
					Update
			</button>
		</form>
		
		<br><br>
		<div class="notes">
		
			<?php foreach ($note as $note1):?>
			<div class="note">
				<div class="title">
					<a href="?id=<?php echo $note1['id']?>"><?php echo $note1['title']?></a>
				</div>
				
				<small><?php echo $note1['create_date']?></small>
				<form action="delete.php" method="post">
					<input type="hidden" name="id" value="<?php echo $note1['id']?>">
					<button class="close"><i class="fa fa-trash"></i></button>
				</form>
			</div>
			<?php endforeach;?>
		</div>

</body>
</html> 


<?php

 
 // $connection = require_once './connection.php';
 
 // $connection->addNote($_POST);
 
 // header('Location: displaytodo.php');
 
 ?>


