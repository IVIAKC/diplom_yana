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
            'filename' => $this->string(255)->unique()->notNull(),
            'content_type' => $this->string(255)->notNull(),
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
