<?php 

class manusia{
	private $nama="Malas ngoding ";

	private function tampilkan_nama(){
		return "Nama Saya ".$this->nama;
	}

	public function cetak(){
		echo $this->tampilkan_nama();
	}
	private function nama(){
		echo $this->nama;
	}
 }

 // $manusia = new manusia();
 // echo $manusia->cetak();
 // echo $manusia->nama();
 
class sympanse extends manusia{
	public function name (){
		echo $this->nama;
	}
}
$sympanse = new sympanse();
$sympanse->nama();