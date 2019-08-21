<?php 

class manusia {
	public $nama;
	public $warna;

	function tampilkan_nama(){
		return "Nama saya Ghony Ilyas <br/>";
	}
}

$manusia = new manusia();
echo $manusia->tampilkan_nama();

 ?>