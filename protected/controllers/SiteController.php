<?php

	class SiteController extends CController {
		public function actionIndex() {
			$model = new Post('search');

			$this->render('index', array('model' => $model));
		}

		public function actionError() {
			echo 'error';
		}
	}
