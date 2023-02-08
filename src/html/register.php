<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/register.css" type="text/css">
  <link rel="stylesheet" href="src/css/main.css" type="text/css">
  <title>Your Hardware</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400&display=swap" rel="stylesheet">
</head>

<body>

<div class="about_me_main">
    <a href="home"><h3>Your Hardware</h3></a>
    <p id="about_me_main">
    </p>
</div>

<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
        <ul>
            <li><a href="home">Main Page</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
            <?php
            session_start();
            if(!$_SESSION["isLoggedIn"]) {
              echo '<li><a href="login">Login</a></li>';
              echo '<li><a href="register">Register</a></li>';
            } else {
              echo '<li><a href="posts">Posts</a></li>';
              echo '<li><a href="addPost">Add Post</a></li>';
              echo '<li><a href="logout">Logout</a></li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
</div>

<form action="register" method="POST">
    <div class="container">
        <div class="">
            <?php 
                if(isset($messages)) {
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
            ?>
        </div>
        <label for="uname">Name</label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="uname">Surname</label>
        <input type="text" placeholder="Enter Surname" name="surname" required>

        <label for="uname">E-mail</label>
        <input type="text" placeholder="Enter E-mail" name="email" required>

        <label for="uname">Password</label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Register</button>
    </div>
</form>

</body>
</html>
