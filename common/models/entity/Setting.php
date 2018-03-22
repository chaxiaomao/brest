<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/19
 * Time: 17:30
 */

namespace common\models\entity;


use yii\db\ActiveRecord;

class Setting extends ActiveRecord
{
    /**
     * @return string
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%setting}}';
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s')],
            [['site_name', 'site_keywords', 'site_description', 'site_copyright', 'site_ipc', 'site_email',], 'string', 'max' => 255],
            [['site_statistics_code'], 'string', 'max' => 2000],
            [['site_name', 'site_keywords', 'site_description', 'site_copyright', 'site_ipc', 'site_email',], 'required'],
            [['site_email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'site_name' => "网站名称",
            'site_keywords' => "网站关键词",
            'site_description' => "网站描述",
            'site_copyright' => "网站版权信息",
            'site_ipc' => "网站备案号",
            'site_email' => "网站邮箱",
            'site_statistics_code' => "网站统计代码",
            'created_at' => "创建时间",
            'updated_at' => "更新时间",
        ];
    }

}