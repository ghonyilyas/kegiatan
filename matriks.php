<?php 
class matriks{
	private $data=[];

	public function setElement($b=0,$k=0,$n=0){
		$this->data[$b][$k]=$n;
	}
	public function getElement($b=0,$k=0){
		return $this->data[$b][$k];
	}
	public function cetak(){
		echo '<pre>';
		print_r($this->data);
		echo '<pre>';
	}
}

 ?>