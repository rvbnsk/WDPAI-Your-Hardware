<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/main.css" type="text/css">
  <link rel="stylesheet" href="src/css/about.css" type="text/css">
  <title>Your Hardware</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400&display=swap" rel="stylesheet">
</head>

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

  <div class="about_text">
    <p>Your Hardware was created to serve the needs of PC customization enthusiasts. Our team of experts is passionate about all things PC building and wants to share that passion with the community.

    Our goal is to provide a comprehensive resource for anyone interested in building their own custom PC, regardless of their level of experience. From tutorials and product reviews, to the latest industry news and trends, we've got you covered.

    At Your Hardware, we believe in delivering high-quality content and resources that can help you achieve your PC building goals. Whether you're a seasoned builder or just starting out, feel free to reach out to us with any questions or ideas.

    Join the community of like-minded PC enthusiasts at Your Hardware and start your journey towards building the custom PC of your dreams.</p>
    <p class="visit">You can visit us on</p>
    <div class="icons">
    <a href="https://www.facebook.com/"><img src="src/media/icons8-facebook-240.png"></a>
    <a href="https://www.instagram.com/"><img src="src/media/icons8-instagram-240.png"></a>
    <a href="https://www.linkedin.com/"><img src="src/media/icons8-linkedin-240.png"></a>
    <a href="https://www.github.com/"><img src="src/media/icons8-github-240.png"></a>
    </div>
</div>

<div class="footer">
    made with ❤️ and ☕️ by <a href="https://www.github.com/rvbnsk">rvbnsk</a>
</div> 

</body>
</html>