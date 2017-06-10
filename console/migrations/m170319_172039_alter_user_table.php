<?php

use yii\db\Migration;

class m170319_172039_alter_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('user','first_name',$this->string(255));
        $this->addColumn('user','middle_name',$this->string(255));
        $this->addColumn('user','last_name',$this->string(255));
        $this->addColumn('user','phone',$this->string(10));
        $this->addColumn('user','position',$this->string(25));
        $this->addColumn('user','birth',$this->date()->defaultValue(null));
        $this->addColumn('user', 'avatar_id', $this->integer(11)->unsigned()->defaultValue(null));

        //Создание логин/пас admin/qwerty

        $this->insert('user',['username' => 'admin', 'auth_key' => 'nFUTC4SPcfRlXle9E2IVNDuzC3IMQByN', 'password_hash' => '$2y$13$8CmIZI7lMF5No8ivBEl8KeUFN4bc2w.EEDHQpCe3hN2dtTHXFsdOS','email' => 'admin@admin.ru', 'status' => 10, 'created_at' => '1497117403', 'updated_at' => '1497117403']);
    }

    public function down()
    {
        $this->dropColumn('user','first_name');
        $this->dropColumn('user','middle_name');
        $this->dropColumn('user','last_name');
        $this->dropColumn('user','phone');
        $this->dropColumn('user','position');
        $this->dropColumn('user','birth');
        $this->dropColumn('user','avatar_id');
    }

}
