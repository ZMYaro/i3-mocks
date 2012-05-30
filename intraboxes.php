
<div id="intraboxes">
	<div class="intrabox">
		<div class="intraboxHeader">Clock<div style="float:right;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none;">▴&nbsp;&nbsp;▾&nbsp;&nbsp;<span onclick="parentElement.parentElement.parentElement.classList.toggle('collapsed');">−</span>&nbsp;<span onclick="parentElement.parentElement.parentElement.parentElement.removeChild(parentElement.parentElement.parentElement);">&times;</span></div></div>
		<div class="intraboxContent">
			<div id="clock" style="font-size:48px;text-align:center;margin:-0.2em;">11:11:11</div>
			<script type="text/javascript">
				window.addEventListener("load", function() {
					setInterval(function() {
						var date = new Date();
						if(localStorage.clockFormat === "24hour") {
							document.getElementById("clock").innerHTML = (date.getHours() < 10 ? "0" : "") + date.getHours() + ":" + (date.getMinutes() < 10 ? "0" : "") + date.getMinutes() + ":" + (date.getSeconds() < 10 ? "0" : "") + date.getSeconds();
						} else {
							document.getElementById("clock").innerHTML = (date.getHours() % 12 != 0 ? date.getHours() % 12 : "12") + ":" + (date.getMinutes() < 10 ? "0" : "") + date.getMinutes() + ":" + (date.getSeconds() < 10 ? "0" : "") + date.getSeconds() + "<small> " + (date.getHours() > 12 ? "PM" : "AM") + "</small>";
						}
					}, 200);
				}, false);
			</script>
		</div>
	</div>
	<div class="intrabox">
		<div class="intraboxHeader">Weather<div style="float:right;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none;">▴&nbsp;&nbsp;▾&nbsp;&nbsp;<span onclick="parentElement.parentElement.parentElement.classList.toggle('collapsed');">−</span>&nbsp;<span onclick="parentElement.parentElement.parentElement.parentElement.removeChild(parentElement.parentElement.parentElement);">&times;</span></div></div>
		<div class="intraboxContent" id="weatherIntrabox">
			Loading weather...
			<script type="text/javascript" src="weather.js"></script>
		</div>
	</div>
	<div class="intrabox">
		<div class="intraboxHeader">Miscellaneous Form Elements<div style="float:right;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none;">▴&nbsp;&nbsp;▾&nbsp;&nbsp;<span onclick="parentElement.parentElement.parentElement.classList.toggle('collapsed');">−</span>&nbsp;<span onclick="parentElement.parentElement.parentElement.parentElement.removeChild(parentElement.parentElement.parentElement);">&times;</span></div></div>
		<div class="intraboxContent">
			<button>button</button>
			<br/>
			<label for="radio11"><input type="radio" name="radio1" id="radio11" checked="checked"/> This</label>
			<label for="radio12"><input type="radio" name="radio1" id="radio12" /> That</label>
			<br/>
			<label for="checkbox1"><input type="checkbox" id="checkbox1" /> Checkbox!</label>
			<br/>
			<input type="text" value="text field" />
		</div>
	</div>
	<div class="intrabox">
		<div class="intraboxHeader">Scratchpad<div style="float:right;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none;">▴&nbsp;&nbsp;▾&nbsp;&nbsp;<span onclick="parentElement.parentElement.parentElement.classList.toggle('collapsed');">−</span>&nbsp;<span onclick="parentElement.parentElement.parentElement.parentElement.removeChild(parentElement.parentElement.parentElement);">&times;</span></div></div>
		<div class="intraboxContent">
			<textarea style="width:95%;height:7.2em">Type your notes here.</textarea>
		</div>
	</div>
	<div class="intrabox">
		<div class="intraboxHeader">TJ Links<div style="float:right;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;user-select:none;">▴&nbsp;&nbsp;▾&nbsp;&nbsp;<span onclick="parentElement.parentElement.parentElement.classList.toggle('collapsed');">−</span>&nbsp;<span onclick="parentElement.parentElement.parentElement.parentElement.removeChild(parentElement.parentElement.parentElement);">&times;</span></div></div>
		<div class="intraboxContent">
			<a href="http://fcps.blackboard.com" target="_blank">FCPS Blackboard</a>
			<br/>
			<a href="https://iodine.tjhsst.edu/info/resources" target="_blank">Proxy and Library Databases</a>
			<br/>
			<a href="http://academics.tjhsst.edu/careercenter" target="_blank">College & Career Center</a>
			<br/>
			<a href="http://leadership.tjhsst.edu/sga" target="_blank">TJ SGA</a>
			<br/>
			<a href="http://colonialathletics.org/" target="_blank">TJ Athletics</a>
		</div>
	</div>
</div>
