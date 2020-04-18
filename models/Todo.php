<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todo".
 *
 * @property string $username
 * @property string $todo_task
 * @property string $todo_task_status
 * @property int $id
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'todo_task', 'todo_task_status'], 'required'],
            [['todo_task', 'todo_task_status','username'], 'string'],
            [['username'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'todo_task' => 'Todo Task',
            'todo_task_status' => 'Todo Task Status',
            'id' => 'ID',
        ];
    }
}
