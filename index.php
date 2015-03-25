<?php
if($POST['submit']) {
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
		$error = true;
	} else {
		$to = "davidjsegovia@yahoo.com";
		
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$message = trim($_POST['comments']);
		
		$subject = "Contact Form";
		
		$messages = "Name: $name \r\n Email: $email \r\n Comments: $comments";
		$headers = "From:" . $name;
		$mailsent = mail($to, $subject, $messages, $headers);
		
		if($mailsent){
			$sent = true;
			}
		}
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset = "utf-8"/>
	<title>Turning Point Church</title>
	<link rel="stylesheet" style="text/css" href="test1.css"/>
</head>
<body>
	<div id = "backpic">
	<div id= "big_wrapper">
		<header id="top_header">
			<img src="white-clouds.jpg"/>
		</header>
		<nav id="top_menu">
			<ul>
				<li><a href = "home.html">Home</a></li>
				<li><a href = "about.html">About Us</a></li>
				<li><a href = "service.html">Service</a></li>
				<li><a href = "prayer.html">Prayer Request</a></li>
				<li><a href = "contact.html">Contact Us</a></li>
				<li><a href = "donate.html">Donate</a></li>
			</ul>
		</nav>
	<div id="new div">
	<section id="main_section">
	<article>
		<header>
			<hgroup class="center_text">
				<h2>Welcome to Turning Point Church!</h2>
			</hgroup>
		</header>
		<br/>
		<p>Need some prayer? Give us a holler! We'll send out your prayer request to people who don't even know you.  </p>
	</article>
</section>
	<aside id="side_news">
		<h3 class="center_text">Prayer Request</h3>
		<?php if($error == true) {?>
		<p class = "error> There was a missing field on the form. Please make sure you enter your details and comments in all the boxes provided.</p>
		<?php } if ($sent == true){ ?>
		<p class = "sent"> Thank you! Your email has been sent successfully. We will reply to you within 24 hours!</p>
		<?php } ?>
		<br/>
		<form name = "contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<p>
		<label for="name">Name:</label></br>
		<input type="text" name="name" id="name">
		</p>
		<p>
			<label for="email">Email:</label></br>
			<input type="email" name="email" id="email">
		</p>
		<p>
			<label for="message">Your question or comment:</label></br>
			<textarea name ="message" id="message" cols="15" rows="10"></textarea>
		</p>
		<p>
			<input type="submit" name="submit" class="submit value="Submit">
	</aside>
	<footer>
	copyright David Segovia 2012
	</footer>
</div>
</div>
</div>
</body>
</html>