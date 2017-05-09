<?php

use yii\db\Migration;

/**
 * Handles the creation of table `issue_status`.
 */
class m170319_172811_create_issue_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('issue_status', [
            'id' => $this->primaryKey(11)->unsigned(),
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
        $this->dropTable('issue_status');
    }
}
