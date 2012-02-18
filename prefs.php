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
			<div class="paneHeader">Preferences</div>
			<div class="paneContent">
				<ul class="menu">
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.general);"><img src="module_icons/prefs.png" alt="" /> General</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.intraboxes);"><img src="module_icons/blank.png" alt="" /> Intraboxes</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.news);"><img src="module_icons/news.png" alt="" /> News</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.eighth);"><img src="module_icons/eighth.png" alt="" /> Eighth Period</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.profiles);"><img src="module_icons/profiles.png" alt="" /> Profiles</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.groups);"><img src="module_icons/groups.png" alt="" /> Groups</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.joke);"><img src="module_icons/blank.png" alt="" /> Other</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>
