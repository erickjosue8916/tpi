<?php

abstract class Animal {
    protected $name;
    protected $description;
    protected $audio;

    public function __construct($name, $description, $audio)
    {
        $this->name = $name;
        $this->description = $description;
        $this->audio = $audio;
    }

    public function getName () { return $this->name;}
    public function setName ($name) { $this->name = $name;}
    public function getDescription () { return $this->description;}
    public function setDescription ($description) { $this->description = $description;}
    public function getAudio () { return $this->audio;}
    public function setAudio ($audio) { $this->audio = $audio;}
}