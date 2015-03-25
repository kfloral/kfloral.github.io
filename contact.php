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
	<title>Kingdom Floral</title>
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
				<li><a href = "index.html">Home</a></li>
				<li><a href = "about.html">About Us</a></li>
				<li><a href = "fresh.html">Fresh Flowers</a></li>
				<li><a href = "silk.html">Silk/Faux Flowers</a></li>
				<li><a href = "custom.html">Customizing</a></li>
				<li><a href = "contact.php">Contact Us</a></li>
			</ul>
		</nav>
	<div id="new div">
	<section id="main_section">
	<article>
		<header>
			<hgroup class="center_text">
				<h2>Welcome to Kingdom Floral</h2>
			</hgroup>
		</header>
		<br/>
		<p>If you have any questions or comments, please feel free to use the form on the right to ask any question you may have.
			 We typically respond the same day, however please allow up to 24 hours for a response. Thank you for your interest!</p>
			 </br>
			 </br>
		<p> If you would like to contact us by phone or e-mail instead, please call or write to:
			 </br>
			 </br>
			 <p>(210)473-6060</p></br>
			 <p>kingdomfloral@yahoo.com</p>
			 
	</article>
</section>
	<aside id="side_news">
		<h3 class="center_text">Questions or Comments?</h3>
		<?php if($error == true) { ?>
		<p class = "error"> There was a missing field on the form. Please make sure you enter your details and comments in all the boxes provided.</p>
		<?php } if ($sent == true){ ?>
		<p class = "sent"> Thank you! Your email has been sent successfully. We will reply to you within 24 hours!</p>
		<?php } ?>
		<br/>
		<form name = "contact" action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<p>
		<label for="name">Name:</label></br>
		<input type="text" name="name">
		</p>
		<p>
			<label for="email">Email:</label></br>
			<input type="email" name="email">
		</p>
		<p>
			<label for="message">Your question or comment:</label></br>
			<textarea name ="message" cols="15" rows="10"></textarea>
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