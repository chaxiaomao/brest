<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/17
 * Time: 8:38
 */
namespace common\models\entity;

class Product extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return '{{%products}}';
    }

    public function rules()
    {
        return [
            [['status','category_id'], 'integer'],
            [['label', 'model', 'power', 'carton_size'], 'string', 'max' => 255],
            [['content'], 'string', 'max' => 20000],
            [['img_path'], 'string'],
            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s')],
            [['label', 'model', 'power', 'carton_size', 'category_id', ], 'required'],
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
            'category_id' => "分类ID",
            'model' => "模型",
            'power' => "功率",
            'carton_size' => "机箱大小",
            'img_path' => "图片路径",
            'content' => "内容",
            'created_at' => "创建时间",
            'updated_at' => "更新时间",
        ];
    }

    /**
     * 获取关联表Category
     */
    public function getCategory()
    {
        // 第一个参数为要关联的子表模型类名，
        // 第二个参数指定 通过子表的category_id，关联主表的id字段
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}