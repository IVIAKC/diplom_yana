<?php

use yii\db\Migration;

/**
 * Handles the creation of table `seting`.
 */
class m170610_170205_create_setting_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('setting', [
            'id' => $this->primaryKey(11),
            'is_editable' => $this->smallInteger(1)->defaultValue(0),
            'is_list' => $this->smallInteger(1)->defaultValue(0),
            'alias' => $this->string(50)->unique()->notNull(),
            'name' => $this->string(50)->unique()->notNull(),
            'value' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('setting');
    }
}
