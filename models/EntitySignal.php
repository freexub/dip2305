<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entity_signal".
 *
 * @property int $id
 * @property int $entity_id
 * @property int $signal_id
 * @property string $date_create
 * @property int $active
 *
 * @property Entity $entity
 * @property Signal $signal
 */
class EntitySignal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entity_signal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['entity_id', 'signal_id'], 'required'],
            [['entity_id', 'signal_id', 'active'], 'integer'],
            [['date_create'], 'safe'],
            [['entity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Entity::className(), 'targetAttribute' => ['entity_id' => 'id']],
            [['signal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Signal::className(), 'targetAttribute' => ['signal_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'entity_id' => 'Entity ID',
            'signal_id' => 'Signal ID',
            'date_create' => 'Date Create',
            'active' => 'Active',
        ];
    }

    /**
     * Gets query for [[Entity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEntity()
    {
        return $this->hasOne(Entity::className(), ['id' => 'entity_id']);
    }

    /**
     * Gets query for [[Signal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSignal()
    {
        return $this->hasOne(Signal::className(), ['id' => 'signal_id']);
    }
}
