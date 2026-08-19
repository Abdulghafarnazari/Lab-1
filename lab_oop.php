<?php
// Define the Student class with properties and a constructor.
class Student
{
    // Properties is used to store each student's information.
    public $name;
    public $studentId;
    public $department;

    // Constructor runs automatically when a new Student object is created evertytime.
    function __construct($name, $studentId, $department)
    {
        // Store the values in the specific properties.
        // $this point to the current object being created.
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo()
    {
        // Display the student information.
        // Use $this to access the properties of a specific object. 
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
}



// Create the first Student object.
$student1 = new Student(
    "Ahmad", 1001, "Computer Science"
);

// Call showInfo() to show the first student's information.
$student1->showInfo();

echo "<br>"; // Add a blank line between the two student.

// Create a second Student object using thsi class.
$student2 = new Student(
    "Sara", 1002, "Information Systems"
);

// Call showInfo() to show the second student's information.
$student2->showInfo();
?>