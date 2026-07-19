<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $fullname = $_GET["fullname"] ?? "";
    $email = $_GET["email"] ?? "";
    $username = $_GET["username"] ?? "";
    $password = $_GET["password"] ?? "";
    $gender = $_GET["gender"] ?? "";
    $age = $_GET["age"] ?? "";

    // Validation
    if (
        !empty($fullname) &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        !empty($username) &&
        !empty($password) &&
        !empty($gender) &&
        !empty($age)
    ) {

        echo "<h2 style='color:green;'>Registration Successful!</h2>";
        echo "<hr>";
        echo "<b>Full Name:</b> " . htmlspecialchars($fullname) . "<br>";
        echo "<b>Email:</b> " . htmlspecialchars($email) . "<br>";
        echo "<b>Username:</b> " . htmlspecialchars($username) . "<br>";
        echo "<b>Gender:</b> " . htmlspecialchars($gender) . "<br>";
        echo "<b>Age:</b> " . htmlspecialchars($age) . "<br>";

    } else {

        echo "<h2 style='color:red;'>Registration Failed!</h2>";
        echo "<p>Please fill in all fields correctly.</p>";

    }

} else {

    echo "<h2>Invalid Request</h2>";

}
?>