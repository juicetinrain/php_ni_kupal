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
        <input type="checkbox" name="subjects[]" id="" value="Math"> Math<br>
        <input type="checkbox" name="subjects[]" id="" value="Science"> Science<br>
        <input type="checkbox" name="subjects[]" id="" value="English"> English<br>
        <input type="checkbox" name="subjects[]" id="" value="Rizal"> Rizal<br>
        <input type="checkbox" name="subjects[]" id="" value="Pathfit"> Pathfit<br>
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            if (!empty($_POST['subjects'])) {
                echo"<h3>You like the following subjects:</h3>";
                foreach ($_POST['subjects'] as $subjects) {
                    echo"$subjects <br>";
                }
            }
        } else {
            echo"<p>Please select at least one (1) subject.</p>";
        }
    ?>
</body>
</html>