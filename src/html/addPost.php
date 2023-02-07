<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/add.css" type="text/css">
  <link rel="stylesheet" href="src/css/main.css" type="text/css">
  <title>Your Hardware</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400&display=swap" rel="stylesheet">
</head>

<body class="add">
    <?php
        session_start();
        if(!$_SESSION["isLoggedIn"]) {
        header("Location: http://localhost:8080/login");
        }
    ?>

<div class="about_me_main">
    <a href="main.html"><h3>Your Hardware</h3></a>
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
            <li><a href="posts">Posts</a></li>
            <li><a href="addPost">Add Post</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="register">Register</a></li>
            <li><a href="login">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<form action="addPost" method="POST" ENCTYPE="multipart/form-data">
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
    <input type="title" name="text" placeholder="title">
    <textarea name="description" rows="5" placeholder="description"></textarea>
    <input type="file" name="file">
    <button type="submit">send</button>
  </div>
</form>

</body>
</html>