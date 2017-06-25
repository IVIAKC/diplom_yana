<?php

namespace common\models\extended;

use Yii;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property integer $avatar_id
 * @property integer $lead_id
 * @property integer $status_id
 * @property integer $type_id
 * @property integer $priority_id
 * @property integer $client_id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property string $budget
 * @property integer $is_deleted
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Issue[] $issues
 * @property Avatar $avatar
 * @property Client $client
 * @property User $lead
 * @property Priority $priority
 * @property Status $status
 * @property Type $type
 */
class Project extends \common\models\Project
{
    const TYPE_ALL = 0;
    const TYPE_SOMEONE = 1;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['avatar_id', 'lead_id', 'status_id', 'type_id', 'priority_id', 'client_id', 'is_deleted'], 'integer'],
            [['name'], 'required'],
            [['description'], 'string'],
            [['budget'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'url'], 'string', 'max' => 255],
            [['avatar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Avatar::className(), 'targetAttribute' => ['avatar_id' => 'id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['client_id' => 'id']],
            [['lead_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['lead_id' => 'id']],
            [['priority_id'], 'exist', 'skipOnError' => true, 'targetClass' => Priority::className(), 'targetAttribute' => ['priority_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'avatar_id' => 'Аватарка',
            'lead_id' => 'Ответственный',
            'status_id' => 'Статус',
            'type_id' => 'Тип',
            'priority_id' => 'Приоритет',
            'client_id' => 'Клиент',
            'name' => 'Название',
            'url' => 'Url',
            'description' => 'Описание',
            'budget' => 'Бюджет',
            'is_deleted' => 'Удален',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
        ];
    }

    public static function getProjectList(){
        return self::find()->select('name')->orderBy('name')->indexBy('id')->column();
    }

    public static function getAllArray($type = self::TYPE_ALL, $user_id = null){
        if($type == self::TYPE_ALL)
            return self::find()->andWhere(['!=','status_id',3])->limit(10)->all();
        if($type == self::TYPE_SOMEONE) {
//            if (empty($user_id))
//                throw new NotFoundHttpException();
            return self::find()->limit(10)->all();
        }
    }
}
