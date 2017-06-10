<?php

use yii\db\Migration;

/**
 * Handles the creation of table `status`.
 */
class m170509_071546_create_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('status', [
            'id' => $this->primaryKey(11)->unsigned(),
            'name' => $this->string(255)->notNull()->unique(),
            'description' => $this->string(),
            'context_id' => $this->integer(11)->unsigned()->notNull(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('status');
    }
}
