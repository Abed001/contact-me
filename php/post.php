<?php
include("connection.php");

$name = $_POST["name"];
$author = $_POST["author"];

$query = "INSERT INTO articles(name, author) VALUE (" . $name .", ?)";

$query = $mysqli->prepare("INSERT INTO articles(name, author) VALUE (?, ?)");
$query->bind_param("ss", $name, $author);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>