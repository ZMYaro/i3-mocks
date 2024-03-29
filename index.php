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
		<link rel="stylesheet" type="text/css" href="default/login.css" />
		<link rel="stylesheet" type="text/css" href="light/login.css" />
	</head>
	<body style="background-image:url(public/images/backgrounds/gnome3.jpg);background-size:cover;background-attachment:fixed;">
		<div id="subPane">
			<h2>Today's schedule</h2>
			<p>tjSTAR</p>
			<table>
				<tr>
					<td>Block A</td>
					<td>8:30-9:20</td>
				</tr>
				<tr>
					<td>Block B</td>
					<td>9:30-10:15</td>
				</tr>
				<tr>
					<td>Block C</td>
					<td>10:25-11:10</td>
				</tr>
				<tr>
					<td>Block D</td>
					<td>11:20-12:05</td>
				</tr>
				<tr>
					<td>Lunch</td>
					<td>12:05-12:50</td>
				</tr>
				<tr>
					<td>Block E</td>
					<td>12:50-1:35</td>
				</tr>
				<tr>
					<td>Block F</td>
					<td>1:45-2:30</td>
				</tr>
				<tr>
					<td>Block G</td>
					<td>2:40-3:45</td>
				</tr>
			</table>
		</div>
		<div id="mainPane">
			<a id="logo" href="">Intranet</a>
			<br />
			<br />
			<br />
			<br />
			<form method="POST" action="home">
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
				<button type="submit" onclick="event.preventDefault();window.open('home', '_self');return false;">Login</button>
			</form>
			<br />
			<br />
			<br />
			<br />
			<p style="text-align:center;">
			<img src="https://trustsealinfo.verisign.com/images/vseal.gif" style="-webkit-box-shadow:0px 0px 4px 4px white;-moz-box-shadow:0px 0px 4px 4px white;box-shadow:0px 0px 4px 4px white;margin:auto;" />
			</p>
		</div>
	</body>
</html>
