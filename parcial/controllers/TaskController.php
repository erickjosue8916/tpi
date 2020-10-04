<?php

class TaskController {
    private $db;
    public function __construct($database)
    {
        $this->db = $database->getConnection();
    }

    public function taskList () {
        require_once "models/Task.php";
        $task = new Task($this->db);
        $tasks = $task->list();
        
        require_once "views/tasks/taskList.php";
    }

    public function create () {
        require_once "models/Task.php";
        if (isset($_POST)) {
            echo 'create';
        } else {
            echo 'save';
        }
        
        // require_once "views/tasks/taskList.php";
    }
}