<?php
class Tower extends Building{
	private $elev;
	private $area;
	private $height;

	public function setElevator(bool $elev){
		$this->elev = $elev;
	}
	public function setArcCapacity(int $area){
		$this->area = $area;
	}
	public function setHeight(int $height){
		$this->height = $height;
	}
	public function hasElevator() : bool{
		if($this->elevator == true){
			return true;
		}
		else{
			return false;
		}
	}
	public function getArcCapacity(){
		return $this->area;
	}
	public function getHeight(){
		return $this->height;
	}
	public function getFloorHeight() : float{
		return $this->height / $this->floors;
	}
}
?>