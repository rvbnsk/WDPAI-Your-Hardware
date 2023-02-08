<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/main.css" type="text/css">
  <title>Your Hardware</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400&display=swap" rel="stylesheet">
</head>



<body class="main_page">
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

  <div class="main">
    <div class="about_me_main">
        <h3>Your Hardware</h3>
        <p id="about_me_main">
        </p>
    </div>
  </div>
  </div>


  <div class="main_text">
  <p>Welcome to Your Hardware, where PC customization is our passion. We're dedicated to providing you with all the information you need to build the ultimate custom PC. From expert advice and tutorials, to product reviews and industry news, we have it all.
          </p>
          <p>Whether you're a seasoned builder or just getting started, our goal is to make the building process easy and enjoyable. Browse our site and get inspired by the latest trends and innovations in the world of PC customization.
          </p>
          <p>Join the community of PC enthusiasts at Your Hardware and start your journey towards building the custom PC of your dreams. We're here to help you every step of the way.
          </p>
        </div>

</body>

</html>