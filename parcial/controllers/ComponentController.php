<?php

class ComponentController {
    public function dropdown () {
        require_once "assets/menuOptions.php";
        $options = [];
        foreach ($menu as $key => $option) {
            array_push($options, ['source' => $option . "/show$option", 'name' => $option]);
        }
        $buttonName = 'Actions';
        require_once "components/dropdown.php";
    }   

    public function navbar () {
        $config = ["brand" => "testing", "logo" => "logo.png"];
        require_once "components/nabvar.php";
    }
    
    public function form () {
        if (isset($_COOKIE['users'])) {
            $config = ["headers" => ["name", "lastname", "email"], "rows" => json_decode($_COOKIE['users'], true)];
            require_once "components/table.php";
            var_dump($config);
        }
        if (count($_POST)) {
            var_dump(json_decode($_COOKIE['users'], true));
            $users = (isset($_COOKIE['users'])) ? json_decode($_COOKIE['users'], true) : [];
            array_push($users, $_POST);
            setcookie('users', json_encode($users));
        }
        require_once "views/form.php";
    }
    
    public function table () {
        require "assets/tasks.php";
        $config = ["headers" => ["id", "name"], "rows" => [
            ["id" => 1, "name" => "erick"],
            ["id" => 1, "name" => "erick"],
            ["id" => 1, "name" => "erick"],
            ["id" => 1, "name" => "erick"],
            ["id" => 1, "name" => "erick"],
            ["id" => 1, "name" => "erick"],
            ["id" => 1, "name" => "erick"],
        ]];
        require_once "components/table.php";
    }
}