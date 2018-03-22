<?php

use yii\db\Migration;

/**
 * Class m170930_071132_common
 */
class m170930_071132_common extends Migration
{
    const TABLE_NAME = '{{%common}}';

    /**
     * @inheritdoc
     */
    public function Up()
    {
        $tableOptions = null;
        if ($this->db->driverName == 'mysql') {
            $tableOptions = 'CHARACTER SET utf-8 COLLATE utf_unicode_ci ENGINE=InnoDB AUTO_INCREMENT = 100';
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'section_id' => $this->integer()->notNull(),
            'parent' => $this->integer()->defaultValue(""),
            'status' => $this->smallInteger()->notNull()->defaultValue(""),
            'thumbsup' => $this->integer()->notNull()->defaultValue(0),
            'thumbsdown' => $this->integer()->notNull()->defaultValue(0),
            'content' => $this->text(),
            'created_at' => $this->integer()->notNull()->defaultValue(  0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
            'created_by' => $this->integer()->defaultValue(""),
            'updated_by' => $this->integer()->defaultValue(""),
        ], $tableOptions);

        $this->addForeignKey('fk_common_section', self::TABLE_NAME, '[[section_id]]', '{{%section}}', '[[id]]', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('fk_common_parent', self::TABLE_NAME, '[[parent]]', self::TABLE_NAME, '[[id]]', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('fk_common_created_by', self::TABLE_NAME, '[[created_by]]', '{{%user}}', '[[id]]', 'RESTRICT', 'CASCADE');
        $this->addForeignKey('fk_common_updated_by', self::TABLE_NAME, '[[updated_by]]', '{{%user}}', '[[id]]', 'RESTRICT', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function Down()
    {
        echo "m170930_071132_common cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170930_071132_common cannot be reverted.\n";

        return false;
    }
    */
}
