<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Employee Payslip</h4>
        </div>
        <div class="card-body">
            <?php 
            if ($_SERVER ['REQUEST_METHOD'] == "POST"){
                $employee = htmlspecialchars($_POST['employee']);
                $days = htmlspecialchars($_POST ['days']);
                $rate = htmlspecialchars($_POST ['rate']);
                $advance = htmlspecialchars($_POST ['advance']);
            }else{
                echo "<div class='alert alert-danger'> No data received. </div>";
                exit();
            }
            ?>
            <p class="lead">Here are the details you submitted:</p>
           
            <ul class="list-group">
                <li class="list-group-item"><strong>Employee Name:</strong> <?=$employee;?> </li>
                <li class="list-group-item"><strong>Total Days Worked:</strong> <?=$days;?> </li>
                <li class="list-group-item"><strong>Daily Rate:</strong> <?=$rate;?> </li>
            </ul>

            <div class="mt-4">
                <a href="payroll.php" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>