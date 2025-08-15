<?php
$student = array(
    "Name"   => "Aarya",
    "Age"    => 19,
    "Course" => "B.Sc Nursing",
    "City"   => "Ahmedabad"
);

echo "Student details:<br>";

foreach ($student as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>
