<?php include('server.php'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css"_>
</head>

<body>
	<div class="header">
		<h2>HOME PAGE</h2>
	</div>
	
	<div class="content">
		<?php if (isset($SESSION['success'])): ?>
			<div class="error success"></div>
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		
		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
		<?php endif ?>
		
	</div>
	
</body>

</html>