<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Group]].
 *
 * @see Group
 */
class GroupQuery extends \yii\db\ActiveQuery
{
    public function byHead()
    {
        $this->andWhere('parent_id is null');
        return $this;
    }

    /**
     * @inheritdoc
     * @return Group[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Group|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
