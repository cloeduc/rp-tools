CKEDITOR.plugins.add( 'roleplaybuttons', {
    icons: 'abbr',
    init: function( editor ) {
    	editor.addContentsCss( this.path+'content.css' );
		var pluginName = 'roleplaybuttons';
		editor.config.allowedContent ='span(speak,think,describe,yell,murmur);';
		editor.addCommand( 'speak', {
		    exec: function( editor ) {
				editor.insertHtml('<span class="speak">"' + editor.getSelection().getNative() + '"</span>')
		    }
		} );
		editor.addCommand( 'think', {
		    exec: function( editor ) {
				editor.insertHtml('<span class="think">*' + editor.getSelection().getNative() + '*</span>')
		    }
		} );
		editor.addCommand( 'describe', {
		    exec: function( editor ) {
				editor.insertHtml('<span class="describe">' + editor.getSelection().getNative() + '</span>')
		    }
		} );
		editor.addCommand( 'yell', {
		    exec: function( editor ) {
				editor.insertHtml('<span class="describe">' + editor.getSelection().getNative() + '</span>')
		    }
		} );
		editor.addCommand( 'murmur', {
		    exec: function( editor ) {
				editor.insertHtml('<span class="murmur">' + editor.getSelection().getNative() + '</span>')
		    }
		} );
		editor.addCommand( 'outgame', {
		    exec: function( editor ) {
				editor.insertHtml('<span class="outgame">[' + editor.getSelection().getNative() + ']</span>')
		    }
		} );
		editor.ui.addButton('Parler',
		{
		    label: '"Parler"',
		    command: 'speak',
		    toolbar: 'roleplaybuttons,1',
		});
		editor.ui.addButton('Crier',
		{
		    label: 'Crier',
		    command: 'yell',
		    toolbar: 'roleplaybuttons,2',
		});
		editor.ui.addButton('Murmurer',
		{
		    label: 'Murmurer',
		    command: 'murmur',
		    toolbar: 'roleplaybuttons,3'
		});
		editor.ui.addButton('Penser',
		{
		    label: '*Penser*',
		    command: 'think',
		    toolbar: 'roleplaybuttons,4',
		});
		editor.ui.addButton('Decrire',
			{
			    label: 'Décrire',
			    command: 'describe',
			    toolbar: 'roleplaybuttons,5',
			});
		editor.ui.addButton('HorsJeu',
			{
			    label: '[Hors Jeu]',
			    command: 'outgame',
			    toolbar: 'roleplaybuttons,6',
			});
		}
});
var link = $("<link>");
link.attr({
        type: 'text/css',
        rel: 'stylesheet',
        href: CKEDITOR.basePath+'/plugins/roleplaybuttons/content.css'
});
$("head").append( link); 