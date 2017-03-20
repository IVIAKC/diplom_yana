<?php

use yii\db\Migration;

/**
 * Handles the creation of table `issue_type`.
 */
class m170319_172800_create_issue_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('issue_type', [
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
        $this->dropTable('issue_type');
    }
}
