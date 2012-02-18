var prefs = {
	"general":'<div class="paneHeader"><button onclick="closeSubPane();">&laquo;</button> General</div><div class="paneContent">Please note that the close buttons at the top-right corners of sub-panes are temporary and will eventually be replaced with something better.</div>',
	"groups":'<div class="paneHeader"><button onclick="closeSubPane();">&laquo;</button> Groups</div>' +
		'<div class="paneContent">' +
		'<br />Clubs<br />' +
		'<button title="Leave this club">&times;</button> Environmental Impact Club<br />' +
		'<button title="Leave this club">&times;</button> Game and Software Development<br />' +
		'<button title="Leave this club">&times;</button> Poi<br />' +
		'<button title="Leave this club">&times;</button> Senior Computer Team<br />' +
		'<br />Academic groups<br />' +
		'<button disabled="disabled" title="You cannot leave this group">&times;</button> AP Lang<br />' +
		'<button title="Leave this club">&times;</button> ASDFclass<br />' +
		'<br />Other groups<br />' +
		'<button disabled="disabled" title="You cannot leave this group">&times;</button> All Students<br />' +
		'<button disabled="disabled" title="You cannot leave this group">&times;</button> Class of 2012<br />' +
		'<button disabled="disabled" title="You cannot leave this group">&times;</button> Male Students' +
		'<br /><br />' +
		'</div>',
	"news":'<div class="paneHeader"><button onclick="closeSubPane();">&laquo;</button> News</div>' +
		'<div class="paneContent">You will receive news for:<br />' +
		'<br />Clubs<br />' +
		'<input type="checkbox" title="Receive news from this club?"> Environmental Impact Club<br />' +
		'<input type="checkbox" checked="checked" title="Receive news from this club?"> Game and Software Development<br />' +
		'<input type="checkbox" checked="checked" title="Receive news from this club?"> Poi<br />' +
		'<input type="checkbox" checked="checked" title="Receive news from this club?"> Senior Computer Team<br />' +
		'<input type="checkbox" checked="checked" title="Receive news from this club?"> Systems Administrators<br />' +
		'<br />Other groups<br />' +
		'<input type="checkbox" disabled="disabled" checked="checked" title="You cannot opt out of this group\'s news"> Class of 2012<br />' +
		'<input type="checkbox" disabled="disabled" checked="checked" title="You cannot opt out of this group\'s news"> Male Students<br />' +
		'<input type="checkbox" disabled="disabled" checked="checked" title="You cannot opt out of this group\'s news"> All Students<br />' +
		'<br />Topics<br />' +
		'<input type="checkbox" title="Receive news with this tag"> Clubs<br />' +
		'<input type="checkbox" disabled="disabled" checked="checked" title="You cannot opt out of this topic"> Emergency alerts<br />' +
		'<input type="checkbox" title="Receive news with this tag"> School events<br />' +
		'</div>',
	"intraboxes":'<div class="paneHeader"><button onclick="closeSubPane();">&laquo;</button> Intraboxes</div><div class="paneContent">[content]</div>',
	"news":'<div class="paneHeader"><button onclick="closeSubPane();">&laquo;</button> News</div>' +
		'<div class="paneContent">You will receive news for:<br />' +
		'<br />Clubs<br />' +
		'<button>&times;</button> Environmental Impact Club<br />' +
		'<button>&times;</button> Game and Software Development<br />' +
		'<button>&times;</button> Poi<br />' +
		'<button>&times;</button> Senior Computer Team<br />' +
		'<br />Groups you cannot leave:<br />' +
		'Class of 2012<br />' +
		'Male Students<br />' +
		'All Students</div>',
	"eighth":'<div class="paneHeader"><button onclick="closeSubPane();">&laquo;</button> Eighth Period</div><div class="paneContent">[content]</div>',
	"profiles":'<div class="paneHeader"><button onclick="closeSubPane();">&laquo;</button> Profiles</div>' +
		'<div class="paneContent"><table>' +
		'<tr><th rowspan="2">Permission</th><th rowspan="2">Parent approved</th><th colspan="3">Privacy level</th></tr><tr><th>Everyone</th><th>Friends</th><th>Staff only</th></tr>' +
		'<tr><td>Picture</td><td style="text-align:center;"><input type="checkbox" checked="checked" disabled="disabled"/></td><td style="text-align:center;"><input type="radio" name="perm1"/></td><td style="text-align:center;"><input type="radio" name="perm1"/></td><td style="text-align:center;"><input type="radio" name="perm1" checked="checked"/></td></tr>' +
		'<tr><td>Address</td><td style="text-align:center;"><input type="checkbox" checked="checked" disabled="disabled"/></td><td style="text-align:center;"><input type="radio" name="perm2"/></td><td style="text-align:center;"><input type="radio" name="perm2"/></td><td style="text-align:center;"><input type="radio" name="perm2" checked="checked"/></td></tr>' +
		'<tr><td>E-mail address</td><td style="text-align:center;"><input type="checkbox" checked="checked" disabled="disabled"/></td><td style="text-align:center;"><input type="radio" name="perm3"/></td><td style="text-align:center;"><input type="radio" name="perm3"/></td><td style="text-align:center;"><input type="radio" name="perm3" checked="checked"/></td></tr>' +
		'<tr><td>Phone number</td><td style="text-align:center;"><input type="checkbox" checked="checked" disabled="disabled"/></td><td style="text-align:center;"><input type="radio" name="perm4"/></td><td style="text-align:center;"><input type="radio" name="perm4"/></td><td style="text-align:center;"><input type="radio" name="perm4" checked="checked"/></td></tr>' +
		'<tr><td>Class schedule</td><td style="text-align:center;"><input type="checkbox" checked="checked" disabled="disabled"/></td><td style="text-align:center;"><input type="radio" name="perm5"/></td><td style="text-align:center;"><input type="radio" name="perm5"/></td><td style="text-align:center;"><input type="radio" name="perm5" checked="checked"/></td></tr>' +
		'<tr><td>Eighth period schedule</td><td style="text-align:center;"><input type="checkbox" checked="checked" disabled="disabled"/></td><td style="text-align:center;"><input type="radio" name="perm6"/></td><td style="text-align:center;"><input type="radio" name="perm6"/></td><td style="text-align:center;"><input type="radio" name="perm6" checked="checked"/></td></tr>' +
		'<tr><td>Social security number</td><td style="text-align:center;"><input type="checkbox" disabled="disabled"/></td><td style="text-align:center;"><input type="radio" disabled="disabled"/></td><td style="text-align:center;"><input type="radio" disabled="disabled"/></td><td style="text-align:center;"><input type="radio" disabled="disabled"/></td></tr>' +
	'</table></div>',
	'joke':'<div class="paneHeader"><button onclick="closeSubPane();">&laquo;</button> Other</div>' +
		'<div class="paneContent">' +
		'<button onclick="document.body.className = \'fire\';">Enable creffett mode</button>' +
		'<br /><br />' +
		'<button onclick="' +
			'document.body.style.WebkitTransform = \'rotate(\' + (Math.random() * 360) + \'deg)\';' + 
			   'document.body.style.MozTransform = \'rotate(\' + (Math.random() * 360) + \'deg)\';' + 
			    'document.body.style.MsTransform = \'rotate(\' + (Math.random() * 360) + \'deg)\';' + 
			     'document.body.style.OTransform = \'rotate(\' + (Math.random() * 360) + \'deg)\';' + 
			      'document.body.style.transform = \'rotate(\' + (Math.random() * 360) + \'deg)\';' + 
		'">Screw everything up</button>'
};
