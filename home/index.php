<!DOCTYPE HTML>
<html>
	<head>
		<title>Home - TJ Intranet</title>
		<?php
			include "../head.php";
			include "../header.php";
			include "../intraboxes.php";
		?>
		<div class="pane" id="mainPane">
			<div class="paneHeader">Welcome, Zachary</div>
			<div class="paneContent">
				<br />
				<header style="font-size:110%;font-weight:bold;">What is happening</header>
				<table border="1" cellspacing="0" cellpadding="4" style="width:100%;">
					<tr class="calendarWeek">
						<th>Sunday</th>
						<th>Monday</th>
						<th>Tuesday</th>
						<th>Wednesday</th>
						<th>Thursday</th>
						<th>Friday</th>
						<th>Saturday</th>
					</tr>
					<tr class="calendarWeek" style="height:96px;">
						<td>
							11pm - <a href="#">Start homework</a>
						</td>
						<td>
							<a href="#">Anchor Day</a>
							<br />
							12am - <a href="#">Everybody hates Mondays</a>
						</td>
						<td>
							<a href="#">Blue Day</a>
						</td>
						<td>
							<a href="#">Red Day</a>
							<br />
							8am - <a href="#">tjSTAR day!</a>
						</td>
						<td>
							<a href="#">Light Blue Day</a>
						</td>
						<td>
							<a href="#">Red Day</a>
							<br />
							12pm - <a href="#">J-Day</a>
							<br />
							4pm - <a href="#">No school until Monday!</a>
						</td>
						<td>
							12pm - <a href="#">Consider waking up</a>
							<br />
							6pm - <a href="#">Weekend-y stuff happening</a>
						</td>
					</tr>
				</table>
				<a href="#">Full calendar &rarr;</a>
				<br />
				<br />
				<div class="homeBox" id="eighthBox">
					<header>The next eighth period is 2012-01-04</header>
					<br />
					You are currently signed up for:
					<table>
						<tr>
							<td><a href="#">Robotics</a></td>
							<td>Room 116</td>
							<td>A block</td>
						</tr>
						<tr>
							<td><a href="#">Systems Administrators</a></td>
							<td>Room 115</td>
							<td>B block</td>
						</tr>
					</table>
					<a href="#">Eighth period schedule &rarr;</a>
				</div>
				<div class="homeBox" id="newsBox">
					<header>Latest news</header>
					<ul>
						<li><a href="#">tjSTAR today!</a></li>
						<li><a href="#">Power outage!  Sparky the squirrel strikes again!</a></li>
						<li><a href="#">J-Day this Friday!</a></li>
						<li><a href="#">Moar newspost!</a></li>
					</ul>
					<a href="news.php">All news &rarr;</a>
				</div>
				<div class="homeBox" id="newsBox">
					<header>Birthdays</header>
					<br />
					<strong>Today:</strong>
					<table>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Age</th>
						</tr>
						<tr>
							<td><img src="https://lh5.googleusercontent.com/-Fs6tczN-8bg/AAAAAAAAAAI/AAAAAAAAFXE/J1g8sV5Pphk/s200-c-k/photo.jpg" style="width:16px;height:16px;" /></td>
							<td><a href="#">Zachary Yaro</a></td>
							<td>15</td>
						</tr>
						<tr>
							<td><img src="https://lh3.googleusercontent.com/-IEH3T6xoEGY/AAAAAAAAAAI/AAAAAAAAAA0/N5Lh56OQHis/s200-c-k/photo.jpg" style="width:16px;height:16px;" /></td>
							<td><a href="#">John Renner</a></td>
							<td>16</td>
						</tr>
						<tr>
							<td><img src="https://lh5.googleusercontent.com/-_Y80-bubBi4/AAAAAAAAAAI/AAAAAAAAAWg/nQ7tx3tAiLg/s200-c-k/photo.jpg" style="width:16px;height:16px;" /></td>
							<td><a href="#">Derek Morris</a></td>
							<td>17</td>
						</tr>
						<tr>
							<td><img src="https://lh4.googleusercontent.com/-5PPQvxMaVnI/AAAAAAAAAAI/AAAAAAAAAAA/h1RA9_ad1zo/s200-c-k/photo.jpg" style="width:16px;height:16px;" /></td>
							<td><a href="#">Andrew Hamilton</a></td>
							<td>18</td>
						</tr>
					</table>
					<strong>Tomorrow:</strong>
					<table>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Age</th>
						</tr>
						<tr>
							<td><img src="https://wave.google.com/wave/static/images/unknown.jpg" style="width:16px;height:16px;" /></td>
							<td><a href="#">John Doe</a></td>
							<td>15</td>
						</tr>
						<tr>
							<td><img src="https://wave.google.com/wave/static/images/unknown.jpg" style="width:16px;height:16px;" /></td>
							<td><a href="#">Cave Johnson</a></td>
							<td>16</td>
						</tr>
						<tr>
							<td><img src="https://wave.google.com/wave/static/images/unknown.jpg" style="width:16px;height:16px;" /></td>
							<td><a href="#">Firstname Last</a></td>
							<td>17</td>
						</tr>
						<tr>
							<td><img src="https://wave.google.com/wave/static/images/unknown.jpg" style="width:16px;height:16px;" /></td>
							<td><a href="#">Firstname Last</a></td>
							<td>18</td>
						</tr>
					</table>
					<a href="#">More birthdays &rarr;</a>
				</div>
			</div>
		</div>
	</body>
</html>
