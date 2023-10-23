<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Order Confirmation</h1>
    
    <?php
    // Check if the 'name' field is set in the POST data
    if (isset($_POST['name'])) {
        // Retrieve and sanitize user inputs
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $number_of_pizzas = htmlspecialchars($_POST['number_of_pizzas']);
        $size = htmlspecialchars($_POST['size']);
        $shape = htmlspecialchars($_POST['shape']);
        
        // Prepare a list of selected toppings
        $toppings = isset($_POST['toppings']) ? implode(', ', $_POST['toppings']) : 'None';
        
        $crust = htmlspecialchars($_POST['crust']);
        $delivery_method = htmlspecialchars($_POST['delivery_method']);
        $additional_comments = htmlspecialchars($_POST['additional_comments']);
    ?>
    <p>Thank you for placing your pizza order, <?php echo $name; ?>!</p>

    <h2>Order Details</h2>
    <ul>
        <li>Phone Number: <?php echo $phone; ?></li>
        <li>Email Address: <?php echo $email; ?></li>
        <li>Number of Pizzas: <?php echo $number_of_pizzas; ?></li>
        <li>Size: <?php echo $size; ?></li>
        <li>Shape: <?php echo $shape; ?></li>
        <li>Toppings: <?php echo $toppings; ?></li>
        <li>Crust: <?php echo $crust; ?></li>
        <li>Delivery Method: <?php echo $delivery_method; ?></li>
        <li>Additional Comments: <?php echo $additional_comments; ?></li>
    </ul>
    <?php
    } else {
        // Display an error message if no data is received
        echo "<p>No data received. Please go back and fill out the order form.</p>";
    }
    ?>
</body>
</html>
