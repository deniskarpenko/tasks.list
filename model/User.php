<?php
namespace model;

class User extends DB
{
    public function findUserAndTasks()
    {
        if (empty($this->pdo))
            return false;
        $fields = $this->pdo->query('SELECT u.name,u.email,t.text_task,t.status FROM USER u JOIN tasks t ON  u.id = t.id_us');
        $user_tasks = [];
        while ($row = $fields->fetch()) {
            $user_tasks+= $row;
        }
        return $user_tasks;
    }
}


