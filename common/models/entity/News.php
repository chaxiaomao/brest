<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/17
 * Time: 21:44
 */

namespace common\models\entity;


use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%news}}';
    }

    public function rules()
    {
        return [
            [['view_count','content_id'], 'integer'],
            [['title', 'author', 'source', 'summary',], 'string', 'max' => 255],
            [['content'], 'string', 'max' => 20000],
            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s')],
            [['title', 'author', 'source', 'summary'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'view_count' => "浏览次数",
            'content_id' => "内容",
            'title' => "标题",
            'author' => "作者",
            'source' => "来源",
            'content' => "内容",
            'created_at' => "创建时间",
            'updated_at' => "更新时间",
        ];
    }

}