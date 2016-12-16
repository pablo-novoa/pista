
$(document).ready(function(){
	
	editorRun();

});


function editorRun(){

	if($('#editor').length == 0){ return false; }

	var editor = ace.edit("editor");
	editor.setTheme("ace/theme/chrome");
	editor.getSession().setMode("ace/mode/javascript");
	editor.getSession().setUseWrapMode(true);
	editor.session.setUseWorker(false);

	$(window).resize(function(){
		editor.resize();
	});

	$('.buttonNav_editor').click(function(e){
		e.preventDefault();
		var code = editor.getValue();
		$('#code').val(code);
		$("#formEditor").submit();
	});

}





