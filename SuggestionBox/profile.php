<!DOCTYPE html>
<head>
	<title>Suggestion Box</title>
	<link rel="icon" href="box.png" type="image/png" sizes="18x18">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="userstyle.css">
</head>

<style type="text/css">
	

</style>

<body>
	<div>
		<ul class="logout">
			<li class="logout"><a href="user_home.php">Home</a>
			</li>
  			<li class="logout"><a href="logout.php">Log Out</a></li>
  		</ul>
	</div>
		<?php
		session_start();
		?>
	<form action="profile_edit.php" method="post">
	<div class="profile" align="center">
		<table>
			<tr><td>
				<label id="head">Email: </label>
			</td><td>
				<input type="text" name="email" value="<?php
				echo $_SESSION['email'];
				?>">
			</td></tr><tr><td>

				<label id="head">Department: </label>
			</td><td>
				<input type="text" name="department" value="<?php
				echo $_SESSION['department'];
				?>">
			</td></tr>
		</table>
			<button type="submit" class="edit">Edit</button>
	</div>
	</form>
	<br><br>
	<h4 id="head">Your Previous Suggestions:</h4>
	<table class="show" align="center">
		<th>ID</th>
		<th>Date &nbsp;&nbsp;&nbsp;&nbsp; Time</th>
		<th>About</th>
		<th>Description</th>
		<th>Action</th>
	<?php
		require 'connect.php';
		$show = 'select * from suggestion where useremail = "'.$_SESSION['email'].'"';
		mysql_query($show);
		if($is_query_executed = mysql_query($show))
		{
			while($data = mysql_fetch_assoc($is_query_executed))
			{
				echo "<tr><td>".$data["id"]."</td><td>".$data["date"]."</td><td>".$data["about"]."</td><td><textarea rows=4 cols=40 style='background-color: #000; color: #fff;'>".$data["description"]."</textarea></td><td>".$data["action"].'</td></tr>';
			}
		}
		else
		{
			echo "something is wrong";
		}
	?>
</table>
<h4 id="head">Your Previous Complaints:</h4>
	<table class="show" align="center">
		<th>ID</th>
		<th>Date &nbsp;&nbsp;&nbsp;&nbsp; Time</th>
		<th>About</th>
		<th>Description</th>
		<th>Action</th>
	<?php
		require 'connect.php';
		$show = 'select * from complaint where useremail = "'.$_SESSION['email'].'"';
		mysql_query($show);
		if($is_query_executed = mysql_query($show))
		{
			while($data = mysql_fetch_assoc($is_query_executed))
			{
				echo "<tr><td>".$data["id"]."</td><td>".$data["date"]."</td><td>".$data["about"]."</td><td><textarea rows=4 cols=40 style='background-color: #000; color: #fff;'>".$data["description"]."</textarea></td><td>".$data["action"].'</td></tr>';
			}
		}
		else
		{
			echo "something is wrong";
		}
	?>
</table>
</body>
</html>