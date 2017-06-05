<?php

use yii\db\Migration;

/**
 * Handles the creation of table `linking`.
 */
class m170605_155358_create_linking_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        //Системная таблица
        $this->createTable('linking', [
            'id' => $this->primaryKey(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('linking');
    }
}
