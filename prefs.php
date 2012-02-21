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
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.general);"><img src="public/images/themes/default/modules/prefs/icon.png" alt="" /> General</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.intraboxes);"><img src="blank.png" alt="" /> Intraboxes</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.news);"><img src="public/images/themes/default/modules/news/icon.png" alt="" /> News</a></li>
<!--					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.eighth);"><img src="public/images/themes/default/modules/eighth/icon.png" alt="" /> Eighth Period</a></li> -->
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.profiles);"><img src="public/images/themes/default/modules/profiles/icon.png" alt="" /> Profiles</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.groups);"><img src="public/images/themes/default/modules/groups/icon.png" alt="" /> Groups</a></li>
					<li><a href="#" onclick="clickedTab(this.parentElement);openSubPane(prefs.joke);"><img src="blank.png" alt="" /> Other</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>
