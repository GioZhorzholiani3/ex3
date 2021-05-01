<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (name, surname, age)
VALUES (:name, :surname, :age)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':age', $age);

// insert a row
    $name = "John";
    $surname = "Doe";
    $age = 18;
    $stmt->execute();
    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>


