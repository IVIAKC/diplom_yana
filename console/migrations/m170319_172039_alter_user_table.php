<?php

use yii\db\Migration;

class m170319_172039_alter_user_table extends Migration
{
    public function up()
    {
        $this->alterColumn('user','id',$this->integer(11)->unsigned());
        $this->addColumn('user','first_name',$this->string(255)->notNull());
        $this->addColumn('user','middle_name',$this->string(255));
        $this->addColumn('user','last_name',$this->string(255));
    }

    public function down()
    {
        $this->dropColumn('user','first_name');
        $this->dropColumn('user','middle_name');
        $this->dropColumn('user','last_name');
    }

}
