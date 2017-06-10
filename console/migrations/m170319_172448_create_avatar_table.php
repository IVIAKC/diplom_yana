<?php

use yii\db\Migration;

/**
 * Handles the creation of table `avatar`.
 */
class m170319_172448_create_avatar_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('avatar', [
            'id' => $this->primaryKey(11)->unsigned(),
            'file_id' => $this->integer(11)->unsigned()->notNull(),
            'is_system' => $this->boolean()->defaultValue(false),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('avatar');
    }
}
