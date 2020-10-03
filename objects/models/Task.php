<?php

class Task {
    private $db;
    
    const TABLE_NAME = 'tasks';

    public function __construct($database)
    {
        $this->db = $database;
        $this->sql = '';
    }

    public function list () {
        $sql = "SELECT * FROM " . self::TABLE_NAME;
        if ($result = $this->db->query($sql)) {
            return $result;
        }
        
    }
    public function get () {

    }
    public function create () {

    }
    public function update () {

    }
    public function delete () {

    }
}