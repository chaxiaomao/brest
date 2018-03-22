<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/16
 * Time: 15:17
 */
namespace common\models\entity;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
//    public $label;
//    public $description;
    /**
     * @return string
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%categories}}';
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function rules()
    {
        return [
            [['status',], 'integer'],
            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s')],
            [['label', 'description'], 'string', 'max' => 255],
            [['label', 'description'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'status' => "状态",
            'label' => "名称",
            'description' => "描述",
            'created_at' => "创建时间",
            'updated_at' => "更新时间",
        ];
    }

    /**
     * 获取关联表Product,1对多
     */
    public function getCategory()
    {
        // 第一个参数为要关联的子表模型类名，
        // 第二个参数指定 通过子表的category_id，关联主表的id字段
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}
