<?php
class Student{
	public $name = "DefaultName";
	public $surname = "DefaultSurname";
	public $cl = "DefaultClass";
	
	
}
//$array = new array(5);
$array = array(
	0 => new Student(), 
	1 => new Student(), 
	2 => new Student(), 
	3 => new Student(), 
	4 => new Student()
);
$array[0]->name = "Alessandro";
$array[0]->surname = "Galiazzo";
$array[0]->cl = "5ib";
$array[1]->name = "Edoardo";
$array[1]->surname = "Novello";
$array[1]->cl = "5ib";
$array[2]->name = "Andrea";
$array[2]->surname = "Benato";
$array[2]->cl = "5ib";
$array[3]->name = "Andrei";
$array[3]->surname = "Nadejde";
$array[3]->cl = "5ib";


$json = json_encode($array);

echo $json;
?>
