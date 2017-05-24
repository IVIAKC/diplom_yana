<?php

use yii\db\Migration;

class m170509_071558_add_foreign_key extends Migration
{
    public function up()
    {
        $this->addForeignKey('FK_issue_type_id','issue','type_id','type','id','cascade','cascade');
        $this->addForeignKey('FK_issue_status_id','issue','status_id','status','id','cascade','cascade');
        $this->addForeignKey('FK_project_status_id','project','status_id','status','id','cascade','cascade');
        $this->addForeignKey('FK_project_type_id','project','type_id','type','id','cascade','cascade');

    }

    public function down()
    {
        $this->dropForeignKey('FK_issue_type_id','issue');
        $this->dropForeignKey('FK_issue_status_id','issue');
        $this->dropForeignKey('FK_project_status_id','project');
        $this->dropForeignKey('FK_project_type_id','project');
    }
}
