<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Car Inventory</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: gray;
            background-image: url('assets/images/carbg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            max-width: 800px;
            padding: 20px;
            background-color: gray;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        
        .btn-container {
            margin-bottom: 20px;
            text-align: center;
        }
        
        .btn {
            display: inline-block;
            margin-right: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        
        .car {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        
        .car img {
            width: 200px;
            border-radius: 10px;
        }
        
        .car h3 {
            margin-top: 10px;
            font-size: 20px;
            color: #333;
        }
        
        .car p {
            margin-top: 5px;
            font-size: 16px;
            color: #666;
        }
        
        .welcome {
            font-size: 50px;
            margin-bottom: 20px;
            text-align: center;
            color: white
            
        }
    </style>
</head>
<body>
    <div class="welcome">Welcome to Car Inventory</div>
    <div class="btn-container">
        <a href="add_car.php" class="btn">Add Car</a>
        <a href="view_cars.php" class="btn">View Cars</a>
    </div>
    <div class="container">
        <div class="car">
            <img src="assets/images/bmw.jpg" alt="BMW">
            <h3>BMW</h3>
            <p>German luxury vehicle brand</p>
        </div>
        <div class="car">
            <img src="assets/images/lambo.jpg" alt="Lamborghini">
            <h3>Lamborghini</h3>
            <p>Italian luxury sports car manufacturer</p>
        </div>
        <div class="car">
            <img src="assets/images/porsche.jpg" alt="Porsche">
            <h3>Porsche</h3>
            <p>German sports car and SUV manufacturer</p>
        </div>
        <div class="car">
            <img src="assets/images/supra.jpg" alt="Toyota Supra">
            <h3>Toyota Supra</h3>
            <p>Japanese sports car produced by Toyota</p>
        </div>
        <div class="car">
            <img src="assets/images/gtr.jpg" alt="Nissan GT-R">
            <h3>Nissan GT-R</h3>
            <p>Japanese sports car produced by Nissan</p>
        </div>
        <div class="car">
            <img src="assets/images/bugatti.jpg" alt="Bugatti">
            <h3>Bugatti</h3>
            <p>French luxury car manufacturer</p>
        </div>
    </div>
</body>
</html>
