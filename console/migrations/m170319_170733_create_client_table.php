<?php

use yii\db\Migration;

/**
 * Handles the creation of table `client`.
 */
class m170319_170733_create_client_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('client', [
            'id' => $this->primaryKey(11)->unsigned(),
            'name' => $this->string(255)->unique()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('client');
    }
}
