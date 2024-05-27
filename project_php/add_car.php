<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];

    $sql = "INSERT INTO cars (make, model, year) VALUES ('$make', '$model', '$year')";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_cars.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Car Inventory</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="add_car.php" class="current">Add Car</a></li>
                    <li><a href="view_cars.php">View Cars</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="form-container">
            <h2>Add Car</h2>
            <form method="post" action="">
                <label for="make">Make:</label>
                <input type="text" id="make" name="make" required>
                <label for="model">Model:</label>
                <input type="text" id="model" name="model" required>
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" required>
                <input type="submit" value="Add Car">
            </form>
        </div>
    </div>
</body>
</html>
