<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\extended\Issue;

/**
 * IssueSearch represents the model behind the search form about `common\models\extended\Issue`.
 */
class IssueSearch extends Issue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sub_issue', 'priority_id', 'type_id', 'status_id', 'reporter_id', 'assignee_id', 'creater_id', 'project_id', 'is_deleted'], 'integer'],
            [['summary', 'description', 'created_at', 'updated_at', 'duedate', 'estimate'], 'safe'],
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
        $query = Issue::find();

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
            'sub_issue' => $this->sub_issue,
            'priority_id' => $this->priority_id,
            'type_id' => $this->type_id,
            'status_id' => $this->status_id,
            'reporter_id' => $this->reporter_id,
            'assignee_id' => $this->assignee_id,
            'creater_id' => $this->creater_id,
            'project_id' => $this->project_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'is_deleted' => $this->is_deleted,
            'duedate' => $this->duedate,
            'estimate' => $this->estimate,
        ]);

        $query->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
