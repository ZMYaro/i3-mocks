<!DOCTYPE HTML>
<html>
	<head>
		<title>Login - TJ Intranet</title>
		
		<!-- zoom in mobile browsers -->
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.25,user-scalable=0">
		
		<!-- Allows the app to run on iOS without Safari toolbars -->
		<meta name="apple-mobile-web-app-capable" content="yes" />
		
		<link rel="apple-touch-icon-precomposed" href="public/images/icons/apple-touch-icon-57x57-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/images/icons/apple-touch-icon-72x72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/images/icons/apple-touch-icon-114x114-precomposed.png" />
		
		<link rel="stylesheet" type="text/css" href="public/css/default/ui.css" />
		<link rel="stylesheet" type="text/css" href="public/css/default/login.css" />
		<link rel="stylesheet" type="text/css" href="public/css/light/ui.css" />
		<link rel="stylesheet" type="text/css" href="public/css/light/login.css" />
		<link rel="stylesheet" type="text/css" href="mock-light.css" />
	</head>
	<body style="background-image:url(public/images/backgrounds/gnome3.jpg);background-size:cover;">
		<div id="loginPane">
			<a id="logo" href="">Intranet</a>
			<br />
			<br />
			<br />
			<br />
			<form method="POST" action="home.php">
				<label for="username">Username</label>
				<br />
				<input type="text" name="username" id="username" class="loginField" />
				<br />
				<br />
				<label for="password">Password</label>
				<br />
				<input type="password" name="password" id="password" class="loginField" />
				<br />
				<br />
				<button type="submit" onclick="event.preventDefault();window.open('home.php', '_self');return false;">Login</button>
			</form>
		</div>
	</body>
</html>
