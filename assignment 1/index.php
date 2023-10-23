<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <title>Pizza Order Form</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="shortcut icon" href="images/pizza-oven.png" type="image/x-icon" />
</head>
</head>
<body>
    <img scr="images/pizza-backgroung.jpg" alt="pizza Logo" width="200" height="200">
    <h1>Pizza Order Form</h1>
    <!-- Start of the pizza order form -->
    <form action="process_order.php" method="post" class="order-form">
        <!-- Contact Information Section -->
        <h2>Contact Information</h2>
        <!-- Name Input Field -->
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required><br>
        <!-- Phone Number Input Field -->
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br>
        <!-- Email Address Input Field -->
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br>
        <!-- Pizza Details Section -->
        <h2>Pizza Details</h2>
        <!-- Number of Pizzas Input Field -->
        <label for="number_of_pizzas">Number of Pizzas (Max 10 for Delivery):</label>
        <input type="number" id="number_of_pizzas" name="number_of_pizzas" min="1" max="10" required><br>
        <!-- Size Selection Dropdown -->
        <label for="size">Size:</label>
        <select id="size" name="size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select><br>
        <!-- Pizza Shape Selection (Round/Square) -->
        <label for="shape">Shape:</label>
        <input type="radio" id="shape-round" name="shape" value="round" required>
        <label for="shape-round">Round</label>
        <input type="radio" id="shape-square" name="shape" value="square" required>
        <label for="shape-square">Square</label><br>
        <!-- Toppings Selection (Pepperoni/Mushrooms) -->
        <label for="toppings">Toppings:</label>
        <input type="checkbox" id="topping-pepperoni" name="toppings[]" value="Pepperoni">
        <label for="topping-pepperoni">Pepperoni</label>
        <input type="checkbox" id="topping-mushrooms" name="toppings[]" value="Mushrooms">
        <label for="topping-mushrooms">Mushrooms</label><br>
        <!-- Crust Selection Dropdown -->
        <label for="crust">Crust:</label>
        <select id="crust" name="crust">
            <option value="thin">Thin Crust</option>
            <option value="deep">Deep Dish</option>
        </select><br>
        <!-- Delivery Options Section -->
        <h2>Delivery Options</h2>
        <!-- Takeout Radio Button -->
        <input type="radio" id="takeout" name="delivery_method" value="Takeout" required>
        <label for="takeout">Takeout</label>
        <!-- Delivery Radio Button -->
        <input type="radio" id="delivery" name="delivery_method" value="Delivery" required>
        <label for="delivery">Delivery</label>
        <!-- Eat-In Radio Button -->
        <input type="radio" id="eat-in" name="delivery_method" value="Eat-In" required>
        <label for="eat-in">Eat-In</label><br>
        <!-- Additional Comments Text Area -->
        <label for="additional_comments">Additional Comments:</label><br>
        <textarea id="additional_comments" name="additional_comments" rows="4"></textarea><br>
        <!-- Submit Button to process the order -->
        <input type="submit" value="Submit Order">
    </form>
</body>
</html>
