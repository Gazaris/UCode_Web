<?php
    class Ingestion {
        public $id;
        public $meal_type = [];
        public $day_of_diet;
        public $products = [];
        public function __construct($meal_type, $day) {
            $this->meal_type = $meal_type;
            $this->day_of_diet = $day;
            $this->products = [];
        }
        public function get_from_fridge($product): void {
            if(($this->products[$product]->kcal_per_portion) > 200)
                throw new EatException("No more junk food, dumpling");
        }
        public function setProduct($obj) {
            $this->products[$obj->getName()] = $obj;
        }
        public function getProducts() {
            return $this->products;
        }
    }
?>