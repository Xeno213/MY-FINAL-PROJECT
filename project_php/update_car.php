<?php include 'db.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['car_id'])) {
    $car_id = $_POST['car_id'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];


    $sql = "UPDATE cars SET make = '$make', model = '$model', year = '$year' WHERE id = $car_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_cars.php");
        exit;
    } else {
        echo "Error updating car: " . $conn->error;
    }
} else {
    echo "Invalid request";
    exit;
}
?>
