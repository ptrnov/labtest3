<?php

use yii\db\Schema;
use yii\db\Migration;

class m150617_091422_dbm000_m1000 extends Migration
{
    public function init()
    {
        $this->db = 'db4';
        parent::init();
    }
    public function safeUp()
    {
        $this->init();
        $sql = file_get_contents("console\migrations\dbm000_m1000.sql");
        $this->execute($sql);
    }

    public function safeDown()
    {
        echo "dbm000_m1000 cannot be reverted.\n";

        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
