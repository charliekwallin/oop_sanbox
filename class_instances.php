<?php

class Student {
    var $first_name;
    var $last_name;
    var $country = "Iceland";

}

$student1 = new Student;
$student1->first_name = "Lucy";
$student1->last_name = "Ricardo";

$student2 = new Student;
$student2->first_name = "Ethel";
$student2->last_name = "Merz";

echo $student1->first_name . " " . $student1->last_name . "<br>";
echo $student2->first_name . " " . $student2->last_name . "<br>";

echo get_class($student1) . "<br />";

$class_names = ['Product', 'Student', 'student'];
foreach($class_names as $class_name) {
  if(is_a($student1, $class_name)) {
    echo "student1 is a {$class_name}.<br />";
  } else {
    echo "student1 is not a {$class_name}.<br />";
  }
}

?>
