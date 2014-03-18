/*global tinyMCE, tinymce*/
/*jshint forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, strict:true, undef:true, unused:true, curly:true, browser:true, devel:true, maxerr:50 */
(function() {
"use strict";	

	tinymce.create('tinymce.plugins.Shortcodes', {
		
		init : function(ed, url) {
          ed = ed;
            url = url;
		},
		createControl : function(n, cm) {
 
            if(n==='Shortcodes'){
                var mtb = cm.createListBox('Shortcodes', {
                     title : 'Shortcodes',
                     onselect : function(p) {
						var selected = false;
						var content = '';
						switch (p){
						
						case 'H1 Title':{
							
							var h1titleclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(h1titleclass != ''){
								h1titleclass = 'class= "'+h1titleclass+'"';
							}
							
							if (selected) {
								content = '[h1'+h1titleclass+']' + selected + '[/h1]';
							} else {
								content = '[h1'+h1titleclass+'][/h1]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'H2 Title':{
							
							var h2titleclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(h2titleclass != ''){
								h2titleclass = 'class= "'+h2titleclass+'"';
							}
							
							if (selected) {
								content = '[h2'+h2titleclass+']' + selected + '[/h2]';
							} else {
								content = '[h2'+h2titleclass+'][/h2]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'H3 Title':{
							
							var h3titleclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(h3titleclass != ''){
								h3titleclass = 'class= "'+h3titleclass+'"';
							}
							
							if (selected) {
								content = '[h3'+h3titleclass+']' + selected + '[/h3]';
							} else {
								content = '[h3'+h3titleclass+'][/h3]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'H4 Title':{
							
							var h4titleclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(h4titleclass != ''){
								h4titleclass = 'class= "'+h4titleclass+'"';
							}
							
							if (selected) {
								content = '[h4'+h4titleclass+']' + selected + '[/h4]';
							} else {
								content = '[h4'+h4titleclass+'][/h4]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'H5 Title':{
							
							var h5titleclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(h5titleclass != ''){
								h5titleclass = 'class= "'+h5titleclass+'"';
							}
							
							if (selected) {
								content = '[h5'+h5titleclass+']' + selected + '[/h5]';
							} else {
								content = '[h5'+h5titleclass+'][/h5]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'H6 Title':{
							
							var h6titleclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(h6titleclass != ''){
								h6titleclass = 'class= "'+h6titleclass+'"';
							}
							
							if (selected) {
								content = '[h6'+h6titleclass+']' + selected + '[/h6]';
							} else {
								content = '[h6'+h6titleclass+'][/h6]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Row':{
							
							var rowclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(rowclass != ''){
								rowclass = 'class= "'+rowclass+'"';
							}
							
							if (selected) {
								content = '[row'+rowclass+']' + selected + '[/row]';
							} else {
								content = '[row'+rowclass+'][/row]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Full Width':{
							
							var fullwidthclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(fullwidthclass != ''){
								fullwidthclass = 'class= "'+fullwidthclass+'"';
							}
							
							if (selected) {
								content = '[fullwidth'+fullwidthclass+']' + selected + '[/fullwidth]';
							} else {
								content = '[fullwidth'+fullwidthclass+'][/fullwidth]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Half Width':{
							
							var halfwidthclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(halfwidthclass != ''){
								halfwidthclass = 'class= "'+halfwidthclass+'"';
							}
							
							if (selected) {
								content = '[halfwidth'+halfwidthclass+']' + selected + '[/halfwidth]';
							} else {
								content = '[halfwidth'+halfwidthclass+'][/halfwidth]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Third Width':{
							
							var thirdwidthclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(thirdwidthclass != ''){
								thirdwidthclass = 'class= "'+thirdwidthclass+'"';
							}
							
							if (selected) {
								content = '[thirdwidth'+thirdwidthclass+']' + selected + '[/thirdwidth]';
							} else {
								content = '[thirdwidth'+thirdwidthclass+'][/thirdwidth]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '2/3 Width':{
							
							var twothirdwidthclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(twothirdwidthclass != ''){
								twothirdwidthclass = 'class= "'+twothirdwidthclass+'"';
							}
							
							if (selected) {
								content = '[23_width'+twothirdwidthclass+']' + selected + '[/23_width]';
							} else {
								content = '[23_width'+twothirdwidthclass+'][/23_width]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Quarter Width':{
							
							var quarterwidthclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(quarterwidthclass != ''){
								quarterwidthclass = 'class= "'+quarterwidthclass+'"';
							}
							
							if (selected) {
								content = '[quarter_width'+quarterwidthclass+']' + selected + '[/quarter_width]';
							} else {
								content = '[quarter_width'+quarterwidthclass+'][/quarter_width]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '3/4 Width':{
							
							var threequarterwidthclass = prompt("Would you like a custom class?", "");
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if(threequarterwidthclass != ''){
								threequarterwidthclass = 'class= "'+threequarterwidthclass+'"';
							}
							
							if (selected) {
								content = '[34_width'+threequarterwidthclass+']' + selected + '[34_width]';
							} else {
								content = '[34_width'+threequarterwidthclass+'][34_width]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Button':{
	
							var buttonicon = prompt("If You Want An Icon Please Enter Your Icon Code, You can find all icon codes at http://fontawesome.io/3.2.1/icons/", "");
							var buttonsize = prompt("Button Size (Choices: mini, small, medium, large)", "");
							var buttoncolor = prompt("Button Color (Choices: blue, light blue, green, orange, red, black)", "");
							var buttonname = prompt("Please Enter Your Button Name", "");
							var buttonurl = prompt("Button Url/Link - Example: http://www.google.com", "");
							var buttonrounded = prompt("Rounded Button? (Type Yes If You Want Your Button To Be Rounded)", "");
							var buttoniconposition = prompt("Icon Positoin - Leave Blank If Not Having Icon - (Choices: left, right)", "");

							content = '[button icon="' + buttonicon + '" size="' + buttonsize + '" color="' + buttoncolor + '" name="' + buttonname + '" url="' + buttonurl + '" rounded="' + buttonrounded + '" iconposition="' + buttoniconposition + '"]';
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Bootstrap Icons':{
							
							var iconcode = prompt("Icon Code, You can find all icon codes at http://fontawesome.io/3.2.1/icons/", "");
							
							content = '[bootstrap_icons code="' + iconcode + '"]';
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Zocial Icons':{
							
							var iconcode = prompt("Icon Code, You can find icon code examples at http://zocial.smcllns.com/", "");
							var iconlink = prompt("Link To Your Social Site etc, if you do not want a link just use the hash key #", "");
							content = '[zocial_icons code="' + iconcode + '" link="' + iconlink + '"]';
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Alert Boxes':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							var alertcolor = prompt("Alert Color (Choices: red, green, yellow, blue)", "");
							
							if (selected) {
								content = '[alert color="' + alertcolor + '"]' + selected + '[/alert]';
							} else {
								content = '[alert color="' + alertcolor + '"][/alert]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Labels':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							var labelcolor = prompt("Label Color (Choices: blue, green, orange, red, black)", "");
							
							if (selected) {
								content = '[label color="' + labelcolor + '"]' + selected + '[/label]';
							} else {
								content = '[label color="' + labelcolor + '"][/label]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Badges':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							var badgecolor = prompt("Badge Color (Choices: blue, green, orange, red, black)", "");
							
							if (selected) {
								content = '[badge color="' + badgecolor + '"]' + selected + '[/badge]';
							} else {
								content = '[badge color="' + badgecolor + '"][/badge]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Highlight Text':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							var highlightcolor = prompt("Hex Color Of Your Font, EXAMPLE: #ffffff - You can find a hex color generator at http://www.colorpicker.com/", "");
							var highlightbackground = prompt("Hex Color Of Your Font Background, EXAMPLE: #ffffff - You can find a hex color generator at http://www.colorpicker.com/", "");
							
							if (selected) {
								content = '[highlight color="' + highlightcolor + '" background="' + highlightbackground + '"]' + selected + '[/highlight]';
							} else {
								content = '[highlight color="' + highlightcolor + '" background="' + highlightbackground + '"][/highlight]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Dropcap Version 1':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[dropcap1]' + selected + '[/dropcap1]';
							} else {
								content = '[dropcap1][/dropcap1]';
							}

							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Dropcap Version 2':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[dropcap2]' + selected + '[/dropcap2]';
							} else {
								content = '[dropcap2][/dropcap2]';
							}

							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Small Text':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[small]' + selected + '[/small]';
							} else {
								content = '[small][/small]';
							}

							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Lead Text':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[lead]' + selected + '[/lead]';
							} else {
								content = '[lead][/lead]';
							}

							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Horizontal Line':{
							
							content = '[hr]';

							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case 'Bullet Lists Shortcode':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ublflati_bullets]' + selected + '[/ublflati_bullets]';
							} else {
								content = '[ublflati_bullets][/ublflati_bullets]';
							}

							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						}	
                     }
                });
 
				
				// Add some menu items
				var my_shortcodes = ['H1 Title','H2 Title','H3 Title','H4 Title','H5 Title','H6 Title','Row','Full Width','Half Width','Third Width','2/3 Width','Quarter Width','3/4 Width','Button','Bootstrap Icons','Zocial Icons','Alert Boxes','Labels','Badges','Highlight Text','Dropcap Version 1','Dropcap Version 2','Small Text','Lead Text','Horizontal Line','Bullet Lists Shortcode'];
				
				for(var i in my_shortcodes){
                  if (true) {mtb.add(my_shortcodes[i],my_shortcodes[i]);}
				}
				
				return mtb;
            }
            return null;
        }
 
 
	});
	tinymce.PluginManager.add('Shortcodes', tinymce.plugins.Shortcodes);
})();