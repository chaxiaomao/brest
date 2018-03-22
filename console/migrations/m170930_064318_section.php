<?php

use yii\db\Migration;

/**
 * Class m170930_064318_section
 */
class m170930_064318_section extends Migration
{
    /**
     * @inheritdoc
     */
    const TABLE_NAME = '{{%section}}';

    public function Up()
    {
        $tableOptions = null;
        if($this->db->driverName == 'mysql') {
            $tableOptions = 'CHARACTER SET utf-8 COLLATE utf_unicode_ci ENGINE=InnoDB AUTO_INCREMENT = 100';
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'parent' => $this->integer()->defaultValue(""),
            'next' => $this->integer()->defaultValue(""),
            'preview' => $this->integer()->defaultValue(""),
            'top_mode' => $this->smallInteger()->defaultValue(10),
            'status' => $this->smallInteger()->defaultValue(0),
            'common_mode' => $this->smallInteger()->defaultValue(0),
            'common_num' => $this->integer()->defaultValue(0),
            'context' => $this->text(),
            'ver' => $this->bigInteger()->defaultValue(""),
            'created_at' => $this->integer()->notNull()->defaultValue(  0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
            'created_by' => $this->integer()->defaultValue(""),
            'updated_by' => $this->integer()->defaultValue(""),

            $this->addForeignKey('fk_section_parent', self::TABLE_NAME, '[[parent]]', self::TABLE_NAME, '[[id]]', 'RESTRICT', 'CASCADE'),
            $this->addForeignKey('fk_section_next', self::TABLE_NAME, '[[next]]', self::TABLE_NAME, '[[id]]', 'RESTRICT', 'CASCADE'),
            $this->addForeignKey('fk_section_preview', self::TABLE_NAME, '[[preview]]', self::TABLE_NAME, '[[id]]', 'RESTRICT', 'CASCADE'),
            $this->addForeignKey('fk_section_created_by', self::TABLE_NAME, '[[created_by]]', '{{%user}}', '[[id]]', 'RESTRICT', 'CASCADE'),
            $this->addForeignKey('fk_section_updated_by', self::TABLE_NAME, '[[created_by]]', '{{%user}}', '[[id]]', 'RESTRICT', 'CASCADE'),

        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function Down()
    {
        echo "m170930_064318_session cannot be reverted.\n";
        $this->dropTable(self::TABLE_NAME);
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170930_064318_session cannot be reverted.\n";

        return false;
    }
    */
}
