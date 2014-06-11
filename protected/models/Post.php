<?php

	class Post extends CActiveRecord {
		public function tableName() {
			return 'posts';
		}

		public function rules() {
			return	array(
						array('id', 'type', 'type' => 'integer'),
					);
		}

		public function search() {
			//$criteria = new CDbCriteria;

			//if(!empty($this->id)) $criteria->compare('id', $this->id, true);

			return new CActiveDataProvider(
							'Post',
							array(
								//'criteria'		=>	$criteria,
								'pagination'	=>	array(
														'pageSize'	=>	1,
													),
							)
						);
		}
	}
