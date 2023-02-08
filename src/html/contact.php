<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/main.css" type="text/css">
  <link rel="stylesheet" href="src/css/contact.css" type="text/css">
  <title>Kontakt</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400&display=swap" rel="stylesheet">

</head>

<body class="contact">
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


  <div class="contact_form">
		<div class="wrap_contact">
			<form class="contact__form__1">
				<span class="contact_title">
					Contact us!
				</span>

				<div class="form" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

				<div class="form" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

				<div class="form" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>

				<div class="form" data-validate = "Please enter your message">
					<textarea class="message" name="message" placeholder="Your Message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="contact_btn">
					<button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>