function loadWeather() {
	document.getElementById("weatherIntrabox").innerHTML = "Loading weather...";
	var weatherXHR = new XMLHttpRequest();
	//weatherXHR.open("GET", "http://www.google.com/ig/api?weather=alexandria,va", true);
	weatherXHR.open("GET", "weatherloader.php", true);
	weatherXHR.onreadystatechange = function() {
		if(weatherXHR.readyState == 4) {
			if(weatherXHR.status == 200) {
				//var weatherData = weatherXHR.responseXML;
				var weatherData = (new DOMParser()).parseFromString(weatherXHR.responseText, "text/xml");
				var currentData = weatherData.getElementsByTagName("current_conditions")[0];
				
				var icon = /.*\/(\w*)\.gif/.exec(currentData.getElementsByTagName("icon")[0].getAttribute("data"))[1];
				var missingImgs = {"mostly_cloudy":"partly_cloudy", "mist":"light_rain"}; // weather Google lacks fancy images for and substitutes
				icon = icon in missingImgs ? missingImgs[icon] : icon;
				
				var output = "";
				output += "<img src=\"https://ssl.gstatic.com/onebox/weather/60/";
				output += icon;
				output += ".png\" alt=\"\" style=\"float:left;margin-right:8px;margin-top:4px;\" />";
				
				output += "<span style=\"font-weight:bold;\">";
				output += "<span style=\"font-size:150%;margin-right:0.5em;\">";
				if(localStorage.weatherUnits != "us") {
					output += currentData.getElementsByTagName("temp_c")[0].getAttribute("data");
					output += "°C</span>";
				}  else {
					output += currentData.getElementsByTagName("temp_f")[0].getAttribute("data");
					output += "°F</span>";
				}
				
				output += "<span style=\"font-size:120%;\">";
				output += currentData.getElementsByTagName("condition")[0].getAttribute("data");
				output += "</span>";
				
				output += "</span><br />";
				
				output += "Low: ";
				if(localStorage.weatherUnits != "us") {
					output += Math.round(100 / (212 - 32) * (parseInt(weatherData.getElementsByTagName("forecast_conditions")[0].getElementsByTagName("low")[0].getAttribute("data")) - 32));
					output += "°C | High: ";
					output += Math.round(100 / (212 - 32) * (parseInt(weatherData.getElementsByTagName("forecast_conditions")[0].getElementsByTagName("high")[0].getAttribute("data")) - 32));
					output += "°C<br />";
				} else {
						output += weatherData.getElementsByTagName("forecast_conditions")[0].getElementsByTagName("low")[0].getAttribute("data");
						output += "°F | High: ";
						output += weatherData.getElementsByTagName("forecast_conditions")[0].getElementsByTagName("high")[0].getAttribute("data");
						output += "°F<br />";
				}
				
				output += currentData.getElementsByTagName("wind_condition")[0].getAttribute("data");
				output += "<br />";
				
				output += currentData.getElementsByTagName("humidity")[0].getAttribute("data");
				
				document.getElementById("weatherIntrabox").innerHTML = output;
			} else {
				console.log(weatherXHR.status);
			}
		}
	}
	weatherXHR.send();
}
window.addEventListener("load", function() { loadWeather(); }, false);
