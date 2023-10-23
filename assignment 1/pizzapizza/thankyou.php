<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank You for Your Order</title>
    <link rel="stylesheet" type="text/css" href="pizza.css">
</head>
<body>
    <h1>Thank You for Your Order</h1>

    <h2>Customer Information:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name'])) {
            echo "<p><b>Name:</b> " . $_POST['name'] . "</p>";
        }
        if (isset($_POST['number'])) {
            echo "<p><b>Contact Number:</b> " . $_POST['number'] . "</p>";
        }
        if (isset($_POST['email'])) {
            echo "<p><b>Email:</b> " . $_POST['email'] . "</p>";
        }
        if (isset($_POST['bdate'])) {
            echo "<p><b>Birth Date:</b> " . $_POST['bdate'] . "</p>";
        }
        if (isset($_POST['address'])) {
            echo "<p><b>Address:</b> " . $_POST['address'] . "</p>";
        }
        if (isset($_POST['city'])) {
            echo "<p><b>City:</b> " . $_POST['city'] . "</p>";
        }
    }
    ?>

    <h2>Order Details:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['menu'])) {
            echo "<p><b>Selected Pizza:</b> " . $_POST['menu'] . "</p>";
        }
        if (isset($_POST['size'])) {
            echo "<p><b>Pizza Size:</b> " . $_POST['size'] . "</p>";
        }
        if (isset($_POST['quantity'])) {
            echo "<p><b>Number of Pizzas:</b> " . $_POST['quantity'] . "</p>";
        }
        if (isset($_POST['crust'])) {
            echo "<p><b>Selected Crust:</b> " . $_POST['crust'] . "</p>";
        }
        if (isset($_POST['topping'])) {
            $toppings = $_POST['topping'];
            echo "<p><b>Extra Toppings:</b> " . implode(", ", $toppings) . "</p>";
        }
        if (isset($_POST['comment'])) {
            echo "<p><b>Additional Message:</b> " . $_POST['comment'] . "</p>";
        }
    }
    ?>
</body>
</html>
