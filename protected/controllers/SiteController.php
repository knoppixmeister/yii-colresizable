<?php

	class SiteController extends CController {
		public function actionIndex() {
			$model = new Post();

			$this->render('index', array('model' => $model));
		}
	}
