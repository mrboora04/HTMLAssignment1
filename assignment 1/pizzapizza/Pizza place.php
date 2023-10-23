<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pizza Pizza</title>
    <link rel="stylesheet" type="text/css" href="pizza.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#"><img src="logo2.png" alt="Logo"></a>
            </div>
            <center>
                <h1>PIZZA PIZZA!</h1>
            </center>
        </nav>
    </header>
    <div class="image-container">
        <img src="p1.jpg" alt="Pizza" width="1263" height="500">
        <div class="text">WELCOME to PIZZA PIZZA</div>
    </div>
    <div class="product_text">
        <p>MENU</p> 
    </div>
    <div class="row">
        <div class="column">
            <img src="pizza-1.jpg" alt="Pizza" style="width:100%">
            <h3> Margherita Pizza</h3>
        </div>
		<div class="column">
			<img src="pizza-2.jpg" alt="Pizza" style="width:100%">
			<h3> White Mushrooms Pizza</h3>
		</div>
		<div class="column">
			<img src="pizza-3.jpg" alt="Pizza" style="width:100%" >
			<h3> Fresh Tomato Pizza</h3>
		</div>
		<div class="column">
			<img src="pizza-8.jpg" alt="Pizza" style="width:100%" >
			<h3> Fresh Basil Pizza</h3>
		</div>
		
	</div>
	<div class="row">
	<div class="column">
			<img src="pizza-4.jpg" alt="Pizza" style="width:100%">
			<h3>Tomato Mashroom Pizza </h3>
		</div>
		<div class="column">
			<img src="pizza-5.jpg" alt="Pizza" style="width:100%">
			<h3> Mashroom Basil Pizza</h3>
		</div>
		<div class="column">
			<img src="pizza-6.jpg" alt="Pizza" style="width:100%">
			<h3> Cheddar Cheese Pizza</h3>
		</div>
		<div class="column">
			<img src="pizza-7.jpg" alt="Pizza" style="width:100%">
			<h3> Olive Cheese Pizza</h3>
		</div>
    </div>
    <div class="content">
        <h1>ORDER HERE</h1>
    </div>
    <fieldset>
        <legend><h2>Customer Information</h2></legend>
        <form id="customer-info" action="thankyou.php" method="post">
            <p><b>Name:</b> <input type="text" name="name"></p>
            <p><b>Contact Number: </b><input type="text" name="number"></p>
            <p><b>Email: </b><input type="text" name="email"></p>
            <p><b>Birth Date:</b> <input type="text" name="bdate"></p>
            <p><b>Address: </b><input type="text" name="address"></p>
            <p><b>City: </b><input type="text" name="city"></p>
        </form>
    </fieldset>
    <fieldset>
        <legend><h2>Order Details</h2></legend>
        <form id="order-details" action="thankyou.php" method="post">
			<b> Select Your Pizza : </b>
			<select name="menu">
			<option value="pizza1">Margherita Pizza  $11</option>
			<option value="Pizza2">White Mushrooms Pizza  $12</option>
			<option value="Pizza3">Mashroom Basil Pizza  $13</option>
			<option value="Pizza4">Tomato Mashroom Pizza  $12.5</option>
			<option value="pizza5">Fresh Tomato Pizza  $13.5</option>
			<option value="Pizza6">Cheddar Cheese Pizza  $13</option>
			<option value="Pizza7">Olive Cheese Pizza  $12</option>
			<option value="Pizza8">Fresh Basil Pizza  $10</option>
			</select><br><br></form>
			<form id="pizza_form" action="thankyou.php" method="post">
			  <label>Pizza size:</label>
			<input type="radio" name="size" value="small"> Small<br>
			<input type="radio" name="size" value="medium"> Medium<br>
			<input type="radio" name="size" value="large"> Large<br><br>
			</form>
			
			<form id="name_pizza" action="thankyou.php" method="post">
			<b> Number of Pizza you would like to have: </b>			<!--Drop down menu-->
			<select name="menu">
			<option value="ny10">1</option>
			<option value="ny12">2</option>
			<option value="ny16">3</option>
			<option value="ny16">4</option>
			<option value="ny16">5</option>
			<option value="ny16">6</option>
			<option value="ny16">7</option>
			<option value="ny16">8</option>
			<option value="ny16">9</option>
			<option value="ny16">10</option>
			</select><br>
			<br>
			<b>Crust:</b><br>					<!--Radiio button-->
			
			<input type="radio" name="crust1"  value="thin">
			Thin Crust<br>
			<input type="radio" name="crust2"  value="deep">
			Deep Dish<br>
			<input type="radio" name="crust3"  value="HandTossed">
			Hand Tosseed<br>
			<br><b class="red"> * Extra Toppings:($1 each)</b><br><br>
							<!-- Checkbox -->
			<label>Choose your toppings:</label><br>
			<input type="checkbox" name="topping" id="topping1" value="cheese" required> Cheese<br><br>
			<input type="checkbox" name="topping" id="topping2" value="pepperoni" required> Tomato<br><br>
			<input type="checkbox" name="topping" id="topping3" value="mushrooms" required> Olives<br><br>
			<input type="checkbox" name="topping" id="topping4" value="onion" required> Onion<br><br>
			<input type="checkbox" name="topping" id="topping5" value="pical" required> Pical<br><br>
			
			
			<b>Any Message:</b> <br><br>				<!--message -->
			<textarea id="w3review" rows="3" cols="100" name="comment" placeholder=" We would Love to hear you.. !">
			</textarea>
			<br><br>
			<div class="button">
			<button type="submit" formaction="thankyou.php">Place an order</button>
			</div>
        </form>
    </fieldset>
    <footer>
        <p>&copy; 2023 PIZZA PIZZA</p>
    </footer>
</body>
</html>
