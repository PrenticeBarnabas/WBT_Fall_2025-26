<!DOCTYPE html>
<html>
<body>

<?php
$dayErr = $monthErr = $yearErr = "";
$day = $month = $year = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // DAY
    if (empty($_POST["day"])) {
        $dayErr = "Day required";
    } else {
        $day = test_input($_POST["day"]);
        if ($day < 1 || $day > 31) {
            $dayErr = "Day must be between 1-31";
        }
    }

    // MONTH
    if (empty($_POST["month"])) {
        $monthErr = "Month required";
    } else {
        $month = test_input($_POST["month"]);
        if ($month < 1 || $month > 12) {
            $monthErr = "Month must be 1-12";
        }
    }

    // YEAR
    if (empty($_POST["year"])) {
        $yearErr = "Year required";
    } else {
        $year = test_input($_POST["year"]);
        if ($year < 1953 || $year > 1998) {
            $yearErr = "Year must be 1953-1998";
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

<h2>Question 3</h2>

<form method="post">
  Day: <input type="number" name="day" min="1" max="31">
  <span style="color:red;"><?php echo $dayErr; ?></span><br><br>

  Month: <input type="number" name="month" min="1" max="12">
  <span style="color:red;"><?php echo $monthErr; ?></span><br><br>

  Year: <input type="number" name="year" min="1953" max="1998">
  <span style="color:red;"><?php echo $yearErr; ?></span><br><br>

  <input type="submit">
</form>

<?php
if(!$dayErr && !$monthErr && !$yearErr && $day){
    echo "<h3>Your Input:</h3>";
    echo "$day/$month/$year";
}
?>

</body>
</html>
