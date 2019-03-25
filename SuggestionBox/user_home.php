<!DOCTYPE html>
<head>
	<title>Suggestion Box</title>
	<link rel="icon" href="box.png" type="image/png" sizes="18x18">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="userstyle.css">
</head>

<body>
	
	<h2 id="head">
		Hello
		<?php
		session_start();
		echo $_SESSION['email'];
		?>
		<br>
		Department: <?php
		echo $_SESSION['department'];
		?>
	</h2>
	
	<div>
		<ul class="logout">
			<li class="logout"><a href="user_home.php">Home</a>
			</li>
  			<li class="logout"><a href="logout.php">Log Out</a></li>
  		</ul>	
	</div>
	<div style="border: solid 2px; width: 50%; margin: auto; border-radius: 20px;">
		<h4 id="head">DashBoard</h4>
		<hr color="#000">
		<ul class="navbar" align="center" >
  			<li class="navbar" style=""><a href="complaint.php" >File a <br>Complaint</a></li>
  			<li class="navbar"><a href="suggestion.php">Give a <br>Sugestion</a></li>
  			<li class="navbar"><a href="profile.php" ><br>Profile</a></li>
		</ul>
	</div>

</body>
</html>