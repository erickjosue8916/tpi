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
        $config = ["brand" => "testing", "logo" => "logo.png"];
        require_once "components/form.php";
    }
}