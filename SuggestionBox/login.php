<!DOCTYPE html>
<html>
<head>
  <title>Suggestion Box</title>
  <link rel="icon" href="box.png" type="image/png" sizes="18x18">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="sugbox.css">
</head>
<style>


.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #808080;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>
</head>
<body>
  <div class="header">
<table align="center">
  <tr>
    <td>
      <img src="box.png" width="100" height="100"></img>
    </td>
    <td>
      <h3 id="head" style="margin: 0;">&nbsp;LOGIN</h3>
    </td>
  </tr>
</table>
</div>

  
  

<ul class="navbar">
  <li class="navbar"><a href="index.php">Home</a></li>
  <li class="navbar"><a href="mission.php">Our Mission</a></li>
  <li class="navbar"><a href="login.php" >Login</a></li>
  <li class="navbar"><a href="signup.php" >Sign Up</a></li>
</ul>
<form action="login_action_page.php"  method=post>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <button type="button" class="cancelbtn" onclick="index.html">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>
