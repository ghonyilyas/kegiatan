<?php 

class manusia{
	protected $nama="Ghony Ilyas";

	 protected function nama(){
		return "Nama Saya ".$this->nama;
	}
	public function tampilkan_nama(){
		return $this->tampilkan_nama;
	}
 }

$manusia = new manusia();
echo $manusia->tampilkan_nama();
