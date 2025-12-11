<!DOCTYPE html>
<html>
<body>

<?php
$nameErr = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);

        if (!preg_match("/^[A-Za-z]/", $name)) {
            $nameErr = "Must start with a letter";
        }
        else if (!preg_match("/^[A-Za-z.\- ]+$/", $name)) {
            $nameErr = "Only letters, periods and dashes allowed";
        }
        else if (str_word_count($name) < 2) {
            $nameErr = "Must contain at least two words";
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

<h2>Question 1</h2>

<form method="post">
  Name: <input type="text" name="name">
  <span style="color:red;">* <?php echo $nameErr; ?></span>
  <br><br>
  <input type="submit">
</form>

<?php
if($name && !$nameErr){
    echo "<h3>Your Input:</h3>";
    echo $name;
}
?>

</body>
</html>
