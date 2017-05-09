<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m170319_164539_create_project_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(11)->unsigned(),
            'avatar_id' => $this->integer(11)->unsigned()->defaultValue(null),
            'lead_id' => $this->integer(11)->unsigned()->defaultValue(null),
            'status_id' => $this->integer(11)->unsigned()->defaultValue(null),
            'type_id' => $this->integer(11)->unsigned()->defaultValue(null),
            'priority_id' => $this->integer(11)->unsigned()->defaultValue(null),
            'client_id' => $this->integer(11)->unsigned()->defaultValue(null),
            'name' => $this->string(255)->notNull(),
            'url' => $this->string(255),
            'description' => $this->text(),
            'budget' => $this->decimal(19,2),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'created_at' => $this->timestamp().' DEFAULT NOW()',
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('project');
    }
}
