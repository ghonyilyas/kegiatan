<?php 
include 'matriks.php';
$matriks = new matriks();
$matriks->setElement(1,1,1);
$matriks->setElement(1,2,2);
$matriks->setElement(2,1,3);
$matriks->setElement(2,2,4);
$matriks->setElement(3,1,5);
$matriks->setElement(3,2,6);
$matriks->setElement(4,1,7);
$matriks->setElement(4,2,8);
$matriks->setElement(5,1,9);
$matriks->setElement(5,2,10);
$matriks->cetak();

echo $matriks->getElement(1,2);

 ?>