<?php 
class student {
public $id;
public $name;
public $email;
public $mobile_number;
public function __construct($id,$name,$email,$mobile_number) {
    $this -> id = sprintf($id);
    $this -> name = $name;
    $this -> email = $email;
    $this -> mobile_number = sprintf($mobile_number);
}
}
class teacher extends student {
    public $salary;
    public $subjects;
    public function info($salary,$subjects) {
        $this -> salary = sprintf($salary);
        $this -> subjects = $subjects;
}
}
$sara = new student("123443","Sara","sara@orange.com","0777777777");
$sadi = new teacher("96432","Sadi","sadi@orange.com","0777788888");
$sadi -> info("800",["English", "Arabic", "Math", "science"]);
echo "<pre>";
print_r($sara);
echo "<hr>";
print_r($sadi);
echo "<hr>";
 ?>