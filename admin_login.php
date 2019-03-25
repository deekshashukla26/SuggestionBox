<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <link rel="icon" href="images\box.png" type="image/png" sizes="18x18">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<div class="header">
<table align="center">
  <tr>
    <td>
      <img src="images\box.png" width="100" height="100"></img>
    </td>
    <td>
      <h3 id="head" style="margin: 0;">ADMIN LOGIN</h3>
    </td>
  </tr>
</table>
</div>
<form class="rest" action="admin_login_action.php"  method=post>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>