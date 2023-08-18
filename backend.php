<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $errorMessage = "";

    if (empty($username)) {
        header("Location: index.php");
        $errorMessage = "fields cannot be empty";
    }
}
?>