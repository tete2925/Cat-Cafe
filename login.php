<?php
if(isset($_POST['save'])) {             
  if (empty($_POST['name'])){
    $name_error = "Enter Your Name";      
  }
  if (empty($_POST['email'])){
    $email_error = "Enter Your Email";
  }
  if (empty($_POST['password'])){
    $password_error = "Enter Your Password";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
    body {
      background-color: rgb(255, 255, 152);
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 50px;
    }

    .row1 {
      display: flex;
      justify-content: center;
      position: relative;
    }

    .mimg {
      width: 770px;
      height: auto;
    }

    .simg {
      width: 350px;
      height: auto;
      position: absolute;
      top: 130px;
      right: 140px;
    }

    .login {
      background-color: rgb(246, 110, 198);
      padding: 20px;
      margin: 50px auto;
      width: 1200px;
      height: 400px;
      border-radius: 70px 70px 0px 0px;
      margin-bottom: 0px;
    }


	.login label {
  	display: block;
  	width: 400px;
  	margin: 0 auto 5px auto;
  	text-align: left;
  	color: white;
  
	}


    .login input {
      display: block;
      width: 400px;
      margin: 10px auto;
      padding: 8px;
    }

    .login button {
      padding: 8px 20px;
      background-color: #ef0d7e;
      color: white;
      border: none;
      border-radius: 5px;
	  
    }



    .message {
      margin-top: 20px;
      font-weight: bold;
    }

    .mm {
      color: rgb(79, 146, 255);
      border-radius: 10px;
      -webkit-text-stroke: 1px rgb(254, 153, 204);
    }

    .forgot {
      margin-top: 20px;
      margin-left: 389px;
      text-align: left;
	  
    }

    .forgot a {
      color: blue;
      text-decoration: underline;
	  margin-top: 30px;
	  
    }

  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row1">
    <img src="./imgs/coffee-cafe-wall-decal-sticker-coffee-cup-coffee-beans-b37c7d2e740cd2ed666a1d94298d9409.png" class="mimg" alt="Main Image">
    <img src="./imgs/marie-the-walt-disney-company-drawing-photography-maria-fed4491831e42545053a37b47f8192f4.png" class="simg" alt="Inner Image">
  </div>

  <div class="login">
    <b><h1 class="mm"> Meow Manor-Cat Cafe </h1></b>
    <form method="POST" action="login.php">

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
        <span><?php if(isset($name_error)){ echo $name_error; } ?></span>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
        <span><?php if(isset($email_error)){ echo $email_error; } ?></span>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password">
        <span><?php if(isset($password_error)){ echo $password_error; } ?></span>
      </div>

      <button name="save" class="btn btn-primary" style=" left:10px;">Login</button>

	   <div class="forgot ">
        <a class="l" href="forgot_password.php">Forgot Password?</a>
      </div>

    </form>
  </div>
</div>

<div class="message">
<?php
if (isset($_POST['save'])) {
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  if (!isset($name_error) && !isset($email_error) && !isset($password_error)) {
    echo "<span style='color:green;'>Login successful!<br></span>";
    echo "Your name is: " . htmlspecialchars($name) . "<br>";
    echo "Your email is: " . htmlspecialchars($email) . "<br>";
    echo "Your password is: " . htmlspecialchars($password) . "<br>";
  }
}
?>
</div>

</body>
</html>
