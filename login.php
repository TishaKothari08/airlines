<html>
<head>
    <link rel="stylesheet" type="text/css" media="all" href="login.css">
</head>
<body>
<center><h1>Airlines Managment System</h1></center>
<center class="main-container">
<div class="right-container">
<form name="signUpForm" id="signUpForm" method="post" action="">
                    <h2>Login</h2>
                   
                    <div class="control-field">
                        <label>Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter Your Email" required>
                    </div>

                    <div class="control-field">
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required>
                    </div>

                    <div class="remenber">
                        <label>
                            <input type="checkbox" name="checkbox" id="checkbox" >Remenber Me
                        </label>
                    </div>
                    
                    <div class="control-field">
                        <input type="submit" value="Sign In" name="sign" id="button">
                    </div>

                    <div class="control-field">
                        <p>Don't have an account? <a href="#">Sign Up</a></p>
                    </div>  
                </form>
</div>
<?php
    if (isset($_POST['sign']))
    {
        $connection = mysqli_connect("localhost","root","","airlines");
        $query = "select * from login where email = '$_POST[email]' ";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run))
        {
          if($row['email'] == $_POST['email'])
          {
              if($row['password'] == $_POST['password'])
              {
                  header("Location: home.php");
              }
              else
              {
                  echo "Wrong Password";  
              }
          }
          else
          {
                  echo "Wrong Email ID";
          } 
        }  
    } 
?>
</center>
</body>
</html>