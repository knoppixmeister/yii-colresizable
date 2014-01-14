<script src="<?php echo Yii::app()->baseUrl?>/js/colResizable-1.3-custom.js" type="text/javascript"></script>

<?php
	$this->widget(
		'zii.widgets.grid.CGridView',
		array(
			//'cssFile'			=>	false,
			'afterAjaxUpdate'	=>	'lala',
			'dataProvider'		=>	$model->search(),
			'filter'			=>	$model,
			'columns'			=>	array(
										array(
											'class'				=>	'CCheckBoxColumn',
											'selectableRows'	=>	2,
											'headerHtmlOptions'	=>	array('style' => 'width: 30px;'),
										),
										'id',
										'text',
										array(            // display a column with "view", "update" and "delete" buttons
											'class'	=>	'CButtonColumn',
										),
									),
		)
	);
?>

<script type="text/javascript">
	$(function() {
		lala();
	});

	function lala() {
		$('table').colResizable();
	}

	/*
	$(function() {
		$('#tbl1').find('tr>th, tr>td').each(function(i) {
			console.log(	i+": "+$(this).width()		);
		});
	});
	*/
</script>

<style>
	tr.filters td {
		padding-right: 5px;
		padding-left: 5px;
	}
</style>
