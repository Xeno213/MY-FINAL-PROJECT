<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $car_id = $_GET['id'];


    $sql = "SELECT * FROM cars WHERE id = $car_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $car = $result->fetch_assoc();
    } else {
        echo "Car not found";
        exit;
    }
} else {
    echo "Invalid request";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Car</title>
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
                    <li><a href="add_car.php">Add Car</a></li>
                    <li><a href="view_cars.php">View Cars</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2>Edit Car</h2>
        <form method="post" action="update_car.php">
            <input type="hidden" name="car_id" value="<?php echo $car['id']; ?>">
            <label>Make:</label>
            <input type="text" name="make" value="<?php echo $car['make']; ?>" required>
            <label>Model:</label>
            <input type="text" name="model" value="<?php echo $car['model']; ?>" required>
            <label>Year:</label>
            <input type="number" name="year" value="<?php echo $car['year']; ?>" required>
            <input type="submit" value="Update Car">
        </form>
    </div>
</body>
</html>
