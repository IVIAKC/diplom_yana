<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m170319_173920_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(11)->unsigned(),
            'author_id' => $this->integer(11)->unsigned()->notNull(),
            'description' => $this->text(),
            'created_at' => $this->timestamp().' DEFAULT NOW()',
            'updated_at' => $this->timestamp()->defaultValue(null),
            'deleted_at' => $this->timestamp()->defaultValue(null),
            'is_deleted' => $this->boolean()->defaultValue(false),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment');
    }
}
