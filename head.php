	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
	<!-- zoom in mobile browsers -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.25, user-scalable=0">
	
	<!-- Allows the app to run on iOS without Safari toolbars -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<!-- TODO: favicon line commented out because I have not created the favicon yet -->
	<!-- <link rel="shortcut-icon" rel="image/x-icon" href="public/images/icons/favicon.ico" /> -->
	<link rel="apple-touch-icon-precomposed" href="public/images/icons/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/images/icons/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/images/icons/apple-touch-icon-114x114-precomposed.png" />
	
	<link rel="stylesheet" type="text/css" href="fire.css" />
	<link rel="stylesheet" type="text/css" href="public/css/default/ui.css" />
	<link rel="stylesheet" type="text/css" href="public/css/default/menus.css" />
	<link rel="stylesheet" type="text/css" href="public/css/default/header.css" />
	<link rel="stylesheet" type="text/css" href="public/css/default/intraboxes.css" />
	<link rel="stylesheet" type="text/css" href="public/css/default/panes.css" />
	<link rel="stylesheet" type="text/css" href="public/css/default/home.css" />
	<link rel="stylesheet" type="text/css" href="public/css/default/calendar.css" />
	<link rel="stylesheet" type="text/css" href="public/css/default/news.css" />
	<link rel="stylesheet" type="text/css" href="public/css/default/eighth.css" />
	<link rel="stylesheet" type="text/css" href="public/css/light/ui.css" />
	<link rel="stylesheet" type="text/css" href="public/css/light/menus.css" />
	<link rel="stylesheet" type="text/css" href="public/css/light/header.css" />
	<link rel="stylesheet" type="text/css" href="public/css/light/intraboxes.css" />
	<link rel="stylesheet" type="text/css" href="public/css/light/panes.css" />
	<link rel="stylesheet" type="text/css" href="public/css/light/home.css" />
	<link rel="stylesheet" type="text/css" href="public/css/light/calendar.css" />
	<link rel="stylesheet" type="text/css" href="public/css/light/news.css" />
	<link rel="stylesheet" type="text/css" href="public/css/light/eighth.css" />
	<link rel="stylesheet" type="text/css" href="mock-light.css" />
	
	<script type="text/javascript" src="panes.js"></script>
	<script type="text/javascript" src="weather.js"></script>
	<script type="text/javascript" src="polls_fake.js"></script>
	<script type="text/javascript" src="prefs_fake.js"></script>
	<script type="text/javascript">
		var themeLink = null;
		/**
		 * Temporary function for switching the theme
		 * @param {string} theme - The theme to switch to
		 */
		function switchTheme(theme) {
			//alert(theme); // for debugging
			var cssFiles = ["ui", "menus", "header", "panes", "intraboxes", "home", "news", "calendar", "eighth"];
			for(var i = 0; i < cssFiles.length + 1; i++) {
					try {
						document.head.removeChild(document.head.getElementsByTagName("link")[document.head.getElementsByTagName("link").length - 1]);
					} catch(e) {
						console.log("Could not remove old theme <link> tags");
						return;
					}
			}
			
			for(var i = 0; i < cssFiles.length; i++) {
					themeLink = document.createElement("link");
					themeLink.rel = "stylesheet";
					themeLink.type = "text/css";
					themeLink.href = "public/css/" + theme + "/" + cssFiles[i] + ".css";
					document.head.appendChild(themeLink);
			}
			themeLink = document.createElement("link");
			themeLink.rel = "stylesheet";
			themeLink.type = "text/css";
			themeLink.href = "mock-" + theme + ".css";
			document.head.appendChild(themeLink);
			
			localStorage.theme = theme;
		}
		
		window.addEventListener("load", function() {
			if (!!window.localStorage && localStorage.theme != null) {
				switchTheme(localStorage.theme);
			} else {
				switchTheme("light");
			}
			
			if(document.getElementsByClassName("calendarWeek").length > 0) {
				var today = new Date();
				document.getElementsByClassName("calendarWeek")[1].getElementsByTagName("td")[today.getDay()].id += "today";
				//console.log(document.getElementsByClassName("calendarWeek")[1].getElementsByTagName("td")[today.getDay()]);
			}
		});
	</script>
</head>
<body>
