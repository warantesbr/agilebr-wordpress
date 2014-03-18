/*global tinyMCE, tinymce*/
/*jshint forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, strict:true, undef:true, unused:true, curly:true, browser:true, devel:true, maxerr:50 */
(function() {
"use strict";	

	tinymce.create('tinymce.plugins.Fonts', {
		
		init : function(ed, url) {
          ed = ed;
            url = url;
		},
		createControl : function(n, cm) {
 
            if(n==='Fonts'){
                var mtb = cm.createListBox('Fonts', {
                     title : 'Font Sizes',
                     onselect : function(p) {
						var selected = false;
						var content = '';
						switch (p){
						
						case '8px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="8px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="8px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '10px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="10px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="10px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '12px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="12px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="12px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '14px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="14px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="14px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '16px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="16px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="16px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '18px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="18px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="18px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '20px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="20px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="20px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '22px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="22px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="22px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '24px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="24px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="24px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '26px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="26px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="26px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '28px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="28px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="28px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '30px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="30px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="30px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						case '32px':{
							
							selected = tinyMCE.activeEditor.selection.getContent();
							
							if (selected) {
								content = '[ubl_font_size size="32px"]' + selected + '[/ubl_font_size]';
							} else {
								content = '[ubl_font_size size="32px"][/ubl_font_size]';
							}
							
							tinymce.execCommand('mceInsertContent', false, content);
							
						} // finished shortcode
						break;
						
						}	
                     }
                });
 
				
				// Add some menu items
				var my_fonts = ['8px','10px','12px','14px','16px','18px','20px','22px','24px','26px','28px','30px','32px'];
				
				for(var i in my_fonts){
                  if (true) {mtb.add(my_fonts[i],my_fonts[i]);}
				}
				
				return mtb;
            }
            return null;
        }
 
 
	});
	tinymce.PluginManager.add('Fonts', tinymce.plugins.Fonts);
})();