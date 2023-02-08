<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/main.css" type="text/css">
  <link rel="stylesheet" href="src/css/example.css" type="text/css">
  <title>Your Hardware</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400&display=swap" rel="stylesheet">
</head>

<?php
    session_start();
    if(!$_SESSION["isLoggedIn"]) {
      header("Location: http://localhost:8080/login");
    }
?>

<body class="about">

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

  <div class="post">
    <div class="post_picture">
    </div>

    <div class="post_title">
    </div>

    <div class="post_text">
     </div>

  </div>
   
</div>

<script src="src/js/posts_details.js"></script>

</body>
</html>