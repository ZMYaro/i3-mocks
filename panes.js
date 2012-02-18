/** The currently selected menu item (null if no sub-pane is open) */
var selectedTab = null;

/**
 * Runs when a menu item that opens a sub-panel is clicked
 * @param {HTMLLIElement} item - The list item that contains the link that was clicked
 */
function clickedTab(item) {
	if(selectedTab != null && selectedTab != item) {
		selectedTab.className = null;
	}
	item.className = "selected";
	selectedTab = item;
}

/**
 * Opens a second pane containing the given HTML
 * @param {string} html - The HTML to insert into the panel
 */
function openSubPane(html) {
	var subPane = document.getElementById("subPane")
	if (subPane != null) {
		document.body.removeChild(subPane);
	}
	subPane = document.createElement("div");
	subPane.className = "pane";
	subPane.id = "subPane";
	document.body.appendChild(subPane);
	
	subPane.innerHTML = html;
	
	// TODO: Replace this with adding a CSS class
	document.getElementById("mainPane").style.position = "fixed";
}
function closeSubPane() {
	var subPane = document.getElementById("subPane");
	if (subPane != null) {
		subPane.killFunc = function() {
			//this.parentElement.removeChild(this);
			subPane.parentElement.removeChild(subPane);
		};
		/*subPane.addEventListener("webkitAnimationEnd", killFunc, false);
		subPane.addEventListener("msAnimationEnd", killFunc, false);
		subPane.addEventListener("oAnimationEnd", killFunc, false);
		subPane.addEventListener("animationend", killFunc, false);*/
		setTimeout(subPane.killFunc, 200);
		
		subPane.style.WebkitAnimationName = "closePane";
		   subPane.style.MozAnimationName = "closePane";
		    subPane.style.MsAnimationName = "closePane";
		     subPane.style.OAnimationName = "closePane";
		      subPane.style.animationName = "closePane";
		
		
		if(selectedTab != null) {
			selectedTab.className = null;
			selectedTab = null;
		}
		// TODO: Replace this with adding a CSS class
		document.getElementById("mainPane").style.position = "absolute";
	}
}
