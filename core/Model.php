<?php
class Model {
    public $db;
    public function __construct() {
        $this->db = Database::getInstance();
    }
}