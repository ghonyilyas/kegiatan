<?php 
include 'matriks.php';
$matriks = new matriks();
$matriks->setElement(1,1,2);
$matriks->setElement(1,2,4);
$matriks->setElement(2,1,3);
$matriks->setElement(2,2,5);


$matriks->cetak();
echo $matriks->getElement(1,2);


 ?>