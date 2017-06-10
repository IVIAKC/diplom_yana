<?php

use yii\db\Migration;

/**
 * Handles the creation of table `file`.
 */
class m170605_153507_create_file_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('file', [
            'id' => $this->primaryKey(11),
            'filename' => $this->string(50)->notNull(),
            'extension' => $this->string(5)->notNull(),
            'size' => $this->integer()->unsigned()->notNull(),
            'alias' => $this->string(32)->unique()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('file');
    }
}
