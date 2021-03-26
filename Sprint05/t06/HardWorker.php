<?php
	class HardWorker{
		private $name;
        private $age;
        private $salary;
		function setName($name){
			$this->name = $name;
		}
		function getName(){
			return $this->name;
		}
		function setAge($age){
			if ($age > 0 && $age < 101){
				$this->age = $age;
				return true;
			}	
			else{
				return false;
			}
		}
		function getAge (){
			return $this->age;
		}
		function setSalary($salary){
			if ($salary > 99 && $salary < 10001){
				$this->salary = $salary;
				return true;
			}	
			else{
				return false;
			}
		}
		function getSalary (){
			return $this->salary;
		}

		function ToArray(){
            $array = [name  => $this->name, age => $this->age, salary => $this->salary];
            return $array;
        }
	}
?>