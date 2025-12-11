<!DOCTYPE html>
<html>
<body>

<?php
$emailErr = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Question 2</h2>

<form method="post">
  Email: <input type="text" name="email">
  <span style="color:red;">* <?php echo $emailErr; ?></span>
  <br><br>
  <input type="submit">
</form>

<?php
if($email && !$emailErr){
    echo "<h3>Your Input:</h3>";
    echo $email;
}
?>

</body>
</html>
