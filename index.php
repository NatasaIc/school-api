<?php

require 'model/student-model.php';
require 'model/class-model.php';
require 'view/school-api.php';

$studentModel = new StudentModel();
$classModel = new Classmodel();
$schoolApi = new SchoolApi();


// $schoolApi->outputStudents($studentModel->getAllStudents());

if(isset($_GET['action'])) {
        if($_GET['action'] == 'students') {
            $schoolApi->outputStudents($studentModel->getAllStudents());
        }
}

if(isset($_GET['student-id'])) {
    $studentId = $_GET['student-id'];
    $schoolApi->outputStudent($studentModel->getStudent($studentId));
}

if(isset($_GET['action'])) {
    if($_GET['action'] == 'classes') {
        $schoolApi->outputClasses($classModel->getAllClasses());
    }
}

if(isset($_GET['class-id'])) {
    $classId = $_GET['class-id'];
    $classApi->outputClass($classModel->getClass($classId));
}

// http://localhost/PHP-assignments/school-api/?action=students