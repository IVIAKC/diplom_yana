<?php

use yii\db\Migration;

/**
 * Handles the creation of table `issue`.
 */
class m170319_172827_create_issue_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('issue', [
            'id' => $this->primaryKey(11)->unsigned(),
            'parent_issue' => $this->integer(11)->unsigned()->defaultValue(null),
            'priority_id' => $this->integer(11)->unsigned()->notNull(),
            'type_id' => $this->integer(11)->unsigned()->notNull(),
            'status_id' => $this->integer(11)->unsigned()->notNull(),
            'reporter_id' => $this->integer(11)->unsigned(),
            'assignee_id' => $this->integer(11)->unsigned(),
            'creater_id' => $this->integer(11)->unsigned()->notNull(),
            'project_id' => $this->integer(11)->unsigned()->notNull(),
            'summary' => $this->string(),
            'description' => $this->text(),
            'created_at' => $this->timestamp().' DEFAULT NOW()',
            'updated_at' => $this->timestamp()->defaultValue(null),
            'is_deleted' => $this->boolean()->defaultValue(false),
            'duedate'=> $this->timestamp()->defaultValue(null),
            'estimate'=> $this->timestamp()->defaultValue(null),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('issue');
    }
}
