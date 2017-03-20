<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project_type`.
 */
class m170319_171709_create_project_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('project_type', [
            'id' => $this->primaryKey(11)->unsigned(),
            'avatar_id' => $this->integer(11)->unsigned(),
            'name' => $this->string(255)->notNull()->unique(),
            'description' => $this->text(),
            'icon_url' => $this->string(255),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('project_type');
    }
}
