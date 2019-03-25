<!DOCTYPE html>
<head>
  <title>Admin</title>
  <link rel="icon" href="images\box.png" type="image/png" sizes="18x18">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
	<table align="center">
  <tr>
    <td>
      <img src="images\box.png" width="100" height="100"></img>
    </td>
    <td>
      <h2 id="head" style="margin: 0;">COMPLAINTS</h2>
    </td>
  </tr>
</table>

 <div>
    <ul class="logout">
      <li class="logout"><a href="admin.php">Home</a>
      </li>
        <li class="logout"><a href="admin_logout.php">Log Out</a></li>
      </ul> 
  </div>
</table>
<form action="admin_complaint_action.php" method="post">
<table class="show" align="center">
		<th>ID</th>
		<th>Date &nbsp;&nbsp;&nbsp;&nbsp; Time</th>
		<th>User</th>
		<th>About</th>
		<th>Description</th>
		<th colspan="2">Action</th>
	<?php
		require 'connect.php';
		$show = 'select * from complaint';
		mysql_query($show);
		if($is_query_executed = mysql_query($show))
		{
			while($data = mysql_fetch_assoc($is_query_executed))
			{
				echo "<tr>
					<td>".$data["id"]."</td>
					<td>".$data["date"]."</td>
					<td>".$data["useremail"]."</td>
					<td>".$data["about"]."</td>
					<td>
						<textarea name='desc' rows=4 cols=20 style='background-color: #000; color: #fff;'>".$data["description"].
						"</textarea>
					</td>
					<td>
						<textarea name='act' rows=4 cols=20 style='background-color: #000; color: #fff;'>".$data["action"].
						"</textarea>
					</td>";
			}
		}
		else
		{
			echo "something is wrong";
		}
	?>
	<td>
		<textarea name='act' rows=4 cols=20 style='background-color: #000; color: #fff;' placeholder="Enter New Update"></textarea>
	</td>
</table>
<button align="center" class="submit" type="submit">Perform Actions</button>
</form>



</body>