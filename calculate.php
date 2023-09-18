<?php
$servername = "localhost";
$username = "mysql";
$pass = "mysql";
$base = "testbd";

$conn = new mysqli($servername, $username, $pass, $base);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $score = 0;


    if ($_POST["q1"] == "correct") {
        $score++;
    }
    if ($_POST["q2"] == "correct") {
        $score++;
    }
    if ($_POST["q3"] == "correct") {
        $score++;
    }
    if ($_POST["q4"] == "correct") {
        $score++;
    }
    if ($_POST["q5"] == "correct") {
        $score++;
    }

    $sql = "INSERT INTO quiz(name, score) VALUES ('$name', $score)";

    if ($conn->query($sql) === FALSE) {
        echo "Ошибка при сохранении результатов: " . $conn->error;
    }
}

$conn->close();

