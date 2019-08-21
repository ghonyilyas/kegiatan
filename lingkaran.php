<?php 

class lingkaran{
	private $jari2 = 0;
	private $diameter = 0;
	private $pi = 3.14;

	public function jari2($jari2=0){
		$this->jari2= $jari2;
	}
	public function luas (){
		return $this->pi*($this->jari2*$this->jari2);
	}
	public function keliling (){
		return $this->pi*$this->jari2*2;
	}
 }

