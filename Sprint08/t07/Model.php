<?php
abstract class Model{
    public $connection;
    public $table;

    abstract public function find($id);
    abstract public function save();
    abstract public function delete();

    public function __construct($table) {
        $this->setTable($table);
        $this->setConnection();
    }
    protected function setTable($table) {
        $this->table = $table;
    }
    protected function setConnection() {
        $this->connection = new DatabaseConnection('localhost', null, 'anevodnich', 'securepass', 'ucode_web');;
    }
}
?>