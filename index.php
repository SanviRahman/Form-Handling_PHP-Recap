<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nameErr = $emailErr = $websiteErr = $genderErr = " ";
    ?>
    <form action="welcome.php" method="post">
        <label for="name">Name:</label>
        <input type="name" name="name" id="email" placeholder="Enter your name..." required>

        <pre></pre>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email..." required>

        <pre></pre>
        <label for="Website">Website</label>
        <input type="website" name="website" id="website" placeholder="Enter your website..." required>

        <pre></pre>
        comment: <textarea name="comment" rows="5" cols="40"></textarea>

        <pre></pre>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Female" required>Female
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Others" required>Others

        <pre></pre>
        <button type="submit">Submit</button>
    </form>


</body>

</html>