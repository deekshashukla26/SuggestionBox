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

  <form action="profile_edit.php" method="post">
  <div class="profile" align="center">
    <table>
      <tr><td>

        <label>Name: </label>
      </td><td>
        <input type="text" name="name" value="<?php
        session_start();
        echo $_SESSION['name'];
        ?>">
      </td></tr>

      <tr><td>
        <label>Email: </label>
      </td><td>
        <input type="text" name="email" value="<?php
        echo $_SESSION['mail'];
        ?>">
      </td></tr><tr><td>

        <label>Designation: </label>
      </td><td>
        <input type="text" name="desig" value="<?php
        echo $_SESSION['designation'];
        ?>">
      </td></tr>

    </table>
  </div>

  <div style="border-radius: 10px; border: 1px solid;">
    <h4 id="head">DashBoard</h4>
    <hr color="#000">
    <ul class="navbar" align="center" >
        <li class="navbar" style=""><a href="admin_user.php"><b style="font-size: 30px;">&#9731;</b>
          <?php
            require 'connect.php';
            $query = 'SELECT * from user';
            $result=mysql_query($query);
            $count = mysql_num_rows($result);
            echo $count."&nbsp;Users";
          ?>
          </a></li>
          <li class="navbar"><a href="admin_suggest.php" ><b style="font-size: 30px;">&#9993;</b>
          <?php
            require 'connect.php';
            $query = 'SELECT * from suggestion';
            $result=mysql_query($query);
            $count = mysql_num_rows($result);
            echo $count."&nbsp;Suggestions";
          ?>
        </a></li>

        <li class="navbar"><a href="admin_complaint.php"><b style="font-size: 30px;">&#9993;</b>
          <?php
            require 'connect.php';
            $query = 'SELECT * from complaint';
            $result=mysql_query($query);
            $count = mysql_num_rows($result);
            echo $count."&nbsp;Complaints";
          ?>
          </a></li>
    </ul>
  </div>

</body>
</html>