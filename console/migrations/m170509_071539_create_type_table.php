<?php

use yii\db\Migration;

/**
 * Handles the creation of table `type`.
 */
class m170509_071539_create_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('type', [
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
        $this->dropTable('type');
    }
}
