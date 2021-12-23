<?php

// $pdo = new PDO('mysql:server=localhost;dbname=note', 'root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection = require_once './connection.php';

$note = $connection->getNOtes();

$currentNote = [
	'id' => '',
	'title' => '',
	'description' => ''
];

if (isset($_GET['id']))
{
	$currentNote = $connection->getNoteById($_GET['id']);
}
//tulis note kt ats
// echo '<pre>';
// var_dump($currentNote);
// echo '</pre>';
?>


<html>
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>My To-Do List</title>
   <link rel="stylesheet" href="style2.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet"> <!--WELCOME FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300&display=swap" rel="stylesheet"> <!--quote-->
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet"><!--note-->

</head>

<body>
	<br>
	<div class="box">
    <header>   
		<h1><strong>My To-do List</strong><br /><small>If you want it, work for it. </small></h1>
		
	</header>
	<br><br>
	

<form>
<a href="main.php?" class="btn"><i class="fa fa-home"></i></a>
<a href="add.php?" class="btn"><i class="fa fa-plus"></i></i></a>

</form>

		
		<br><br>
		<div class="notes">
		
			<?php foreach ($note as $note1):?>
			<div class="note">
				<div class="title">
					<a href="?id=<?php echo $note1['id']?>"><?php echo $note1['title']?></a>
				</div>

				<p><?php echo $note1['create_date']?></p>
				<form action="delete.php" method="post">
					<input type="hidden" name="id" value="<?php echo $note1['id']?>">
					<button class="close"><i class="fa fa-trash"></i></button>
				</form>
			</div>
			<?php endforeach;?>
		</div>



		

</body>	
</div>	
</html>