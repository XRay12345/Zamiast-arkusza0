<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $telefon = $_POST["telefon"];

    $sql = "INSERT INTO osoby (imie, nazwisko, telefon) VALUES ('$imie', '$nazwisko', '$telefon')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Typ został dodany do bazy');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
