<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>KIDS TRACKER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet"> <!--WELCOME FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300&display=swap" rel="stylesheet"> <!--quote money-->
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

</head>
<body>
	<div class="content">
		<?php if (isset($SESSION['success'])): ?>
			<div class="error success"></div>
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
		<?php endif ?>
		
		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
		<?php endif ?>
	</div>

    <section id="banner">
        <script src="script.js"></script>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="displaytodo.php">To do List</a>
            <a href="tracker.html">Tracker</a>
            <a href="goal.html">Goal</a>
        </div>
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <div class="banner-text">
            <h1>MoneyMe</h1>
            <p>The more you learn, the more you earn. </p>
            <div class="banner-btn">
                <a href="add.php"><span></span>ADD TO-DO-LIST</a>
            </div>
        </div>
    </section>

	

    <!--ABOUT-->
    <section id="about">
        <!-- <div class="tittle-text">
            <p>ABOUT US</p>
            <h1>I'd love your feedback!</h1>
            <div class="row">
                <div class="col-md-4 text center">
                    <div class="profile">
                        <img src="image/b13.jpeg" style="width:120px"class="user">
                        <img src="image/b14.jpg" style="width:120px"class="user">
                        <blockquote> ???Life is a journey which never lets you know when and where it will end.???</blockquote>
                        <h1>aqilah syahirah &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp zakirah</h1>
                    </div>
                </div>

            </div>
        </div> -->
        <div class="social-links">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
            <p>From....</p>
        </div>
    </section>

      
</body>
</html>