<!DOCTYPE HTML>
<html>
	<head>
		<title>Preferences - TJ Intranet</title>
		<?php
			include "head.php";
			include "header.php";
			include "intraboxes.php";
		?>
		<div class="pane" id="mainPane">
			<div class="paneHeader">Polls</div>
			<div class="paneContent">
				<ul class="menu">
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane('polls/randomForm.ejs');">Random Form</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane('polls/yearbook.ejs');">Yearbook Poll</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>
