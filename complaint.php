<!DOCTYPE html>
<html>
<head>
	<title>Suggestion Box</title>
	<link rel="icon" href="box.png" type="image/png" sizes="18x18">
	<link rel="stylesheet" href="userstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h2 id='head'>Complaint</h2>


<div>
	<ul class="logout">
		<li class="logout"><a href="user_home.php">Home</a>
  		</li>
  		<li class="logout"><a href="logout.php">Log Out</a>
  		</li>
  	</ul>
</div>
<div style="width: 60%; margin: auto;">
<form action="complaint_action.php"  method=post>
<div class="usercontainer">
	<label style="font-size: 15px; color: #fff; opacity: 0.8">Register your Complaints here. We'll get back to you at the earliest.</label>
	<hr color="#000">
	<h4 id="head" >About</h4>
	<textarea class="about" placeholder="(100 characters)" name="about"></textarea>
	<h4 id = "head" >Description</h4>
	<textarea class="complaint" placeholder="(240 characters)" name="desc"></textarea>
</div>
<button type="submit" class="submit">Submit</button>
</form>
</div>
</body>
</html>
