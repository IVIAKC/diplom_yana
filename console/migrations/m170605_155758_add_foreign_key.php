<?php

use yii\db\Migration;

class m170605_155758_add_foreign_key extends Migration
{
    public function up()
    {

        $this->addForeignKey('FK_project_status_id','project','status_id','status','id','cascade','cascade');
        $this->addForeignKey('FK_project_type_id','project','type_id','type','id','cascade','cascade');

        $this->addForeignKey('FK_comment_author_id','comment','author_id','user','id','cascade','cascade');

        $this->addForeignKey('FK_issue_status_id','issue','status_id','status','id','cascade','cascade');
        $this->addForeignKey('FK_issue_parent_issue_id','issue','parent_issue','issue','id','cascade','cascade');
        $this->addForeignKey('FK_issue_priority_id','issue','priority_id','priority','id','cascade','cascade');
        $this->addForeignKey('FK_issue_reporter_id','issue','reporter_id','user','id','cascade','cascade');
        $this->addForeignKey('FK_issue_assignee_id','issue','assignee_id','user','id','cascade','cascade');
        $this->addForeignKey('FK_issue_creater_id','issue','creater_id','user','id','cascade','cascade');
        $this->addForeignKey('FK_issue_project_id','issue','project_id','project','id','cascade','cascade');

        $this->addForeignKey('FK_project_avatar_id','project','avatar_id','avatar','id','cascade','cascade');
        $this->addForeignKey('FK_project_lead_id','project','lead_id','user','id','cascade','cascade');
        $this->addForeignKey('FK_project_priority_id','project','priority_id','priority','id','cascade','cascade');
        $this->addForeignKey('FK_project_client_id','project','client_id','client','id','cascade','cascade');


        $this->addForeignKey('FK_priority_context_id','priority','context_id','context','id','cascade','cascade');
        $this->addForeignKey('FK_type_context_id','type','context_id','context','id','cascade','cascade');
        $this->addForeignKey('FK_status_context_id','status','context_id','context','id','cascade','cascade');

        $this->addForeignKey('FK_user_avatar_id','user','avatar_id','avatar','id','cascade','cascade');

    }

    public function down()
    {

        $this->dropForeignKey('FK_comment_author_id','comment');

        $this->dropForeignKey('FK_issue_status_id','issue');
        $this->dropForeignKey('FK_issue_parent_issue_id','issue');
        $this->dropForeignKey('FK_issue_priority_id','issue');
        $this->dropForeignKey('FK_issue_reporter_id','issue');
        $this->dropForeignKey('FK_issue_assignee_id','issue');
        $this->dropForeignKey('FK_issue_creater_id','issue');
        $this->dropForeignKey('FK_issue_project_id','issue');

        $this->dropForeignKey('FK_project_avatar_id','project');
        $this->dropForeignKey('FK_project_lead_id','project');
        $this->dropForeignKey('FK_project_priority_id','project');
        $this->dropForeignKey('FK_project_client_id','project');
        $this->dropForeignKey('FK_project_status_id','project');
        $this->dropForeignKey('FK_project_type_id','project');

        $this->dropForeignKey('FK_user_avatar_id','user');

        $this->dropForeignKey('FK_priority_context_id','priority');
        $this->dropForeignKey('FK_type_context_id','type');
        $this->dropForeignKey('FK_status_context_id','status');
    }
}
