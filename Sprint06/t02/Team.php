<?php
class Team {
    public $id;
    public $avengers = [];
    public function __construct($id, $arr) {
        $this->id = $id;
        $this->avengers = $arr;
    }
    // public function check() {
    //     echo "Total count: " . count($this->avengers) . "\n";
    //     foreach ($this->avengers as $hero) {
    //         echo "Name: " . $hero->name . ", and hp: " . $hero->hp . "\n";
    //     }
    // }
    public function battle($damage): void {
        foreach ($this->avengers as $hero) {
            $hero->hp -= $damage;
        }
        $delarr = [];
        for($i = 0; $i < count($this->avengers); $i++) {
            if($this->avengers[$i]->hp <= 0){
                array_push($delarr, $i);
            }
        }
        array_reverse($delarr);
        for($i = 0; $i < count($delarr); $i++) {
            unset($this->avengers[$delarr[$i]]);
        }
    }
    public function calculate_losses($cloned_team): void {
        $countbefore = count($cloned_team->avengers);
        $countafter = count($this->avengers);
        $deadcount = $countbefore - $countafter;
        if($deadcount == 0)
            echo "We haven't lost anyone in this battle!\n";
        else
            echo "In this battle we lost $deadcount Avenger(s).\n";
    }
}
?>