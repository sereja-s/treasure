<?php

use yii\db\Migration;

/**
 * Class m210304_190801_add_date_to_comment
 */
class m210304_190801_add_date_to_comment extends Migration
{

	/* 	public function safeUp()
	{
	}


	public function safeDown()
	{
	} */


	// Use up()/down() to run migration code without a transaction.
	public function up()
	{
		$this->addColumn('comment', 'date', $this->date());
	}

	public function down()
	{
		$this->dropColumn('comment', 'date');
	}
}
