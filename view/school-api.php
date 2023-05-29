<?php

class SchoolApi {

    public function outputStudents(array $students): void {
        $json = [
            'student-count' => count($students),
            'result' => $students
        ];
       header("Content-Type: application/json");
       echo json_encode($students);

    }
    public function outputStudent (array $student) {
       header("Content-Type: application/json");
       echo json_encode($student);
    }

    public function outputClasses(array $classes): void {
        $json = [
            'class-count' => count($classes),
            'result' => $classes
        ];
       header("Content-Type: application/json");
       echo json_encode($classes);

    }

    public function outputClass(array $student) {
       header("Content-Type: application/json");
       echo json_encode($student);
    }
}

?>