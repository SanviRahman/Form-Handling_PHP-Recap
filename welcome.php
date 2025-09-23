<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = $email = $gender = $comment = $website =  "";
    $nameErr = $emailErr = $genderErr = $websiteErr = "";


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is Required.";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is Requird.";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        if (empty($_POST["website"])) {
            $websiteErr = "Website is Required.";
        } else {
            $website = test_input($_POST["website"]);
        }
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }


        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $nameErr == "" && $emailErr == "" && $genderErr == "") {
            echo "<div class='output-box'>";
            echo "<h2>Your Output:</h2>";
            echo "<p><strong>Name:</strong> " . $name . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
            echo "<p><strong>Website:</strong> " . $website . "</p>";
            echo "<p><strong>Comment:</strong> " . $comment . "</p>";
            echo "<p><strong>Gender:</strong> " . $gender . "</p>";
            echo "</div>";
        }
    }
    ?>
</body>

</html>