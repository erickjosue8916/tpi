<?php

class TaskController {
    private $db;
    public function __construct($database)
    {
        $this->db = $database;
    }

    public function taskList () {
        require_once "models/Task.php";
        $task = new Task($this->db->getConnection());
        $tasks = $task->list();
        
        require_once "views/tasks/taskList.php";
    }
}