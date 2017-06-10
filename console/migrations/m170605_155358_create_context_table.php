<?php

use yii\db\Migration;

/**
 * Handles the creation of table `linking`.
 */
class m170605_155358_create_context_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        //Системная таблица
        $this->createTable('context', [
            'id' => $this->primaryKey(11)->unsigned(),
            'alias' => $this->string(255)->unique()->notNull(),
            'name' => $this->string(255)->unique()->notNull(),
        ]);

        $this->insert('context',['alias' => 'Комментарии','name' => 'comment']);
        $this->insert('context',['alias' => 'Задачи','name' => 'issue']);
        $this->insert('context',['alias' => 'Проекты','name' => 'project']);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('context');
    }
}
