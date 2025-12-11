<!DOCTYPE html>
<html>
<body>

<?php
$selectErr = "";
$selected = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["mySelect"] == "") {
        $selectErr = "Please select an option";
    } else {
        $selected = test_input($_POST["mySelect"]);
    }
}

function test_input($data){
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<h2>Question 6</h2>

<form method="post">
  <select name="mySelect">
    <option value="">--Select--</option>
    <option value="Item1">Item 1</option>
    <option value="Item2">Item 2</option>
    <option value="Item3">Item 3</option>
  </select>

  <span style="color:red;"><?php echo $selectErr; ?></span><br><br>

  <input type="submit">
</form>

<?php
if($selected){
    echo "<h3>You Selected:</h3>";
    echo $selected;
}
?>

</body>
</html>
