<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cars</title>
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
                    <li><a href="view_cars.php" class="current">View Cars</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2>Car List</h2>
        <table>
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
            <?php
            $sql = "SELECT * FROM cars";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['make']}</td>
                            <td>{$row['model']}</td>
                            <td>{$row['year']}</td>
                            <td>
                                <a href='edit_car.php?id={$row['id']}'>Edit</a> |
                                <a href='delete_car.php?id={$row['id']}'>Delete</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No cars found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
