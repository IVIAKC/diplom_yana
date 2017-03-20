<?php

use yii\db\Migration;

/**
 * Handles the creation of table `file_attachment`.
 */
class m170319_173856_create_file_attachment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('file_attachment', [
            'id' => $this->primaryKey(11)->unsigned(),
            'issue_id'=> $this->integer(11)->unsigned()->defaultValue(null),
            'project_id'=> $this->integer(11)->unsigned()->defaultValue(null),
            'comment_id'=> $this->integer(11)->unsigned()->defaultValue(null),
            'author_id'=> $this->integer(11)->unsigned(),
            'filename'=> $this->string(255)->notNull(),
            'file_size'=> $this->bigInteger()->unsigned()->notNull(),
            'url'=> $this->string(255),
            'created_at'=> $this->timestamp().' DEFAULT NOW()'

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('file_attachment');
    }
}
