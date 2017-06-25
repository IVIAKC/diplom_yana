<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $phone
 * @property string $position
 * @property string $birth
 * @property integer $avatar_id
 *
 * @property Comment[] $comments
 * @property Issue[] $issues
 * @property Issue[] $issues0
 * @property Issue[] $issues1
 * @property Project[] $projects
 * @property Avatar $avatar
 */
class User extends \yii\db\ActiveRecord
{
    const TYPE_ALL_ISSUE = 0;
    const TYPE_MY_ISSUE = 1;
    const TYPE_MY_REPORT_ISSUE = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at', 'avatar_id'], 'integer'],
            [['birth'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'first_name', 'middle_name', 'last_name'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 10],
            [['position'], 'string', 'max' => 25],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['avatar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Avatar::className(), 'targetAttribute' => ['avatar_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'status' => 'Статус',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
            'first_name' => 'Имя',
            'middle_name' => 'Отчество',
            'last_name' => 'Фам',
            'phone' => 'Телефон',
            'position' => 'Должность',
            'birth' => 'День рожденья',
            'avatar_id' => 'Аватарка',
        ];
    }

    public static function getUserList(){
        return self::find()->select('username')->orderBy('username')->indexBy('id')->column();
    }

    public function getCurrentIssues($type = null){

    }
}
