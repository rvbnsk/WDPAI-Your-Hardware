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
            <li><a href="posts">Posts</a></li>
            <li><a href="addPost">Add Post</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
            <?php
            session_start();
            if(!$_SESSION["isLoggedIn"]) {
              echo '<li><a href="login">Login</a></li>';
              echo '<li><a href="register">Register</a></li>';
            } else {
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
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id justo auctor, condimentum massa ac, auctor arcu. Morbi consectetur mollis lorem, maximus gravida sem maximus ut. In consequat pretium quam ac hendrerit. Mauris consectetur lectus vel mauris elementum lobortis. Cras lorem quam, blandit nec enim eu, sodales venenatis urna. Integer commodo rutrum fringilla. Sed accumsan ac orci sit amet hendrerit. Sed condimentum, urna a iaculis posuere, tortor diam ullamcorper nunc, quis finibus erat lorem id metus.
  </div>

</body>

</html>