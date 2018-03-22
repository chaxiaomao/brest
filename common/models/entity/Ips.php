<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/18
 * Time: 11:11
 */

namespace common\models\entity;


use yii\db\ActiveRecord;

class Ips extends ActiveRecord
{
    /**
     * @return string
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ips}}';
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function rules()
    {
        return [
            [['view_count',], 'integer'],
            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s')],
            [['location', 'ip', 'url'], 'string', 'max' => 255],
            [['ip', 'url'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'view_count' => "浏览量",
            'location' => "位置",
            'ip' => "IP",
            'url' => "路径",
            'created_at' => "创建时间",
            'updated_at' => "更新时间",
        ];
    }
}