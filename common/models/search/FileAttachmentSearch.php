<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\extended\FileAttachment;

/**
 * FileAttachmentSearch represents the model behind the search form about `common\models\extended\FileAttachment`.
 */
class FileAttachmentSearch extends FileAttachment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'context_id', 'file_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FileAttachment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'context_id' => $this->context_id,
            'file_id' => $this->file_id,
        ]);

        return $dataProvider;
    }
}
