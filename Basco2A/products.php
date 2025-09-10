<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Select your favorite subject.</h2>
    <form action="" method="post">
        <input type="checkbox" name="items[]" id="" value="50"> Notebook (P50)<br>
        <input type="checkbox" name="items[]" id="" value="30"> Pencil (P30)<br>
        <input type="checkbox" name="items[]" id="" value="100"> Bag (P100)<br>
        <input type="checkbox" name="items[]" id="" value="75"> Shoes (P75)<br>
        <input type="checkbox" name="items[]" id="" value="25"> Eraser (P25)<br>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['items'])) {
                echo"<h3>You like the following items:</h3>";
                foreach ($_POST['items'] as $items) {
                    echo"$items <br>";
                }
            }
        } else {
            echo"<p>Please select at least one (1) subject.</p>";
        }
    ?>
</body>
</html>