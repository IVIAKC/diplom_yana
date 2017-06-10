<?php

use yii\db\Migration;

/**
 * Handles the creation of table `priority`.
 */
class m170319_170843_create_priority_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('priority', [
            'id' => $this->primaryKey(11)->unsigned(),
            'name' => $this->string(255)->notNull()->unique(),
            'description' => $this->text(),
            'color' => $this->string(255)->defaultValue('#ffffff'),
            'context_id' => $this->integer(11)->unsigned()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('priority');
    }
}
