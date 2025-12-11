<!DOCTYPE html>
<html>
<body>

<?php
$checkErr = "";
$choices = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["choices"])) {
        $checkErr = "Select at least two options";
    } 
    else if (count($_POST["choices"]) < 2) {
        $checkErr = "Select minimum two";
    } 
    else {
        $choices = $_POST["choices"];
    }
}
?>

<h2>Question 5</h2>

<form method="post">
  <input type="checkbox" name="choices[]" value="A"> A
  <input type="checkbox" name="choices[]" value="B"> B
  <input type="checkbox" name="choices[]" value="C"> C
  <input type="checkbox" name="choices[]" value="D"> D
  <span style="color:red;"><?php echo $checkErr; ?></span><br><br>

  <input type="submit">
</form>

<?php
if($choices){
    echo "<h3>Your Choices:</h3>";
    echo implode(", ", $choices);
}
?>

</body>
</html>
