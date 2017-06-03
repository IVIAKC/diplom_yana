<?php

use yii\db\Migration;

class m170320_133726_add_foreign_key extends Migration
{
    public function up()
    {
        $this->addForeignKey('FK_action_issue_id','action','issue_id','issue','id','cascade','cascade');
        $this->addForeignKey('FK_action_author_id','action','author_id','user','id','cascade','cascade');

//        $this->addForeignKey('FK_issue_type_avatar_id','issue_type','avatar_id','avatar','id','cascade','cascade');
        
//        $this->addForeignKey('FK_avatar_owner_id','avatar','owner_id','user','id','cascade','cascade');

        $this->addForeignKey('FK_file_attachment_issue_id','file_attachment','issue_id','issue','id','cascade','cascade');
        $this->addForeignKey('FK_file_attachment_project_id','file_attachment','project_id','project','id','cascade','cascade');
        $this->addForeignKey('FK_file_attachment_author_id','file_attachment','author_id','user','id','cascade','cascade');
        $this->addForeignKey('FK_file_attachment_comment_id','file_attachment','comment_id','comment','id','cascade','cascade');

        $this->addForeignKey('FK_comment_author_id','comment','author_id','user','id','cascade','cascade');

        $this->addForeignKey('FK_project_type_avatar_id','project_type','avatar_id','avatar','id','cascade','cascade');

        $this->addForeignKey('FK_issue_sub_issue_id','issue','sub_issue','issue','id','cascade','cascade');
        $this->addForeignKey('FK_issue_priority_id','issue','priority_id','priority','id','cascade','cascade');
//        $this->addForeignKey('FK_issue_type_id','issue','type_id','issue_type','id','cascade','cascade');
//        $this->addForeignKey('FK_issue_status_id','issue','status_id','issue_status','id','cascade','cascade');
        $this->addForeignKey('FK_issue_reporter_id','issue','reporter_id','user','id','cascade','cascade');
        $this->addForeignKey('FK_issue_assignee_id','issue','assignee_id','user','id','cascade','cascade');
        $this->addForeignKey('FK_issue_creater_id','issue','creater_id','user','id','cascade','cascade');
        $this->addForeignKey('FK_issue_project_id','issue','project_id','project','id','cascade','cascade');

        $this->addForeignKey('FK_project_avatar_id','project','avatar_id','avatar','id','cascade','cascade');
        $this->addForeignKey('FK_project_lead_id','project','lead_id','user','id','cascade','cascade');
//        $this->addForeignKey('FK_project_status_id','project','status_id','project_status','id','cascade','cascade');
//        $this->addForeignKey('FK_project_type_id','project','type_id','project_type','id','cascade','cascade');
        $this->addForeignKey('FK_project_priority_id','project','priority_id','priority','id','cascade','cascade');
        $this->addForeignKey('FK_project_client_id','project','client_id','client','id','cascade','cascade');
        
    }

    public function down()
    {
        $this->dropForeignKey('FK_action_issue_id','action');
        $this->dropForeignKey('FK_action_author_id','action');

//        $this->dropForeignKey('FK_issue_type_avatar_id','issue_type');

        $this->dropForeignKey('FK_avatar_owner_id','avatar');

        $this->dropForeignKey('FK_file_attachment_issue_id','file_attachment');
        $this->dropForeignKey('FK_file_attachment_project_id','file_attachment');
        $this->dropForeignKey('FK_file_attachment_author_id','file_attachment');
        $this->dropForeignKey('FK_file_attachment_comment_id','file_attachment');

        $this->dropForeignKey('FK_comment_author_id','comment');

        $this->dropForeignKey('FK_project_type_avatar_id','project_type');

        $this->dropForeignKey('FK_issue_sub_issue_id','issue');
        $this->dropForeignKey('FK_issue_priority_id','issue');
//        $this->dropForeignKey('FK_issue_type_id','issue');
//        $this->dropForeignKey('FK_issue_status_id','issue');
        $this->dropForeignKey('FK_issue_reporter_id','issue');
        $this->dropForeignKey('FK_issue_assignee_id','issue');
        $this->dropForeignKey('FK_issue_creater_id','issue');
        $this->dropForeignKey('FK_issue_project_id','issue');

        $this->dropForeignKey('FK_project_avatar_id','project');
        $this->dropForeignKey('FK_project_lead_id','project');
//        $this->dropForeignKey('FK_project_status_id','project');
//        $this->dropForeignKey('FK_project_type_id','project');
        $this->dropForeignKey('FK_project_priority_id','project');
        $this->dropForeignKey('FK_project_client_id','project');

    }
}
