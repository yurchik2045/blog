<?php

use yii\db\Migration;

/**
 * Class m211205_072019_blog
 */
class m211205_072019_blog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211205_072019_blog cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('blog', [
            'id'=>$this->primaryKey(),
            'name'=>$this->string(),
            'textNews'=>$this->text(),
            'imgNews'=>$this->string(),
        ]);
    }

    public function down()
    {
        echo "m211205_072019_blog cannot be reverted.\n";

        return false;
    }

}
