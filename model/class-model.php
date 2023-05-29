<?php
require_once 'db.php';

class ClassModel extends DB {

public function getAllClasses() {
    $stmt = $this->pdo->prepare('SELECT * FROM classes');
    $stmt->execute();
    return $stmt->fetchAll();
}

public function getClassId(int $id) {
    $stmt = $this->pdo->prepare("SELECT classes.* FROM, WHERE class.id = ?");
    $stmt->execute([$id]);
    return $stmt->fetchAll();
}
}