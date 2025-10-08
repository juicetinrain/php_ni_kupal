<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Activity - Product Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4 text-center">🛒 Product Purchase</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" name="name" required vaue="">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" required value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Price per Item</label>
                <input type="number" class="form-control" name="price" required value="">
            </div>

            <div class="mb-3">
                <label class="form-label">Optional Add-ons</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="50">
                    <label class="form-check-label">Gift Wrap (+₱50)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="100">
                    <label class="form-check-label">Express Shipping (+₱100)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="200">
                    <label class="form-check-label">Warranty (+₱200)</label>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">Compute Total</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $quantity = $_POST ['quantity'];
            $price = $_POST ['price'];
            $subtotal = $price * $quantity;
            $total=0;
            $addons=0;
            if (!empty($_POST['addons'])) {
                foreach ($_POST['addons'] as $adds) {
                    $addons += $adds;
                }   
            }
            $total = $subtotal + $addons;
        } else {
            exit();
        }
        ?>
        <div class="alert alert-success mt-4">
            <h4>💡 Purchase Summary</h4>
            <p><strong>Name:</strong> <?=$name;?> </p>
            <p><strong>Quantity:</strong> <?=$quantity;?> </p>
            <p><strong>Price per Item:</strong> ₱<?=number_format($price, 2);?> </p>
            <p><strong>Subtotal:</strong> ₱<?=number_format($subtotal, 2);?> </p>
            <p><strong>Add-ons:</strong> ₱<?=number_format($addons, 2);?></p>
            <h5><strong>Final Total:</strong> ₱<?=number_format($total, 2);?></h5>
        </div>
    </div>
</div>
</body>
</html>
