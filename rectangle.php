<!DOCTYPE html>
<html>
    <head>
        <title>Rectangle Area Calculator</title>
</head>
<body>
    <h2>Rectangle Area Calculator</h2>
    <form method="post">
        Length:<input type="number" name="length" step="0.01" required><br><br>
        Width:<input type="number" name="width" step="0.01" required><br><br>
        <input type="submit" value="Calculate Area">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $length=floatval($_POST['length']);
    $width=floatval($_POST['width']);
    $area=$length*$width;
    echo "<h3>Result:</h3>";
    echo "The area of the rectangle is <b>$area</b> square units.";
}
?>
</body>
<html>