<?php

class Student {

  var $first_name;
  var $last_name;
  var $country = "Iceland";

  function say_hello() {
    return "Hello";
  }

  function full_name() {
    return $this->first_name . " " . $this->last_name . "<br>";
  }
}



$student1 = new Student;
$student1->first_name = 'Lucy';
$student1->last_name = 'Ricardo';

$student2 = new Student;
$student2->first_name = 'Ethel';
$student2->last_name = 'Mertz';

echo $student1->full_name() . '<br>';
echo $student2->full_name() . '<br>';

// class methods example

$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . "<br>";
// object_vars example

if(method_exists('Student', 'say_hello')) {
  echo "Method say_hello() exists in Student class<br>";
} else {
  echo "Method say_hello() does NOT exist in Student class<br>";
}

?>
