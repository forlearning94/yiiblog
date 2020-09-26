<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m200904_121949_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'user_id' => $this->integer(),
            'article_id' => $this->integer(),
            'status' => $this->integer()
        ]);

        
        // creating index for user_id 
        $this->createIndex(
            'idx-post-user_id', 
            'comment', 
            'user_id'
        );

        // adding foreign key for table 'user'
        $this->addForeignKey(
            'fk-post-user_id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        // creating index for article_id
        $this->createIndex(
            'ind-article_id',
            'comment',
            'article_id'
        );

        //adding foreign key for table 'article'
        $this->addForeignKey(
            'fk-post-article_id',
            'comment',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comment}}');
    }
}