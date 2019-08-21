<?php 
include  'lingkaran.php';
$lingkaran = new lingkaran();
$lingkaran->jari2(8);

echo 'luas lingkaran dengan jari-jari 5 cm adalah '.
$lingkaran->luas().'cm';

echo "<br>";

echo 'keliling lingkaran dengan jari-jari 5 cm adalah '.
$lingkaran->keliling().'cm';

 ?>