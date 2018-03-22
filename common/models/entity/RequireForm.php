<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/18
 * Time: 11:31
 */
namespace common\models\entity;

use yii\db\ActiveRecord;

class RequireForm extends ActiveRecord
{
    /**
     * @return string
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%requirement_form}}';
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s')],
            [['name', 'email', 'details'], 'string', 'max' => 255],
            [['name', 'email', 'details'], 'required'],
            [['email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'name' => "姓名",
            'email' => "E-mail",
            'details' => "详细内容",
            'created_at' => "创建时间",
            'updated_at' => "更新时间",
        ];
    }
}