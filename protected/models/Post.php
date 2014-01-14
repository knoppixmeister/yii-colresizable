<?php

	class Post extends CActiveRecord {
		public function tableName() {
			return 'posts';
		}

		public function search() {
			return new CActiveDataProvider('Post');
		}
	}
