<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    const TABLE_NAME = '{{%user}}';

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        //索引名称，索引表，索引字段(数组)，唯一性
        $this->createIndex('user', self::TABLE_NAME, 'username', true );
        $this->createIndex('email', self::TABLE_NAME, 'email', true );
    }

    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
