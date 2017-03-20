<?php

use yii\db\Migration;

/**
 * Handles the creation of table `action`.
 */
class m170319_173602_create_action_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('action', [
            'id' => $this->primaryKey(11)->unsigned(),
            'issue_id' => $this->integer(11)->unsigned(),
            'author_id' => $this->integer(11)->unsigned(),
            'action_type' => $this->string()->notNull(),
            'action_body' => $this->text(),
            'created_at' => $this->timestamp().' DEFAULT NOW()',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('action');
    }
}
