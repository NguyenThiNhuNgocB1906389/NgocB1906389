<?php
//khai bao 1 lop fruit
class Fruit {
  //gom 2 thuoc tinh
  public $name;
  public $color;

 
//phuong thuc xay dung
 function __construct($name) {
	 $this->name = $name;
   }
//phuong thuc huy

 function __destruct() {
     echo "The fruit is {$this->name}.";
   }
    // Methods, phuong thuc trong lop
//gan gia tri cho thuoc tinh
  function set_name($name) {
    $this->name = $name;
  
//tra ve gia tri
  function get_name() {
    return $this->name;
  }
}
// khoi tao bien kieu class Fruit()
$apple = new Fruit('hjdhdhdhdh');
$banana = new Fruit('jdjdjj');


//hien thi cac gia tri thong qua cac phuong thuc da dinh nghia
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
