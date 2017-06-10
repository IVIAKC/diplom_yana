<?php

use yii\db\Migration;

/**
 * Handles the creation of table `file_attachment`.
 */
class m170319_173856_create_file_attachment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('file_attachment', [
            'id' => $this->primaryKey(11)->unsigned(),
            'context_id' => $this->integer(11)->unsigned()->notNull(),
            'file_id' => $this->integer(11)->unsigned()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('file_attachment');
    }
}
