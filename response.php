<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $age = trim($_POST["age"]);

    // Check if all inputs are valid
    if (!empty($name) &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        $age >= 18) {

        // Positive Response
        echo "<h2 style='color:green;'>Form Submitted Successfully!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Age:</strong> $age</p>";

    } else {

        // Negative Response
        echo "<h2 style='color:red;'>Form Submission Failed!</h2>";
        echo "<p>Please check the following:</p>";
        echo "<ul>";
        echo "<li>Name should not be empty.</li>";
        echo "<li>Email should be valid.</li>";
        echo "<li>Age must be 18 or above.</li>";
        echo "</ul>";

    }

} else {
    echo "<h2>Invalid Request!</h2>";
}

?>