<!DOCTYPE html>
<html>
<body>

<?php
$groupErr = "";
$group = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["group"])) {
        $groupErr = "Please select one option";
    } else {
        $group = test_input($_POST["group"]);
    }
}

function test_input($data){
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<h2>Question 4</h2>

<form method="post">
  <input type="radio" name="group" value="Option1"> Option 1
  <input type="radio" name="group" value="Option2"> Option 2
  <input type="radio" name="group" value="Option3"> Option 3
  <span style="color:red;"><?php echo $groupErr; ?></span><br><br>

  <input type="submit">
</form>

<?php
if($group){
    echo "<h3>Your Choice:</h3>";
    echo $group;
}
?>

</body>
</html>
