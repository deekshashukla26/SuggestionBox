<!DOCTYPE html>
<html>
<head>
  <title>Suggestion Box</title>
  <link rel="icon" href="box.png" type="image/png" sizes="18x18">
  <link rel="stylesheet" href="sugbox.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #808080;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 48%;
}

/* Add padding to container elements */


/* Clear floats */
.clearfix{
  background-color: #f1f1f1;
  padding: 10px 10px 10px 10px;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
/* Change styles for cancel button and signup button on extra small screens */

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
      <h3 id="head" style="margin: 0;">SIGN UP</h3>
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
<div id="swag">
<form action="signup_action_page.php" method=post>
  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="dept"><b>Department</b></label>
    <div class="dropdown">
      <select name="dept">
        <option value="MCA">Master of Computer Applications</option>
        <option value="MTech">Master of Technology</option>
        <option value="BTech">Bachelor of Technology</option>
        <option value="MBA">Master of Business Administration</option>
      </select>
    </div>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <label>
      <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
	
  </div>
</form>
</div>
</body>
</html>
