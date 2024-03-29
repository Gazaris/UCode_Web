<?php
class Avenger {
    public $name;
    public $alias;
    public $gender;
    public $age;
    public $power = [];

    public function __construct($name, $alias, $gender, $age, $powers) {
        $this->name = $name;
        $this->alias = $alias;
        $this->gender = $gender;
        $this->age = $age;
        $this->powers = $powers;
    }

    public function __toString() {
        return "name: ". $this->name . "\ngender: " . $this->gender . "\nage: " . $this->age . "\n";
    }

    public function __invoke() {
        echo strtoupper($this->alias) . "\n";
        for($i = 0; $i < count($this->powers); $i++)
            echo $this->powers[$i] . "\n";
        echo "\n";
    }
}
?>