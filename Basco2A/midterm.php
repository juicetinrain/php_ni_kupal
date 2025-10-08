<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Shop Ordering System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg p-4">
    <h2 class="text-center mb-4">Pizza Shop Order Form</h2>
    <form method="POST">
      
      <!-- Customer Info -->
      <div class="mb-3">
        <label class="form-label">Customer Name</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Contact Number</label>
        <input type="text" class="form-control" name="contact" required>
      </div>

      <!-- Pizza Size -->
      <div class="mb-3">
        <label class="form-label">Pizza Size</label><br>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="size" value="Small" required>
          <label class="form-check-label">Small (₱150)</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="size" value="Medium">
          <label class="form-check-label">Medium (₱250)</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="size" value="Large">
          <label class="form-check-label">Large (₱350)</label>
        </div>
      </div>

      <!-- Toppings -->
      <div class="mb-3">
        <label class="form-label">Extra Toppings (+₱30 each)</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Pepperoni">
            <label class="form-check-label">Pepperoni</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Mushrooms">
            <label class="form-check-label">Mushrooms</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Onions">
            <label class="form-check-label">Onions</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Extra Cheese">
            <label class="form-check-label">Extra Cheese</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="toppings[]" value="Sausage">
            <label class="form-check-label">Sausage</label>
        </div>
        </div>

      <!-- Drink Selection -->
      <div class="mb-3">
        <label class="form-label">Choose a Drink</label>
        <select class="form-select" name="drink" required>
          <option value="Coke">Coke (₱50)</option>
          <option value="Sprite">Sprite (₱45)</option>
          <option value="Iced Tea">Iced Tea (₱40)</option>
          <option value="Water">Water (₱20)</option>
        </select>
      </div>

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" name="submit" class="btn btn-primary">Order Now</button>
      </div>
    </form>
  </div>


        <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $contact = $_POST ['contact'];
                $size = $_POST ['size'];
                $drink = $_POST ['drink'];
                $addons = 0;
                $total = 0;

                if ($size == "Small"){
                    $pizza = 150;
                } elseif ($size == "Medium"){
                    $pizza = 250;
                } elseif ($size == "Large"){
                    $pizza = 350;
                }

                if (!empty($_POST['toppings'])) {
                    foreach ($_POST['toppings'] as $toppings) {
                        $addons += 30;
                    }
                }

                if ($drink == "Coke"){
                    $beverage = 50;
                } elseif ($drink == "Sprite"){
                    $beverage = 45;
                } elseif ($drink == "Iced Tea"){
                    $beverage = 40;
                } elseif ($drink == "Water"){
                    $beverage = 20;
                }

                $total = $pizza + $addons + $beverage;
            } else {
                exit();
            }
        ?>
      <div class="card shadow-lg p-4 mt-4">
      <h2 class="text-center mb-3">Order Summary</h2>
      <p><strong>Customer:</strong> <?=$name?></p>
      <p><strong>Contact:</strong> <?=$contact?></p>
      <p><strong>Pizza Size:</strong> <?=$size?> (₱<?=$pizza?>)</p>
      <p><strong>Toppings:</strong> 
         <?php
            if (!empty($_POST['toppings'])) {
                foreach ($_POST['toppings'] as $toppings) {
                    echo"<br>$toppings";
                }
            } else {
                echo"<p>No Toppings chosen.</p>";
            }
         ?>
      </p>
	<p><strong>Toppings Total: <?=$addons?></strong> </p>
      <p><strong>Drink:</strong> <?=$drink?> (₱<?=$beverage?>)</p>
      <hr>
      <h4>Total Amount: ₱<?=$total?></h4>
    </div>
  </div>

</body>
</html>