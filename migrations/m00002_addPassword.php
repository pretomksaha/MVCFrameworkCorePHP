<?php

class m00002_addPassword{
    public function up()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;
        $SQL = "ALTER TABLE users DROP COLUMN password;";
        $db->pdo->exec($SQL);
    }
}