<?php
	header('Content-type: text/xml');
	print(file_get_contents("http://www.google.com/ig/api?weather=alexandria,va"));

//	print('<?xml version="1.0"><data><current_conditions>	<condition data="Overcast"/><temp_f data="32"/><temp_c data="0"/><humidity data="Humidity: 85%"/><icon data="/ig/images/weather/cloudy.gif"/><wind_condition data="Wind: N at 5 mph"/></current_conditions><forecast_conditions><day_of_week data="Sun"/>	<low data="31"/>	<high data="32"/>	<icon data="/ig/images/weather/cloudy.gif"/>	<condition data="Cloudy"/>	</forecast_conditions>	<forecast_conditions>	<day_of_week data="Mon"/>	<low data="40"/>	<high data="49"/>	<icon data="/ig/images/weather/rain.gif"/>	<condition data="Rain"/>	</forecast_conditions>	<forecast_conditions>	<day_of_week data="Tue"/>	<low data="32"/>	<high data="56"/>	<icon data="/ig/images/weather/mostly_sunny.gif"/>	<condition data="Mostly Sunny"/>	</forecast_conditions></data>');
?>
