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
      <h2 id="head" style="margin: 0;">ADMIN</h2>
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

<table class="show" align="center">
		<th>eMail</th>
		<th>Department</th>
	<?php
		require 'connect.php';
		$show = 'select * from user';
		mysql_query($show);
		if($is_query_executed = mysql_query($show))
		{
			while($data = mysql_fetch_assoc($is_query_executed))
			{
				echo "<tr><td>".$data["email"]."</td><td>".$data["department"]."</td>".'</tr>';
			}
		}
		else
		{
			echo "something is wrong";
		}
	?>
</table>





</body>