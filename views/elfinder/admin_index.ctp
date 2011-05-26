<?php
echo $this->Html->css('/elfinder/css/elfinder', 'stylesheet', array('media'=>'screen'), false);
$this->Javascript->link("/elfinder/js/elfinder.min", false);
?>
<script type="text/javascript" charset="utf-8"> 
	$().ready(function() {

		$('#elRTE a').hover(
			function () {
				$('#elRTE a').animate({
					'background-position' : '0 -45px'
				}, 300);
			},
			function () {
				$('#elRTE a').delay(400).animate({
					'background-position' : '0 0'
				}, 300);
			}
		);
		
		$('#elRTE a').delay(800).animate({'background-position' : '0 0'}, 300);

		var f = $('#finder').elfinder({
			url : '/<?php echo $this->params['url']['url'] ?>',
			lang : 'en',
			docked : true,
			height: 500,
			editorCallback : function(callback) {
				window.tinymceFileWin.document.forms[0].elements[window.tinymceFileField].value = url;
				window.tinymceFileWin.focus();
				window.close();

			}
		})
	})
</script> 
<div id="finder">finder</div>
