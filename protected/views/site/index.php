<script src="<?php echo Yii::app()->baseUrl?>/js/colResizable.js" type="text/javascript"></script>

<table border="1" style="width: 100%;" id="tbl1">
<tr>
	<th>Column 1 Heading</th>
	<th>Column 2 Heading</th>
</tr>
<tr>
	<td>Row 1: Col 1</td>
	<td>Row 1: Col 2</td>
</tr>
</table>

<script type="text/javascript">
	/*
	$(function() {
		$('table').colResizable();
	});
	*/

	$(function() {
		$('#tbl1').find('tr>th, tr>td').each(function(i) {
			console.log(	i+": "+$(this).width()		);
		});
	});
</script>
