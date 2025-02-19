<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    header("Location: home.html");
    exit();
}
?>

<form action="signup.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Sign Up</button>
</form>


