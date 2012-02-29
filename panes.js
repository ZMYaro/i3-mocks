/** The currently selected menu item (null if no sub-pane is open) */
var selectedItem = null;

/**
 * Runs when a menu item that opens a sub-panel is clicked
 * @param {HTMLLIElement} item - The list item that contains the link that was clicked
 */
function clickedTab(item) {
	if(selectedItem != null && selectedItem != item) {
		selectedItem.className = null;
	}
	item.className = "selected";
	selectedItem = item;
}

/**
 * Opens the given template in the main pane
 * @param {string} template - The URL of the template to be displayed
 */
function openPane(template) {
	closeSubPane();
	var mainPane = document.getElementById("mainPane");
	mainPane.innerHTML = new EJS({url:template}).render({});
}

/**
 * Opens a second pane containing the given template
 * @param {string} template - The URL of the template to be displayed in the pane
 */
function openSubPane(template) {
	var subPane = document.getElementById("subPane");
	if (subPane != null) {
		document.body.removeChild(subPane);
	}
	subPane = document.createElement("div");
	
	//subPane.innerHTML = html;
	subPane.innerHTML = new EJS({url:template}).render({});
	
	
	subPane.className = "pane";
	subPane.id = "subPane";
	document.body.appendChild(subPane);
	
	// TODO: Replace this with adding a CSS class
	document.getElementById("mainPane").style.position = "fixed";
}

/**
 * Closes a previously opened sub-pane or does nothing if no sub-pane is open
 */
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
		
		
		if(selectedItem != null) {
			selectedItem.className = null;
			selectedItem = null;
		}
		// TODO: Replace this with adding a CSS class
		document.getElementById("mainPane").style.position = "absolute";
	}
}
